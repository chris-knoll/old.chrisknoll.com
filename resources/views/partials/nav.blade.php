<nav class="navbar navbar-default">
    <div class="container-fluid">
        {{--Mobile Nav--}}
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                Chris Knoll
            </a>
        </div>

        {{--Desktop Nav--}}
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://github.com/chris-knoll" target="_blank">GitHub</a></li>
                <li><a href="http://linkedin.com/in/chrisknoll3" target="_blank">LinkedIn</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Study Notes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('linux') }}">Linux</a></li>
                        <li><a href="{{ route('git') }}">Git</a></li>
                        <li><a href="{{ route('fitness') }}">Fitness</a></li>
                    </ul>
                </li>               
            </ul>
        </div>
    </div>
</nav>