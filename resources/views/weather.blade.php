<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

        html,
        body {
            background-color: #F3F3F3;
            font-family: 'Roboto', sans-serif;
        }

        .card {
            margin: 0 auto;
            margin-top: 5%;
            padding: 5px 30px;
            width: 290px;
            height: 470px;
            border-radius: 3px;
            background-color: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, .2);
            -webkit-animation: open 2s cubic-bezier(.39, 0, .38, 1);
        }

        @-webkit-keyframes open {
            from {
                padding: 0 30px;
                height: 0;
            }
            to {
                height: 470px;
            }
        }

        h1,
        h2,
        h3,
        h4 {
            position: relative;
        }

        h1 {
            float: right;
            color: #666;
            font-weight: 300;
            font-size: 6.59375em;
            line-height: .2em;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .2s;
        }

        h2 {
            font-weight: 300;
            font-size: 2.25em;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        h3 {
            float: left;
            margin-right: 33px;
            color: #777;
            font-weight: 400;
            font-size: 1em;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .1s;
        }

        span {
            margin-left: 24px;
            color: #999;
            font-weight: 300;
        }

        span span {
            margin-left: 0;
        }

        .dot {
            font-size: .9em;
        }

        .sky {
            position: relative;
            margin-top: 108px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #03A9F4;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .2s;
        }

        .sun {
            position: relative;
            top: -3px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background-color: #FFEB3B;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .5s;
        }

        .cloud {
            position: absolute;
            top: 60px;
            left: 30px;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .7s;
        }

        .cloud:before,
        .cloud:after {
            position: absolute;
            display: block;
            content: "";
        }

        .cloud:before {
            margin-left: -10px;
            width: 51px;
            height: 18px;
            background: #fff;
        }

        .cloud:after {
            position: absolute;
            top: -10px;
            left: -22px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 50px -6px 0 6px #fff, 25px -19px 0 10px #fff;
        }

        table {
            position: relative;
            top: 10px;
            width: 100%;
            text-align: center;
        }

        tr:nth-child(1) td {
            padding-bottom: 32px;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .7s;
        }

        tr:nth-child(2) td {
            padding-bottom: 7px;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .9s;
        }

        tr:nth-child(3) td {
            padding-bottom: 7px;
            -webkit-animation: up 2s cubic-bezier(.39, 0, .38, 1) .9s;
        }

        tr:nth-child(2),
        tr:nth-child(3) {
            font-size: .9em;
        }

        tr:nth-child(3) {
            color: #999;
        }

        @-webkit-keyframes up {
            0% {
                opacity: 0;
                -webkit-transform: translateY(15px);
            }
            50% {
                opacity: 0;
                -webkit-transform: translateY(15px);
            }
            99% {
                -webkit-animation-play-state: paused;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="card">

    <h2>{{ $location['name'] }} <img src="https://www.countryflags.io/{{ $location['country'] }}/flat/64.png"
                                       alt="{{ $location['country'] }}"></h2>
    <h3>{{ $weather['current']['weather'][0]['main'] }}<span>Wind {{ $weather['current']['wind_speed'] }}km/h</span>
    </h3>
    <h1>{{ round($weather['current']['temp']) }}°</h1>
    <div class="sky">
        <img src="https://openweathermap.org/img/wn/{{ $weather['current']['weather'][0]['icon'] }}@2x.png"
             alt="{{ $weather['current']['weather'][0]['description'] }}">
    </div>
    <table>
        <tr>
            @foreach(range(0, count($weather['daily']) - 1) as $i)
                <td>{{ now()->addDays($i)->format('D') }}</td>
            @endforeach
        </tr>
        <tr>
            @foreach($weather['daily'] as $day)
                <td>{{ round($day['temp']['max']) }}°</td>
            @endforeach
        </tr>
        <tr>
            @foreach($weather['daily'] as $day)
                <td>{{ round($day['temp']['min']) }}°</td>
            @endforeach
        </tr>
    </table>
</div>
</body>
</html>
