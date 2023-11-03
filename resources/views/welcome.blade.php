<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#062e3f">
    <meta name="Description" content="A dynamic and aesthetic To-Do List WebApp.">
    @include('includs.style')
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <title>JUST DO IT</title>

</head>

<body>
    <div id = "header">
        <div class="flexrow-container">
            <div class="standard-theme theme-selector"></div>
            <div class="light-theme theme-selector"></div>
            <div class="darker-theme theme-selector"></div>
        </div>
        <div class="video-mt">
            <div class="titles">
                <p class="title">No need to keep it inside, <br> just express it</p>
                <p class="mini-title">Speak your mind freely, don't withhold your thoughts or feelings; express yourself openly and honestly, and let your words flow.</p>
                <a id="bott" class="btn btn-danger" href="/login">Let's Go</a>
            </div>
        </div>
    </div>

  <div id="form">
            <button class="todo-btn" type="submit"></button>
    </div>

  <div id="myUnOrdList">
        <ul class="todo-list">
        </ul>
    </div>

    <script>
            // Selectors

        const toDoInput = document.querySelector('.todo-input');
        const toDoBtn = document.querySelector('.todo-btn');
        const toDoList = document.querySelector('.todo-list');
        const standardTheme = document.querySelector('.standard-theme');
        const lightTheme = document.querySelector('.light-theme');
        const darkerTheme = document.querySelector('.darker-theme');


        // Event Listeners

        toDoBtn.addEventListener('click', addToDo);
        toDoList.addEventListener('click', deletecheck);
        document.addEventListener("DOMContentLoaded", getTodos);
        standardTheme.addEventListener('click', () => changeTheme('standard'));
        lightTheme.addEventListener('click', () => changeTheme('light'));
        darkerTheme.addEventListener('click', () => changeTheme('darker'));

        // Check if one theme has been set previously and apply it (or std theme if not found):
        let savedTheme = localStorage.getItem('savedTheme');
        savedTheme === null ?
            changeTheme('standard')
            : changeTheme(localStorage.getItem('savedTheme'));

        // Functions;
        function addToDo(event) {
        }


        function deletecheck(event){

            // console.log(event.target);
            const item = event.target;

            // delete
            if(item.classList[0] === 'delete-btn')
            {
                // item.parentElement.remove();
                // animation
                item.parentElement.classList.add("fall");

                //removing local todos;
                removeLocalTodos(item.parentElement);

                item.parentElement.addEventListener('transitionend', function(){
                    item.parentElement.remove();
                })
            }

            // check
            if(item.classList[0] === 'check-btn')
            {
                item.parentElement.classList.toggle("completed");
            }


        }


        // Saving to local storage:
        function savelocal(todo){
            //Check: if item/s are there;
            let todos;
            if(localStorage.getItem('todos') === null) {
                todos = [];
            }
            else {
                todos = JSON.parse(localStorage.getItem('todos'));
            }

            todos.push(todo);
            localStorage.setItem('todos', JSON.stringify(todos));
        }



        function getTodos() {
            //Check: if item/s are there;
            let todos;
            if(localStorage.getItem('todos') === null) {
                todos = [];
            }
            else {
                todos = JSON.parse(localStorage.getItem('todos'));
            }

            todos.forEach(function(todo) {
                // toDo DIV;
                const toDoDiv = document.createElement("div");
                toDoDiv.classList.add("todo", `${savedTheme}-todo`);

                // Create LI
                const newToDo = document.createElement('li');

                newToDo.innerText = todo;
                newToDo.classList.add('todo-item');
                toDoDiv.appendChild(newToDo);

                // check btn;
                const checked = document.createElement('button');
                checked.innerHTML = '<i class="fas fa-check"></i>';
                checked.classList.add("check-btn", `${savedTheme}-button`);
                toDoDiv.appendChild(checked);
                // delete btn;
                const deleted = document.createElement('button');
                deleted.innerHTML = '<i class="fas fa-trash"></i>';
                deleted.classList.add("delete-btn", `${savedTheme}-button`);
                toDoDiv.appendChild(deleted);

                // Append to list;
                toDoList.appendChild(toDoDiv);
            });
        }




        // Change theme function:
        function changeTheme(color) {
            localStorage.setItem('savedTheme', color);
            savedTheme = localStorage.getItem('savedTheme');

            document.body.className = color;
            // Change blinking cursor for darker theme:
            color === 'darker' ?
                document.getElementById('title').classList.add('darker-title')
                : document.getElementById('title').classList.remove('darker-title');

            document.querySelector('input').className = `${color}-input`;
            // Change todo color without changing their status (completed or not):
            document.querySelectorAll('.todo').forEach(todo => {
                Array.from(todo.classList).some(item => item === 'completed') ?
                    todo.className = `todo ${color}-todo completed`
                    : todo.className = `todo ${color}-todo`;
            });
            // Change buttons color according to their type (todo, check or delete):
            document.querySelectorAll('button').forEach(button => {
                Array.from(button.classList).some(item => {
                    if (item === 'check-btn') {
                    button.className = `check-btn ${color}-button`;
                    } else if (item === 'delete-btn') {
                        button.className = `delete-btn ${color}-button`;
                    } else if (item === 'todo-btn') {
                        button.className = `todo-btn ${color}-button`;
                    }
                });
            });
        }
    </script>
    <style>
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
            padding-top: 3%;
        }

        .standard {
            background-image: linear-gradient(100deg, #575656, #062e3f);
            color: #ffdfdb;
            transition: 0.3s linear;
            overflow: hidden;
        }

        .light {
            background-image: linear-gradient(100deg, #d4f1ff, #ffffff);
            color: #1a150e;
            transition: 0.3s linear;
            overflow: hidden;
        }

        .darker {
            background-image: linear-gradient(100deg, #001214, #001f29);
            color: white;
            transition: 0.3s linear;
            overflow: hidden;
        }

        #header, #form, #datetime {
            margin: 0 1rem;
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

        .standard-theme {
            background-image: linear-gradient(100deg, #575656, #062e3f);
        }

        .light-theme {
            background-image: linear-gradient(100deg, #d4f1ff, #ffffff);
        }

        .darker-theme {
            background-image: linear-gradient(100deg, #001214, #001f29);
        }

        #title {
            border-right: solid 3px rgba(0, 0, 0, 0.75);
            white-space: pre;
            overflow: hidden;
            letter-spacing: 0.20rem;
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

        #myUnOrdList {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
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

        .standard-todo {
            background-color: rgb(26, 27, 27);
        }

        .light-todo {
            background-color:#AEB1B4;
        }

        .darker-todo {
            background-color: #01394c;
        }

        .todo li{
            padding: 7px;
            font-size: 20px;
            flex: 1;
            border-radius: 30px;

        }

        .check-btn, .delete-btn {
            font-size: 19px;
            cursor: pointer;
            width: 2em;
            height: 2em;
            border-radius: 80%;
            margin: 0 5px;
        }

        .todo-item {
            padding: 0rem 0.5rem;
        }

        .fa-trash, .fa-check {
            pointer-events: none;
        }


        .completed {
            transition: 0.2s;
            text-decoration: line-through;
            opacity: 0.5;
        }

        .fall {
            transition: 0.5s;
            transform: translateY(45rem) rotateZ(45deg);
            opacity: 0;
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
                max-width: 255px;
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

        /********************************/
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


    </style>
</body>
</html>
