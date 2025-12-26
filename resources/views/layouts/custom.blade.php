<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'FixQuest')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Example font + styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background: #eef2f8;
            font-family: "Press Start 2P", monospace;
        }

        .pixel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .content-box {
            background: #fff;
            border: 4px solid #345075;
            box-shadow: 6px 6px 0px #999;
            padding: 30px;
            border-radius: 8px;
        }

        /* Floating paper (left) */
        .floating-paper-left {
            width: 60px;
            height: 80px;
            background: #fff;
            border: 2px solid #345075;
            box-shadow: 3px 3px 0px #999;
            position: absolute;
            top: 50px;
            left: -40px;
            transform: rotate(-10deg);
            animation: sway 4s ease-in-out infinite alternate;
        }

        /* Floating paper (right) */
        .floating-paper-right {
            width: 60px;
            height: 80px;
            background: #fff;
            border: 2px solid #345075;
            box-shadow: 3px 3px 0px #999;
            position: absolute;
            bottom: 50px;
            right: -40px;
            transform: rotate(10deg);
            animation: sway 4s ease-in-out infinite alternate-reverse;
        }

        @keyframes sway {
            from { transform: rotate(-8deg) translateY(0px); }
            to { transform: rotate(8deg) translateY(10px); }
        }
    </style>
</head>
<body>
    <div class="pixel-container">
        <div class="floating-paper-left"></div>
        <div class="content-box">
            @yield('content')
        </div>
        <div class="floating-paper-right"></div>
    </div>
</body>
</html>
