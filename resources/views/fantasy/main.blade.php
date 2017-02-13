@extends('layouts.master')

@section('content')
    @if (isset($myTeam))
    <div class="row col-xs-12">
        <table class="table table-hover table-condensed col-xs-12">
            <thead>
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
                @foreach ($myTeam as $player)
                    <tr>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i < 17 || $i == 20)
                            <td>{{ $player[$i] }}</td>
                        @endif 
                    @endfor
                    </tr>
                @endforeach
            </tbody>
    @endif

    @if (isset($myTotals))
        <tr>
            <th>Totals:</th>
            <th></th>
            <td>{{ $myTotals['GAMES'] }}</td>
            <td>{{ $myTotals['MPG'] }}</td>
            <td>{{ $myTotals['FGM'] }}</td>
            <td>{{ $myTotals['FGA'] }}</td>
            <th>{{ $myTotals['FGP'] }}</th>
            <td>{{ $myTotals['FTM'] }}</td>
            <td>{{ $myTotals['FTA'] }}</td>
            <th>{{ $myTotals['FTP'] }}</th>
            <th>{{ $myTotals['3PM'] }}</th>
            <th>{{ $myTotals['REB'] }}</th>
            <th>{{ $myTotals['AST'] }}</th>
            <th>{{ $myTotals['STL'] }}</th>
            <th>{{ $myTotals['BLK'] }}</th>
            <th>{{ $myTotals['TO'] }}</th>
            <th>{{ $myTotals['PTS'] }}</th>
        </tr>
    @endif

    @if (isset($opponentTotals))
        <tr>
            <th>Totals:</th>
            <th></th>
            <td>{{ $opponentTotals['GAMES'] }}</td>
            <td>{{ $opponentTotals['MPG'] }}</td>
            <td>{{ $opponentTotals['FGM'] }}</td>
            <td>{{ $opponentTotals['FGA'] }}</td>
            <th>{{ $opponentTotals['FGP'] }}</th>
            <td>{{ $opponentTotals['FTM'] }}</td>
            <td>{{ $opponentTotals['FTA'] }}</td>
            <th>{{ $opponentTotals['FTP'] }}</th>
            <th>{{ $opponentTotals['3PM'] }}</th>
            <th>{{ $opponentTotals['REB'] }}</th>
            <th>{{ $opponentTotals['AST'] }}</th>
            <th>{{ $opponentTotals['STL'] }}</th>
            <th>{{ $opponentTotals['BLK'] }}</th>
            <th>{{ $opponentTotals['TO'] }}</th>
            <th>{{ $opponentTotals['PTS'] }}</th>
        </tr>
    @endif

    @if (isset($opponentTeam))
            <tr><td></td></tr>
            <thead>
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
                @foreach ($opponentTeam as $player)
                    <tr>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i < 17 || $i == 20)
                            <td>{{ $player[$i] }}</td>
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