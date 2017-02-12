<form action="{{ route('fantasy.parse') }}" method="post">

    <div class="form-group">
        <label for="exampleTextarea">Input Team Statistics in box below</label>
        <textarea class="form-control" id="team-input" name="team-stats" rows="5">
            {{ old('team-stats') }}
        </textarea>
    </div>

    <div class="form-group">
        <label for="exampleTextarea">NBA Team Games Schedule (Copy one row of numbers only from 
            <a href="https://basketballmonster.com/ScheduleGrid.aspx" target="_blank">here</a>)
        </label>
        <textarea class="form-control" id="games-input" name="games" rows="1">
            {{ old('games') }}
        </textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Stats</button>
    </div>
    {{--Token--}}
    {{ csrf_field() }}
</form>