@extends('layouts.master')

@section('content')
    <!-- Styles -->
    <style>
        @media (min-width: 768px) {
            html, body {
                overflow:hidden;
                height: 100%;
                margin: 0;
            }

            #linux-commands {
                overflow-y: scroll;
                position: absolute;
                top:80px;
                bottom: 0;
                left:0;
            }

            #main-study {
                overflow-y:scroll;
                position:absolute;
                top:80px;
                bottom:0;
                right:0;
            }
        }

        #linux-commands {
            height:100%;
            background:tan;
            color: black;
            padding-bottom: 80px;
        }

        #linux-commands dt {
            margin-top: 10px;
        }

        #main-study {
            height:100%;
            padding-bottom:80px;
        }

        #main-study h3 {
            padding:10px;
            margin: 0;
            background-color: tan;
            color: black;
        }
    </style>

    <h1>Final Study Notes (Ch 15 - 27)</h1>

    <div class="col-sm-3" id="linux-commands">
        @include('linux.commands')
    </div>

    <div class="col-sm-9" id="main-study">
        @include('linux.ch15')

    </div>
@endsection