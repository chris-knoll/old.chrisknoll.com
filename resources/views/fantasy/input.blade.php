<form name="fbForm" action="{{ route('fantasy.calculate') }}" method="post">

    <div class="form-group col-xs-6">
        <label for="my-team-stats">
            My Team
            <br />
            <button class="btn btn-sm btn-secondary" name="mySampleTeam1">Sample Team 1</button>
            <button class="btn btn-sm btn-secondary" name="mySampleTeam2">Sample Team 2</button>
            <button class="btn btn-sm btn-secondary" name="mySampleTeam3">Sample Team 3</button>
            <button class="btn btn-sm btn-danger" name="clearMyTeam">Clear</button>
        </label>
        <textarea class="form-control" id="team-input" name="my-team-stats" rows="3" placeholder="Enter team data or select a sample team above" required></textarea>
    </div>

    <div class="form-group col-xs-6">
        <label for="opponent-team-stats">
            Opponent Team
            <br />
            <button class="btn btn-sm btn-secondary" name="oppSampleTeam1">Sample Team 1</button>
            <button class="btn btn-sm btn-secondary" name="oppSampleTeam2">Sample Team 2</button>
            <button class="btn btn-sm btn-secondary" name="oppSampleTeam3">Sample Team 3</button>
            <button class="btn btn-sm btn-danger" name="clearOppTeam">Clear</button>
        </label>
        <textarea class="form-control" id="team-input" name="opponent-team-stats" rows="3"
        placeholder="Enter team data or select a sample team above"></textarea>
    </div>    

    <div class="form-group col-xs-12">
        <label for="games">NBA Team Games Schedule (Copy one row of numbers only from
            <a href="https://basketballmonster.com/ScheduleGrid.aspx" target="_blank">here</a>)
            <br />
            <button class="btn btn-sm btn-secondary" name="oneGameEach">1 Game Per Team</button>
            <button class="btn btn-sm btn-secondary" name="playoffsRound1">Playoffs Round 1</button>
            <button class="btn btn-sm btn-secondary" name="playoffsRound2">Playoffs Round 2</button>
            <button class="btn btn-sm btn-secondary" name="playoffsRound3">Playoffs Round 3</button>
            <button class="btn btn-sm btn-danger" name="clearGames">Clear</button>
        </label>
        <input type="text" class="form-control" id="games-input" name="games" rows="1" placeholder="Input number of games per NBA team or select a button above" required>
    </div>

    <div class="form-group col-xs-12">
        <div class="col-xs-12 text-center">
            <label>Stat Weight Modifiers</label>
        </div>

        <div class="form-group col-xs-2 col-md-1 col-md-offset-2 text-center">
            <label for="weight3PM">3PM</label>
            <br />
            <select class="custom-select" name="weight3PM">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightREB">REB</label>
            <br />
            <select class="custom-select" name="weightREB">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightAST">AST</label>
            <select class="custom-select" name="weightAST">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightSTL">STL</label>
            <select class="custom-select" name="weightSTL">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightBLK">BLK</label>
            <select class="custom-select" name="weightBLK">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightTO">TO</label>
            <select class="custom-select" name="weightTO">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>

        <div class="form-group col-xs-2 col-md-1 text-center">
            <label for="weightPTS">PTS</label>
            <select class="custom-select" name="weightPTS">
                <option value="0">Ignore</option>
                <option value="1" selected>100%</option>
                <option value="2">200%</option>
            </select>
        </div>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Calculate Stats</button>
    </div>
    {{--Token--}}
    {{ csrf_field() }}
</form>