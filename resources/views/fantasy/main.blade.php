@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @include('fantasy.input')
        </div>
    </div>

    @if (isset($myTeamStats))
    <div class="row">
        <table class="table table-hover col-xs-12">
            <thead>
                <th></th>
                <th>Player</th>
                <th>Team</th>
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
                <th>PR15</th>
                <th>%OWN</th>
                <th>+/-</th>
            </thead>
            <tbody>
                @foreach ($myTeamStats as $player)
                    <tr>
                    @foreach($player as $stat)
                        <td>{{ $stat }}</td>
                    @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

@endsection