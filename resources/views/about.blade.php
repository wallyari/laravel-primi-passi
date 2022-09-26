<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: white;
                font-family: 'Noto Sans Mono', monospace;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            ul li {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
                display: inline;
            }
            a{
                text-decoration: none;
                color: red;
            }
            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h4>About Me</h4>
                </div>
                <ul class="links">
                @foreach ($navBarLinks as $navBarLink)
                <li ><a href="{{route($navBarLink)}}">{{$navBarLink}}</a></li>
                @endforeach
            </ul>
            </div>
        </div>
    </body>
</html>