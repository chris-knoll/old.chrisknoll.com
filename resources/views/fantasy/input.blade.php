<form action="{{ route('fantasy.calculate') }}" method="post">

    <div class="form-group col-xs-6">
        <label for="exampleTextarea">My Team</label>
        <textarea class="form-control" id="team-input" name="my-team-stats" rows="3"></textarea>
    </div>

    <div class="form-group col-xs-6">
        <label for="exampleTextarea">Opponent Team</label>
        <textarea class="form-control" id="team-input" name="opponent-team-stats" rows="3"></textarea>
    </div>    

    <div class="form-group col-xs-12">
        <label for="exampleTextarea">NBA Team Games Schedule (Copy one row of numbers only from 
            <a href="https://basketballmonster.com/ScheduleGrid.aspx" target="_blank">here</a>)
        </label>
        <textarea class="form-control" id="games-input" name="games" rows="1"></textarea>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Calculate Stats</button>
    </div>
    {{--Token--}}
    {{ csrf_field() }}
</form>