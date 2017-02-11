<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FantasyController extends Controller
{
    //
    public function parseInput(Request $request)
    {
        $stats = preg_split('/[^\\S ]+/', $request->input('team-stats'));
        //print_r($stats);

        $currentPlayer = array();
        $parsedStats = array();

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
            }
            // Check if this is the upcoming game - throw it away
            else if ($this->isUpcomingGame($stat))
            {
                // Ignore current stat AND remove the previous one as it's the opponent they're playing
                array_pop($currentPlayer);
            }
            // Only need 18 stats
            else if (sizeOf($currentPlayer) < 18)
            {
                // Push it onto the array
                array_push($currentPlayer, $stat);
            }

            if (sizeOf($currentPlayer) == 18 &&
                $this->isPosition($currentPlayer[0]))
            {
                array_push($parsedStats, $currentPlayer);
                $currentPlayer = array();
            }

            if ($this->isPosition($stat))
            {
                $currentPlayer = array();
                array_push($currentPlayer, $stat);
            }

        }

        return view('fantasy.main', ['myTeamStats' => $parsedStats]);
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

}