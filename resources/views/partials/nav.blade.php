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
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="https://github.com/chris-knoll" target="_blank">GitHub</a></li>
                <li><a href="http://linkedin.com/in/chrisknoll3" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </div>
</nav>