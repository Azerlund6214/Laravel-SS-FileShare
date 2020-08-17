<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Not Found</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body
            {
                width: 100%;
                height: 100%;
                overflow: hidden;
                margin: 0;
                padding: 0;

                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                font-size: 32px;
            }

            body
            {
                background: url('public/s-script/assets-eternal-storage/ServerErrors/404_3=800x528.png') center no-repeat #262626 ;
            }

            .content {
                width:100%;
                text-align:center;
                position:absolute;
                bottom:10%;
            }

            .content a {
                color:rgba(255,255,255,0.9);
                display: inline-block;
                text-decoration: none;
                transition: 1s;
            }

            .content a:hover
            {
                opacity:0.3;
                font-size: 40px;
                transition: 1s;
            }

        </style>

    </head>
    <body>

        <div class="content">
            <a href="/">Go to home</a>
        </div>

    </body>
</html>
