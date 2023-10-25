<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Playpen+Sans:wght@500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includs.style')
    <title>TodoIt</title>
</head>
<body>
<div class="video-mt">
    <div class="titles">
        <p class="title">Organize your work <br> and life, finally.</p>
        <p class="mini-title">Become focused, organized, and calm with Todoist. The world’s #1 <br> task manager and to-do list app.</p>
        <a id="bott" class="btn btn-danger" href="">Start for free</a>
    </div>

        <video class="vd-ms" width="100%" height="100%" plays-inline autoplay muted loop>
            <source src="https://res.cloudinary.com/imagist/video/fetch/f_auto/q_auto/https://todoist.com/static/home-teams/intro/background-video.mp4?_a=BATCtdJs0">
        </video>
    </div>



    <style>
        .video-mt{
            width: 100%;
            height: 100vh;
            position: relative;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vd-ms{
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .titles{
            text-align: center;
        }

        .title{

            font-size: 46px;
            color: black;
            font-weight: 600;
            transition: 0.5s;
            font-family: 'Playpen Sans', cursive;
        }
        .mini-title{
            font-size:20px;
            font-family: 'Josefin Sans', sans-serif;
            font-family: 'Playpen Sans', cursive;
        }

        .bott{
            font-size: 20px;
        }

        @media (max-width: 878px) and (max-height: 963px) {
            .vd-ms {
                display: none; /* Hide the video on screens with width <= 878px and height <= 963px */
            }
            .video-mt {
            background-color: pink; /* Add a background color (e.g., pink) for screens with width <= 878px and height <= 963px */
        }
        }
    </style>
</body>
</html>


