<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FantasyController extends Controller
{
    //
    public function calculateWeeklyStats(Request $request)
    {
        $teamGames = $this->parseTeamGames($request->input('games'));
        $myAverages = preg_split('/[^\\S ]+/', $request->input('my-team-stats'));
        $opponentAverages = preg_split('/[^\\S ]+/', $request->input('opponent-team-stats'));

        $statWeights = $this->getStatWeight($request);

        $myTeam = null;
        $myTotals = null;
        if (isset($myAverages[1]))
        {
            $myTeam = $this->parseTeamPlayers($myAverages, $teamGames, $statWeights);
            usort($myTeam, function (array $a, array $b) { return $b[20] - $a[20]; });
            $myTotals = $this->calculateTeamStats($myTeam);
        }

        $opponentTeam = null;
        $opponentTotals = null;
        if (isset($opponentAverages[1]))
        {
            $opponentTeam = $this->parseTeamPlayers($opponentAverages, $teamGames, $statWeights);
            usort($opponentTeam, function (array $a, array $b) { return $b[20] - $a[20]; });
            $opponentTotals = $this->calculateTeamStats($opponentTeam);
        }

        return view('fantasy.main', [
            'myTeam' => $myTeam,
            'opponentTeam' => $opponentTeam,
            'myTotals' => $myTotals,
            'opponentTotals' => $opponentTotals
        ]);
    }

    public function getStatWeight($request) 
    {
        $statWeights = array(
            '3PM' => $request->input('weight3PM'),
            'REB' => $request->input('weightREB'),
            'AST' => $request->input('weightAST'),
            'STL' => $request->input('weightSTL'),
            'BLK' => $request->input('weightBLK'),
            'TO'  => $request->input('weightTO'),
            'PTS' => $request->input('weightPTS')
        );

        return $statWeights;
    }

    public function parseTeamPlayers($stats, $teamGames, $statWeights)
    {
        $currentPlayer = array();
        $teamPlayers = array();

        foreach ($stats as $stat)
        {
            // Ignore positions and Free Agent status (FA / WA)
            if ($this->isPosition($stat) ||
                substr($stat, 0, 2) === 'FA' ||
                substr($stat, 0, 2) === 'WA') 
            {
                // Ignore
            }
            // Check if it's the player name
            else if (strlen($stat) > 10 &&
                strpos($stat, ',') !== false)
            {
                // Reset current player if there's data
                if (isset($currentPlayer[0]))
                {
                    $currentPlayer = array();
                }
                $player = explode(',', $stat);
                array_push($currentPlayer, $player[0]);

                $team = explode(' ', $player[1]);
                array_push($currentPlayer, strtoupper($team[1]));

                if (isset ($currentPlayer[1]) && array_key_exists($currentPlayer[1], $teamGames))
                {
                    array_push($currentPlayer, $teamGames[$currentPlayer[1]]);
                }
            }
            // Check if stat is FTM/FTA or FGM/FGA and split it
            else if (strpos($stat, '/') !== false && 
                    (strpos($stat, '.') !== false))
            {
                $madeAttemptArray = explode('/', $stat);
                // Need to multiply attempts and makes by games played
                array_push($currentPlayer, $madeAttemptArray[0] * $currentPlayer[2]);
                array_push($currentPlayer, $madeAttemptArray[1] * $currentPlayer[2]);
            }
            // Check if this is the upcoming game - throw it away
            else if ($this->isGame($stat))
            {
                // Ignore current stat AND remove the previous one as it's the opponent they're playing
                array_pop($currentPlayer);
            }
            else if (sizeOf($currentPlayer) > 9 && 
                    sizeOf($currentPlayer) < 17)
            {
                // These are our calculating stats so multiply by the number of games this player plays
                if (is_numeric($stat) && is_numeric($currentPlayer[2])) 
                {
                    array_push($currentPlayer, $stat * $currentPlayer[2]);
                }
            }
            // Only need 18 stats
            else if (sizeOf($currentPlayer) < 20)
            {
                // Push it onto the array
                array_push($currentPlayer, $stat);
            }

            if (sizeOf($currentPlayer) == 20)
            {
                if(array_key_exists($currentPlayer[1], $teamGames))
                {
                    $currentPlayer = $this->calculateWeeklyRating($currentPlayer, $statWeights);
                    array_push($teamPlayers, $currentPlayer);
                }
                $currentPlayer = array();
            }

            // if ($this->isPosition($stat))
            // {
            //     $currentPlayer = array();
            //     array_push($currentPlayer, $stat);
            // }
        }

        return $teamPlayers;
    }

    public function calculateWeeklyRating($player, $statWeights)
    {
        $rating = 
            ($player[10] * 11.96 * $statWeights['3PM']) +  // 3PM
            ($player[11] * 2.68 * $statWeights['REB']) + // REB
            ($player[12] * 4.73 * $statWeights['AST']) +   // AST
            ($player[13] * 15.36 * $statWeights['STL']) +  // STL
            ($player[14] * 24.33 * $statWeights['BLK'])    // BLK
            - ($player[15] * 8.14 * $statWeights['TO']) + // TO
            ($player[16] * $statWeights['PTS']);           // PTS

        array_push($player, round($rating));
        return $player;
    }

    public function isPosition($string)
    {
        if ($string === 'PG' ||
            $string === 'SG' ||
            $string === 'SF' ||
            $string === 'PF' ||
            $string === 'G' ||
            $string === 'F' ||
            $string === 'C' ||
            $string === 'UTIL' ||
            $string === 'Bench')
        {
            return true;
        } else {
            return false;
        }
    }

    public function isGame($string)
    {
        if (strpos($string, ':') !== false ||
            starts_with($string, 'W ') ||
            starts_with($string, 'L '))
        {
            return true;
        } else {
            return false;
        }
    }

    public function parseTeamGames($string)
    {
        $rawGames = preg_split('/[\t]+/', $string);
        $gamesPerTeam = array(
            'ATL' => $rawGames[0],
            'BKN' => $rawGames[1],
            'BOS' => $rawGames[2],
            'CHA' => $rawGames[3],
            'CHI' => $rawGames[4],
            'CLE' => $rawGames[5],
            'DAL' => $rawGames[6],
            'DEN' => $rawGames[7],
            'DET' => $rawGames[8],
            'GS' => $rawGames[9],
            'HOU' => $rawGames[10],
            'IND' => $rawGames[11],
            'LAC' => $rawGames[12],
            'LAL' => $rawGames[13],
            'MEM' => $rawGames[14],
            'MIA' => $rawGames[15],
            'MIL' => $rawGames[16],
            'MIN' => $rawGames[17],
            'NOR' => $rawGames[18],
            'NY' => $rawGames[19],
            'OKC' => $rawGames[20],
            'ORL' => $rawGames[21],
            'PHI' => $rawGames[22],
            'PHO' => $rawGames[23],
            'POR' => $rawGames[24],
            'SAC' => $rawGames[25],
            'SA' => $rawGames[26],
            'TOR' => $rawGames[27],
            'UTAH' => $rawGames[28],
            'WSH' => $rawGames[29]
        );

        return $gamesPerTeam;
    }

    public function calculateTeamStats($teamStats)
    {
        $totalStats = array(
            'GAMES' => 0,
            'MPG' => 0,
            'FGM' => 0,
            'FGA' => 0,
            'FGP' => 0,
            'FTM' => 0,
            'FTA' => 0,
            'FTP' => 0,
            '3PM' => 0,
            'REB' => 0,
            'AST' => 0,
            'STL' => 0,
            'BLK' => 0,
            'TO' => 0,
            'PTS' => 0
        );

        foreach($teamStats as $player)
        {
            $totalStats['GAMES'] += $player[2];
            $totalStats['MPG'] += $player[3];
            $totalStats['FGM'] += $player[4];
            $totalStats['FGA'] += $player[5];
            // Don't sum field goal percentage
            $totalStats['FTM'] += $player[7];
            $totalStats['FTA'] += $player[8];
            // Don't sum free throw percentage
            $totalStats['3PM'] += $player[10];
            $totalStats['REB'] += $player[11];
            $totalStats['AST'] += $player[12];
            $totalStats['STL'] += $player[13];
            $totalStats['BLK'] += $player[14];
            $totalStats['TO'] += $player[15];
            $totalStats['PTS'] += $player[16];
        }

        if ($totalStats['FGA'] !== 0)
            $totalStats['FGP'] = number_format($totalStats['FGM'] / $totalStats['FGA'], 3);
        if ($totalStats['FTA'] !== 0)
            $totalStats['FTP'] = number_format($totalStats['FTM'] / $totalStats['FTA'], 3);

        return $totalStats;
    }
}