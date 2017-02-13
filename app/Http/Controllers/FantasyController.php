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
        //print_r($stats);

        $myTeam = $this->parseTeamPlayers($myAverages, $teamGames);
        $opponentTeam = $this->parseTeamPlayers($opponentAverages, $teamGames);

        usort($myTeam, function (array $a, array $b) { return $b[17] - $a[17]; });
        usort($opponentTeam, function (array $a, array $b) { return $b[17] - $a[17]; });

        $myTotals = $this->calculateTeamStats($myTeam);
        $opponentTotals = $this->calculateTeamStats($opponentTeam);

        return view('fantasy.main', [
            'myTeam' => $myTeam,
            'opponentTeam' => $opponentTeam,
            'myTotals' => $myTotals,
            'opponentTotals' => $opponentTotals
        ]);
    }

    public function parseTeamPlayers($stats, $teamGames)
    {
        $currentPlayer = array();
        $teamPlayers = array();

        foreach ($stats as $stat)
        {
            // Check if it's the player name
            if (strlen($stat) > 10 &&
                strpos($stat, ',') !== false)
            {
                $player = explode(',', $stat);
                array_push($currentPlayer, $player[0]);

                $team = explode(' ', $player[1]);
                array_push($currentPlayer, strtoupper($team[1]));

                if (array_key_exists($currentPlayer[2], $teamGames))
                {
                    array_push($currentPlayer, $teamGames[$currentPlayer[2]]);
                }
            }
            // Check if this is the upcoming game - throw it away
            else if ($this->isUpcomingGame($stat))
            {
                // Ignore current stat AND remove the previous one as it's the opponent they're playing
                array_pop($currentPlayer);
            }
            else if (sizeOf($currentPlayer) > 8 && 
                    sizeOf($currentPlayer) < 16)
            {
                // These are our calculating stats so multiply by the number of games this player plays
                array_push($currentPlayer, $stat * $currentPlayer[3]);
            }
            // Only need 18 stats
            else if (sizeOf($currentPlayer) < 19)
            {
                // Push it onto the array
                array_push($currentPlayer, $stat);
            }

            if (sizeOf($currentPlayer) == 19 &&
                $this->isPosition($currentPlayer[0]))
            {
                if($currentPlayer[3] !== '--')
                {
                    array_push($teamPlayers, $currentPlayer);
                }
                $currentPlayer = array();
            }

            if ($this->isPosition($stat))
            {
                $currentPlayer = array();
                array_push($currentPlayer, $stat);
            }
        }

        return $teamPlayers;
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

    public function isUpcomingGame($string)
    {
        if (strpos($string, ':') !== false)
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
            'SAS' => $rawGames[26],
            'TOR' => $rawGames[27],
            'UTA' => $rawGames[28],
            'WSH' => $rawGames[29]
        );

        return $gamesPerTeam;
    }

    public function calculateTeamStats($teamStats)
    {
        $totalStats = array(
            'GAMES' => 0,
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
            $totalStats['GAMES'] += $player[3];
            $totalStats['3PM'] += $player[9];
            $totalStats['REB'] += $player[10];
            $totalStats['AST'] += $player[11];
            $totalStats['STL'] += $player[12];
            $totalStats['BLK'] += $player[13];
            $totalStats['TO'] += $player[14];
            $totalStats['PTS'] += $player[15];
        }

        return $totalStats;
    }
}