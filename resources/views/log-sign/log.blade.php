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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
    <div class="center">
      <div class="formss">
        <div class="modal-dialog">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0 position-relative">
              <div class="row py-4 justify-content-center">
                <div class="col-12">
                  <div class="card ezy__signup12-form-card">
                    <div class="card-body p-md-5">
                      <h1 class="ezy__signup12-heading text-center">Log In</h1>

                      <button class="btn btn-danger ezy__signup12-btn w-100 d-flex align-items-center mt-4 mb-3">
                        <span class="fab fa-google text-white fs-4"></span>
                        <span class="w-100 text-center text-white">Continue with Google</span>
                      </button>
                      <button class="btn btn-primary ezy__signup12-btn w-100 d-flex align-items-center">
                        <span class="fab fa-facebook text-white fs-4"></span>
                        <span class="w-100 text-center text-white">Continue with Facebook</span>
                      </button>

                      <div class="position-relative ezy__signup12-or-separator">
                        <hr class="my-4 mt-md-5" />
                        <span class="px-2">Or</span>
                      </div>

                        <form method="POST" action="{{ route('check') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email" class="mb-2">Email</label>
                                <input name="email" type="email" class="form-control" id="email" required />
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="mb-2">Password</label>
                                <input name="password" type="password" class="form-control" id="password" required/>
                            </div>

                            <button class="sub" type="submit">Submit</button>

                            <div class="text-center mt-4">
                                <h6 class="mb-3">
                                    i'dont have an account !
                                    <a href="/signup">sign up.</a>
                                </h6>
                                <p class="mb-0">
                                    By signing up or creating an account, you agree to our <br />
                                    <a href="">Privacy Policy and Terms & Service.</a>
                                </p>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      <style>

@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

body  {
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
        /********************************************************************/
        .formss{
            width: 60%;
            height: 70%;

            display: flex;
        }

      .ezy__signup12 {
        /* Bootstrap variables */
        --bs-body-color: #000;
        --bs-body-bg: rgb(255, 255, 255);

        /* Easy Frontend variables */
        --ezy-theme-color: rgb(13, 110, 253);
        --ezy-theme-color-rgb: 13, 110, 253;
        --ezy-form-card-shadow: 0 16px 24px rgba(197, 206, 222, 0.25);

        overflow: hidden;
      }

      /* Gray Block Style */
      .gray .ezy__signup12,
      .ezy__signup12.gray {
        /* Bootstrap variables */
        --bs-body-bg: rgb(246, 246, 246);

        /* Easy Frontend variables */
        --ezy-form-card-shadow: 0 16px 24px rgba(209, 223, 247, 0.25);
      }

      .sub{
    background: #ecd8ee;
  height: 40px;
  width: 85px;
  border: 3px solid black;
  border-radius: 0.4em;
  box-shadow: 0.1em 0.1em;
}

.sub:hover {
  transform: translate(-0.05em, -0.05em);
  box-shadow: 0.15em 0.15em;
  color: white;
  background-color: #421646;
}

.sub:active {
  transform: translate(0.05em, 0.05em);
  box-shadow: 0.05em 0.05em;
}

      /* Dark Gray Block Style */
      .dark-gray .ezy__signup12,
      .ezy__signup12.dark-gray {
        /* Bootstrap variables */
        --bs-body-color: #ffffff;
        --bs-body-bg: rgb(30, 39, 53);

        /* Easy Frontend variables */
        --ezy-form-card-shadow: none;
      }

      /* Dark Block Style */
      .dark .ezy__signup12,
      .ezy__signup12.dark {
        /* Bootstrap variables */
        --bs-body-color: #ffffff;
        --bs-body-bg: rgb(11, 23, 39);
        --bs-dark-rgb: 255, 255, 255;

        /* Easy Frontend variables */
        --ezy-form-card-shadow: none;
      }

      .ezy__signup12-heading {
        font-weight: bold;
        font-size: 25px;
        line-height: 25px;
        color: var(--bs-body-color);
      }

      /* modal */
      section.ezy__signup12,
      .ezy__signup12 .modal-content {
        background-color: var(--bs-body-bg);
      }

      body{
        font-family: 'Playpen Sans', cursive;
        text-align: -webkit-center;
      }

      .ezy__signup12 .btn-close {
        z-index: 11;
        color: var(--bs-body-color);
        background-image: none;
      }

      .ezy__signup12-form-card {
        border: none;
        box-shadow: none;
        border-radius: 25px;
        background-color:rgba(255, 255, 255, 0.3);
      }

      .ezy__signup12-form-card * {
        color: var(--bs-body-color);
      }

      .ezy__signup12 .form-control {
        min-height: 48px;
        line-height: 40px;
        border-color: transparent;
        background: rgba(163, 190, 241, 0.14);
        color: var(--bs-body-color);
      }

      .ezy__signup12 .form-control:focus {
        border-color: var(--ezy-theme-color);
        box-shadow: none;
      }

      .ezy__signup12 .form-check-input:checked {
        background-color: var(--ezy-theme-color);
        border-color: var(--ezy-theme-color);
      }

      .ezy__signup12-btn-submit {
        padding: 12px 30px;
        background-color: var(--ezy-theme-color);
        color: #ffffff;
      }

      .ezy__signup12-btn-submit:hover {
        color: #ffffff;
        background-color: rgba(var(--ezy-theme-color-rgb), 0.9);
      }

      .ezy__signup12-btn {
        padding: 12px 30px;
      }

      .ezy__signup12-btn,
      .ezy__signup12-btn * {
        color: #ffffff;
      }

      .ezy__signup12-btn:hover {
        color: #ffffff;
      }

      .ezy__signup12 h6 {
        font-size: 18px;
      }

      .ezy__signup12-or-separator {
        position: relative;
      }

      .ezy__signup12-or-separator hr {
        border-color: var(--bs-body-color);
        opacity: 0.15;
      }

      .ezy__signup12-or-separator span {
        background-color: rgba(255, 255, 255, 0.6);
        color: var(--bs-body-color);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        border-radius: 25px;
      }

      .ezy__signup12 a:hover {
        color: var(--ezy-theme-color);
      }
      </style>
</body>
</html>
