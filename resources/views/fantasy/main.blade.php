@extends('layouts.master')

@section('content')
    @if (isset($myTeam))
    <div class="row">
        <table class="table table-hover col-xs-12">
            <thead>
                <th>Player</th>
                <th>Team</th>
                <th>Games</th>
                <th>MPG</th>
                <th>FGM/FGA</th>
                <th>FG%</th>
                <th>FTM/FTA</th>
                <th>FT%</th>
                <th>3PM</th>
                <th>REB</th>
                <th>AST</th>
                <th>STL</th>
                <th>BLK</th>
                <th>TO</th>
                <th>PTS</th>
            </thead>
            <tbody>
                @foreach ($myTeam as $player)
                    <tr>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i != 0 && $i < 16)
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
            <th>{{ $myTotals['GAMES'] }}</th>
            <th colspan="5"></th>
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
            <th>{{ $opponentTotals['GAMES'] }}</th>
            <th colspan="5"></th>
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
                <th>FGM/FGA</th>
                <th>FG%</th>
                <th>FTM/FTA</th>
                <th>FT%</th>
                <th>3PM</th>
                <th>REB</th>
                <th>AST</th>
                <th>STL</th>
                <th>BLK</th>
                <th>TO</th>
                <th>PTS</th>
            </thead>
            <tbody>
                @foreach ($opponentTeam as $player)
                    <tr>
                    @for ($i = 0; $i < sizeOf($player); $i++)
                        @if ($i != 0 && $i < 16)
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