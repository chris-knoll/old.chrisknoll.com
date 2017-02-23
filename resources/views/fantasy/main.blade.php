@extends('layouts.master')

@section('content')
<h1>Fantasy Basketball Stat Calculator / Player Rater</h1>

    @if (isset($myTeam))
    <div class="row col-xs-12">
        <table class="table table-hover table-condensed col-xs-12">
            <thead>
                <th></th>
                <th>Player</th>
                <th>Team</th>
                <th>Games</th>
                <th>MPG</th>
                <th>FGM</th>
                <th>FGA</th>
                <th>FG%</th>
                <th>FTM</th>
                <th>FTA</th>
                <th>FT%</th>
                <th>3PM</th>
                <th>REB</th>
                <th>AST</th>
                <th>STL</th>
                <th>BLK</th>
                <th>TO</th>
                <th>PTS</th>
                <th>Rating</th>
            </thead>
            <tbody>
                @foreach ($myTeam as $indexKey => $player)
                    <tr>
                    <td>{{ $indexKey + 1 }}</td>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i < 17 || $i == 20)
                            <td nowrap>{{ $player[$i] }}</td>
                        @endif 
                    @endfor
                    </tr>
                @endforeach
            </tbody>
    @endif

    @if (isset($myTotals))
        <tr>
            <td class="text-right" colspan="2">Totals:</td>
            <td></td>
            <td>{{ $myTotals['GAMES'] }}</td>
            <td>{{ $myTotals['MPG'] }}</td>
            <td>{{ $myTotals['FGM'] }}</td>
            <td>{{ $myTotals['FGA'] }}</td>
            <td
                @if ($myTotals['FGP'] > $opponentTotals['FGP'])
                    class="text-primary"
                @elseif ($myTotals['FGP'] < $opponentTotals['FGP'])
                    class="text-danger"
                @endif
            >{{ $myTotals['FGP'] }}</td>
            <td>{{ $myTotals['FTM'] }}</td>
            <td>{{ $myTotals['FTA'] }}</td>
            <td
                @if ($myTotals['FTP'] > $opponentTotals['FTP'])
                    class="text-primary"
                @elseif ($myTotals['FTP'] < $opponentTotals['FTP'])
                    class="text-danger"
                @endif
            >{{ $myTotals['FTP'] }}</td>
            <td
                @if ($myTotals['3PM'] > $opponentTotals['3PM'])
                    class="text-primary"
                @elseif ($myTotals['3PM'] < $opponentTotals['3PM'])
                    class="text-danger"
                @endif
            >{{ $myTotals['3PM'] }}</td>
            <td
                @if ($myTotals['REB'] > $opponentTotals['REB'])
                    class="text-primary"
                @elseif ($myTotals['REB'] < $opponentTotals['REB'])
                    class="text-danger"
                @endif>{{ $myTotals['REB'] }}</td>
            <td
                @if ($myTotals['AST'] > $opponentTotals['AST'])
                    class="text-primary"
                @elseif ($myTotals['AST'] < $opponentTotals['AST'])
                    class="text-danger"
                @endif>{{ $myTotals['AST'] }}</td>
            <td
                @if ($myTotals['STL'] > $opponentTotals['STL'])
                    class="text-primary"
                @elseif ($myTotals['STL'] < $opponentTotals['STL'])
                    class="text-danger"
                @endif>{{ $myTotals['STL'] }}</td>
            <td
                @if ($myTotals['BLK'] > $opponentTotals['BLK'])
                    class="text-primary"
                @elseif ($myTotals['BLK'] < $opponentTotals['BLK'])
                    class="text-danger"
                @endif>{{ $myTotals['BLK'] }}</td>
            <td
                @if ($myTotals['TO'] < $opponentTotals['TO'])
                    class="text-primary"
                @elseif ($myTotals['TO'] > $opponentTotals['TO'])
                    class="text-danger"
                @endif>{{ $myTotals['TO'] }}</td>
            <td
                @if ($myTotals['PTS'] > $opponentTotals['PTS'])
                    class="text-primary"
                @elseif ($myTotals['PTS'] < $opponentTotals['PTS'])
                    class="text-danger"
                @endif>{{ $myTotals['PTS'] }}</td>
        </tr>
    @endif

    @if (isset($opponentTotals))
        <tr>
            <td class="text-right" colspan="2">Totals:</td>
            <td></td>
            <td>{{ $opponentTotals['GAMES'] }}</td>
            <td>{{ $opponentTotals['MPG'] }}</td>
            <td>{{ $opponentTotals['FGM'] }}</td>
            <td>{{ $opponentTotals['FGA'] }}</td>
            <td
                @if ($myTotals['FGP'] < $opponentTotals['FGP'])
                    class="text-primary"
                @elseif ($myTotals['FGP'] > $opponentTotals['FGP'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['FGP'] }}</td>
            <td>{{ $opponentTotals['FTM'] }}</td>
            <td>{{ $opponentTotals['FTA'] }}</td>
            <td
                @if ($myTotals['FTP'] < $opponentTotals['FTP'])
                    class="text-primary"
                @elseif ($myTotals['FTP'] > $opponentTotals['FTP'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['FTP'] }}</td>
            <td
                @if ($myTotals['3PM'] < $opponentTotals['3PM'])
                    class="text-primary"
                @elseif ($myTotals['3PM'] > $opponentTotals['3PM'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['3PM'] }}</td>
            <td
                @if ($myTotals['REB'] < $opponentTotals['REB'])
                    class="text-primary"
                @elseif ($myTotals['REB'] > $opponentTotals['REB'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['REB'] }}</td>
            <td
                @if ($myTotals['AST'] < $opponentTotals['AST'])
                    class="text-primary"
                @elseif ($myTotals['AST'] > $opponentTotals['AST'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['AST'] }}</td>
            <td
                @if ($myTotals['STL'] < $opponentTotals['STL'])
                    class="text-primary"
                @elseif ($myTotals['STL'] > $opponentTotals['STL'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['STL'] }}</td>
            <td
                @if ($myTotals['BLK'] < $opponentTotals['BLK'])
                    class="text-primary"
                @elseif ($myTotals['BLK'] > $opponentTotals['BLK'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['BLK'] }}</td>
            <td
                @if ($myTotals['TO'] > $opponentTotals['TO'])
                    class="text-primary"
                @elseif ($myTotals['TO'] < $opponentTotals['TO'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['TO'] }}</td>
            <td
                @if ($myTotals['PTS'] < $opponentTotals['PTS'])
                    class="text-primary"
                @elseif ($myTotals['PTS'] > $opponentTotals['PTS'])
                    class="text-danger"
                @endif
            >{{ $opponentTotals['PTS'] }}</td>
        </tr>
    @endif

    @if (isset($opponentTeam))
            <tr><td></td></tr>
            <thead>
                <th></th>
                <th>Player</th>
                <th>Team</th>
                <th>Games</th>
                <th>MPG</th>
                <th>FGM</th>
                <th>FGA</th>
                <th>FG%</th>
                <th>FTM</th>
                <th>FTA</th>
                <th>FT%</th>
                <th>3PM</th>
                <th>REB</th>
                <th>AST</th>
                <th>STL</th>
                <th>BLK</th>
                <th>TO</th>
                <th>PTS</th>
                <th>Rating</th>
            </thead>
            <tbody>
                @foreach ($opponentTeam as $indexKey => $player)
                    <tr>
                    <td>{{ $indexKey + 1 }}</td>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i < 17 || $i == 20)
                            <td nowrap>{{ $player[$i] }}</td>
                        @endif 

                    @endfor
                    </tr>
                @endforeach
            </tbody>
    @endif

    @if (isset($myTeam))
        </table>
    </div>
    @endif

    <div class="row">
        <div class="col-xs-12">
            @include('fantasy.input')
        </div>
    </div>

@endsection