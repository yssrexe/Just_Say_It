<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#062e3f">
    <meta name="Description" content="A dynamic and aesthetic To-Do List WebApp.">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/corner.css">
    <title>JUST SAY IT</title>

</head>

<body>

    <div id = "header">
        <h1 id="title">Just say it.<div id="border"></div></h1>
    </div>
    <div id="form">
        <form id="postForm" method="POST" action="{{ route('post') }}">
            @csrf
            <input id="commentsInput" name="comments" class="todo-input" type="text" placeholder="Share your feelings without hesitation.">
            <button id="submitButton" class="todo-btn" type="submit">I Got This!</button>
        </form>
    </div>

    <div id="myUnOrdList">
        @isset($postes)
            @foreach ($postes as $post)
                <div class="card">
                    <div class="comments">
                        <div class="comment-react">
                        </div>
                        <div class="comment-container">
                            <div class="user">
                            <div class="user-pic">
                                <svg fill="none" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277" d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z"></path>
                            <path stroke-width="2" fill="#707277" stroke="#707277" d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z"></path>
                                </svg>
                            </div>
                            <div class="user-info">
                                <span>anonyme</span>
                                <p><span> {{ $post->created_at }}</span></p>
                            </div>
                            </div>
                            <p class="comment-content">
                                <div class="todo-list">
                                    {{ $post->comments}}
                                </div>

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>

    <script>

    </script>
    <style>
        .card {
          width: 450px;
          height: fit-content;
          margin-bottom: 50px;
          background-color: rgba(red, green, blue, alpha);
          box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
          border-radius: 17px 17px 27px 27px;
        }

        .comments {
          display: grid;
          grid-template-columns: 35px 1fr;
          gap: 20px;
          padding: 20px;
        }

        .user-info span{
            margin-top:10px;
            font-size: 20px;
        }

        .comment-container .user {
          display: flex;
          grid-template-columns: 40px 1fr;
          gap: 10px;
        }

        .comment-container .user .user-pic {
          width: 40px;
          height: 40px;
          position: relative;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #f1f1f1;
          border-radius: 50%;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            align-items: center;
            display: flex;
            flex-direction: column;
            font-family: 'Work Sans', sans-serif;
            min-height: 100vh;
            background-image: linear-gradient(100deg, #575656, #062e3f);
            color: #ffffff;
            padding-top: 3%;
        }

        #header, #form, #datetime {
            min-height: 10vh;
            width: 100%;
        }

        #header {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            font-size: 3rem;
            min-height: 25vh;
            width: 100%;
        }

        .flexrow-container {
            align-items: center;
            align-self: flex-end;
            display: flex;
            justify-content: space-around;
            margin-right: 3%;
        }

        .theme-selector {
            border: 1px solid #d1dae3;
            border-radius: 100%;
            height: 35px;
            margin: 0 8px;
            transition: tranform 150ms ease-in-out, box-shadow 200ms ease-in-out;
            width: 35px;
        }

        .theme-selector:hover {
            box-shadow: white 0 0 8px;
            cursor: pointer;
        }

        .theme-selector:active {
            transform: scale(0.95);
        }

        #title {
            border-right: solid 3px rgba(0, 0, 0, 0.75);
            white-space: pre;
            overflow: hidden;
            letter-spacing: 0.14rem;
            margin-top: 50px;
            margin-bottom: 20px;
            max-width: 480px;
        }

        #title {
            animation: animated-text 2s steps(11,end) 0.5s 1 normal both,
                animated-cursor 750ms steps(11,end) infinite;
        }

        #title.darker-title {
            animation: animated-text 2s steps(11,end) 0.5s 1 normal both, darker-animated-cursor 750ms steps(11,end) infinite;
        }


        @keyframes animated-text{
            from{width: 0%;}
            to{width: 480px;}
        }

        @keyframes animated-cursor{
            from{border-right-color: rgba(0, 0, 0, 0.75);}
            to{border-right-color: transparent;}
        }

        @keyframes darker-animated-cursor {
            from{border-right-color: #01394c;}
            to{border-right-color: transparent;}
        }

        form {
            display: flex;
            font-size: 1.7rem;
            justify-content: center;
            margin: 15px 0;
            padding: 0.8rem;
            width: 100%;
        }

        form input {
            padding: 10px;
            font-size: 17px;
            border: none;
            outline: none;
            border-top-left-radius: 17px;
            border-bottom-left-radius: 17px;
            max-width: 500px;
            transition: background-color 200ms ease-in-out;
            width: 100%;
        }

        form input.standard-input {
            background-color: #181a1a;
            color: rgb(247, 226, 223);
        }


        form input.light-input {
            background-color: #AEB1B4;
            color: #1a150e;
        }

        form input.light-input::placeholder {
            color: #1a150e;
            opacity: 0.7;
        }

        form input.darker-input {
            background-color: #01394c;
            color: white;
        }

        form input.darker-input::placeholder {
            color: white;
            opacity: 0.7;
        }

        form input:hover {
            cursor: text;
        }

        form input.standard-input:hover {
            background-color: rgb(0, 0, 0);
        }

        form input.light-input:hover {
            background-color: #919699;
        }

        form input.darker-input:hover {
            background-color: #013141;
        }

        button {
            border: none;
            outline: none;
            transition: box-shadow 200ms ease, background-color 200ms ease-in-out;
        }

        button:hover {
            cursor: pointer;
        }

        button.standard-button {
            background-color: rgb(247, 226, 223);
            color: rgb(0, 0, 0);
        }

        button.standard-button:hover {
            background-color: white;
            box-shadow: #fff8 0 0 10px;
        }

        button.light-button {
            background-color: white;
            color: #1a150e;
        }

        button.light-button:hover {
            background-color: #f0f0f0;
        }

        button.darker-button {
            background-color: #002837;
            color: white;
        }

        button.darker-button:hover {
            background-color: #001f29;
        }

        form button {
            padding: 10px;
            font-size: 17px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            min-width: 100px;
        }

        .todo-list {
            min-width: 25%;
            list-style: none;
        }

        .todo {
            margin: 1rem;
            font-size: 19px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.25em 0.5em;
            border-radius: 30px;
            transition: background-color 200ms ease-in-out;
        }



        @media only screen and (max-width: 1000px) {
            .flexrow-container {
                align-self: unset;
                margin-right: 0;
            }
        }

        @media only screen and (max-width: 800px) {
            #header {
                font-size: 2rem;
            }

            #title {
                animation:
                    animated-text 3s steps(16,end) 0.5s 1 normal both,
                    animated-cursor 750ms steps(16,end) infinite;
                margin-bottom: 10px;
                margin-top: 30px;
                max-width: 330px;
            }
        }

        @media only screen and (max-width: 400px) {
            #header {
                font-size: 1.5rem;
            }

            #title {
                animation:
                    animated-text 3.5s steps(16,end) 0.5s 1 normal both,
                    animated-cursor 750ms steps(16,end) infinite;
                max-width: 283px;
            }
        }

        @media only screen and (max-width: 400px) {
            form {
                align-items: center;
                flex-direction: column;
            }

            form input {
                border-radius: 17px;
            }

            form button {
                border-radius: 15px;
                margin-top: 15px;
                width: 50%;
            }
            form > button.light-button {
                box-shadow: 0 0 5px lightgray;
            }
        }

    </style>
</body>
</html>
