<form action="{{ route('fantasy.parse') }}" method="post">
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="team" id="myteam" value="myteam" checked>
            My Team
        </label>

        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="team" id="opponent" value="opponent">
            Opponent's Team
        </label>
    </div>

    <div class="form-group">
        <label for="exampleTextarea">Input Team Statistics in box below</label>
        <textarea class="form-control" id="team-input" name="team-stats" rows="5"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Stats</button>
    </div>
    {{--Token--}}
    {{ csrf_field() }}
</form>