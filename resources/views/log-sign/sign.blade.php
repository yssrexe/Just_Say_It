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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>
    <div class="center">
      <div class="formss">
        <div class="modal-dialog">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0 position-relative">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card ezy__signup12-form-card">
                    <div class="card-body p-md-5">
                      <h2 class="ezy__signup12-heading text-center">Sign Up</h2>

                      <form method="POST" action="{{ route('submit') }}">
                        @csrf
                        <div class="icons">
                            <a href="{{ url('login/github') }}">
                                <i class="fa fa-github" style="font-size:50px;color:rgb(31, 31, 31)"></i>
                            </a>
                            <a href="{{ url('login/google') }}">
                                <i class="fa fa-google" style="font-size:50px;color:rgb(31, 31, 31)"></i>
                            </a>
                        </div>
                        @if(Session::has("socialite_data"))
                            <b>Register Success.</b> <br>
                            Your password is: {{ Session::get("socialite_data")["generated_password"] }}
                            <br> For Login, now you use this password.
                        @endif
                        <div class="position-relative ezy__signup12-or-separator">
                            <hr class="my-4 mt-md-5" />
                            <span class="px-2"></span>
                          </div>
                        <div class="form-group mb-4">
                            <label for="username" class="mb-2">Full Name</label>
                            <input name="username" type="text" class="form-control" id="username" required/>
                        </div>

                        <div class="form-group mb-4">
                          <label for="email" class="mb-2">Email</label>
                          <input name="email" type="email" class="form-control" id="email" required/>
                        </div>

                        <div class="form-group mb-4">
                          <label for="password" class="mb-2">Password</label>
                          <input name="password" type="password" class="form-control" id="password" required/>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="mb-2">Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password" required/>
                          </div>

                        <button class="sub" type="submit">Submit</button>

                        <div class="text-center mt-4">
                          <h6 class="mb-3">
                            Already have an account?
                            <a href="/login">Log in.</a>
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
        body  {
    background-image: linear-gradient(100deg, #575656, #062e3f);
    overflow: hidden;
}

.icons{
            margin: 35px;
            display: flex;
            justify-content: space-around;

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
  bottom: -10%;
  left: 0;
  background: linear-gradient(100deg, #575656, #062e3f);
  border-radius: 3px;
  overflow: hidden;
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
        /*****************************************************************/
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
        font-family: 'Playpen Sans', cursive;
        color: var(--bs-body-color);
      }

      /* modal */
      section.ezy__signup12,
      .ezy__signup12 .modal-content {
        font-family: 'Playpen Sans', cursive;
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
