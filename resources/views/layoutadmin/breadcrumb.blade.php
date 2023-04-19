<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/breadcrunb.css')}}"/> --}}
    <title>Breadcrumb</title>
    <style>
        body{
            display: flex;
            /* align-items: center; */
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            background-color: #1A417F;
        }
        .container{
            width: 500px;
            background-color:  #ffff;
            text-align: center;
            border-radius: 5px;
            padding: 50px 35px 10px 35px;
        }
        .container .progress-bar{
            display: flex;
            margin: 40% 0;
            user-select: none;
        }
        .container .progress-bar .step{
            position: relative;
            text-align: center;
            width: 100%
        }
        .container .progress-bar .step p{
            font-weight: 500;
            font-size: 18px;
            margin-bottom: 8px;
            color: #000;
        }
        .progress-bar .step .bullet{
            width: 25px;
            height: 25px;
            border: 2px solid #000;
            display: inline-block;
            border-radius: 50%;
            position: relative;
            transition: 0.2s;
            font-weight: 500;
            font-size:17px;
            line-height: 25px;
        }
        .progress-bar .step .bullet.active{
            border-color: #1abc9c;
            background: #1abc9c;
        }
        .progress-bar .step .bullet span{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .progress-bar .step .bullet.active span{
            display: none;
        }
        .progress-bar .step .bullet::before,
        .progress-bar .step .bullet::after{
            position: absolute;
            content: '';
            bottom: 11px;
            right: -80px;
            height: 3px;
            width: 120px;
            background: #262626;

        }
        .progress-bar .step .bullet.active::after{
            background:  #1abc9c;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 0.3s linear-forwards;
        }
        @keyframes animate{
            100%{
                transform: scaleX(1);
            }
        }
        .progress-bar .step:last-child .bullet::before,
        .progress-bar .step:last-child .bullet::after{
            display: none;
        }
        .progress-bar .step p.active{
            color: #1abc9c;
            transition: 0.2s linear;
        }
        .progress-bar .step .check{
            position: absolute;
            left : 50%;
            top: 70%;
            font-size: 15px;
            transform: translate(-50%, -5%);
            display: none;
        }
        .progress-bar .step .check.active{
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="progress-bar">
            <div class="step">
                <p>Form Input</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Surat Tugas</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Surat Pengesahan</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

    </div>
</body>
</html>
