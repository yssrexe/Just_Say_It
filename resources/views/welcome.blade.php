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
    <div class="center">
        <div class="video-mt">
            <div class="titles">
                <p class="title">Organize your work <br> and life, finally.</p>
                <p class="mini-title">Become focused, organized, and calm with Todoist. The world’s #1 <br> task manager and to-do list app.</p>
                <a id="bott" class="btn btn-danger" href="/signup">Start for free</a>
            </div>
        </div>
    </div>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

body  {
    font-family: 'Playpen Sans', cursive;
    background-image: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
  background-size:cover;
        -webkit-animation: slidein 100s;
        animation: slidein 100s;

        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;

        -webkit-animation-direction: alternate;
        animation-direction: alternate;
}

@-webkit-keyframes slidein {
from {background-position: top; background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}
}

@keyframes slidein {
from {background-position: top;background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}

}



.center
{
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(75, 75, 250, 0.3);
  border-radius: 3px;
}
        /**********************************************************************/
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
            text-shadow: -2px 2px 0 #000,
                          2px 2px 0 #000,
                         2px -2px 0 #000,
                        -2px -2px 0 #000;
            font-size: 50px;
            color: rgb(255, 255, 255);
            font-weight: 600;
            transition: 0.5s;
            font-family: 'Playpen Sans', cursive;
        }
        .mini-title{
            text-shadow: -0.2px 0.2px 0 #000,
                          0.2px 0.2px 0 #000,
                         0.2px -0.2px 0 #000,
                        -0.2px -0.2px 0 #000;
            font-size:18px;
            color: rgb(255, 255, 255);
            font-family: 'Josefin Sans', sans-serif;
            font-family: 'Playpen Sans', cursive;
        }

        .bott{
            font-size: 20px;
            font-family: 'Playpen Sans', cursive;
        }

        @media (max-width: 878px) and (max-height: 963px) {
            .vd-ms {
                display: none;
            }
            .video-mt {
            background-color: pink;
            }
        }
    </style>
</body>
</html>


