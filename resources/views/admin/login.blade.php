<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #f2f4f7;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .flex-div {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .name-content {
            margin-right: 7rem;
        }

        .name-content .logo {
            font-size: 3.5rem;
            color: #1877f2;
        }

        .name-content p {
            font-size: 1.3rem;
            font-weight: 500;
            margin-bottom: 5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            background: #fff;
            padding: 2rem;
            width: 530px;
            height: 380px;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        }

        form input {
            outline: none;
            padding: 0.8rem 1rem;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }

        form input:focus {
            border: 1.8px solid #1877f2;
        }

        form .login {
            outline: none;
            border: none;
            background: #1877f2;
            padding: 0.8rem 1rem;
            border-radius: 0.4rem;
            font-size: 1.1rem;
            color: #fff;
        }

        form .login:hover {
            background: #0f71f1;
            cursor: pointer;
        }

        form a {
            text-decoration: none;
            text-align: center;
            font-size: 1rem;
            padding-top: 0.8rem;
            color: #1877f2;
        }

        form hr {
            background: #f7f7f7;
            margin: 1rem;
        }

        form .create-account {
            outline: none;
            border: none;
            background: #06b909;
            padding: 0.8rem 1rem;
            border-radius: 0.4rem;
            font-size: 1.1rem;
            color: #fff;
            width: 75%;
            margin: 0 auto;
        }

        form .create-account:hover {
            background: #03ad06;
            cursor: pointer;
        }

        /* //.........Media Query.........// */

        @media (max-width: 500px) {
            html {
                font-size: 60%;
            }

            .name-content {
                margin: 0;
                text-align: center;
            }

            form {
                width: 300px;
                height: fit-content;
            }

            form input {
                margin-bottom: 1rem;
                font-size: 1.5rem;
            }

            form .login {
                font-size: 1.5rem;
            }

            form a {
                font-size: 1.5rem;
            }

            form .create-account {
                font-size: 1.5rem;
            }

            .flex-div {
                display: flex;
                flex-direction: column;
            }
        }

        @media (min-width: 501px) and (max-width: 768px) {
            html {
                font-size: 60%;
            }

            .name-content {
                margin: 0;
                text-align: center;
            }

            form {
                width: 300px;
                height: fit-content;
            }

            form input {
                margin-bottom: 1rem;
                font-size: 1.5rem;
            }

            form .login {
                font-size: 1.5rem;
            }

            form a {
                font-size: 1.5rem;
            }

            form .create-account {
                font-size: 1.5rem;
            }

            .flex-div {
                display: flex;
                flex-direction: column;
            }
        }

        @media (min-width: 769px) and (max-width: 1200px) {
            html {
                font-size: 60%;
            }

            .name-content {
                margin: 0;
                text-align: center;
            }

            form {
                width: 300px;
                height: fit-content;
            }

            form input {
                margin-bottom: 1rem;
                font-size: 1.5rem;
            }

            form .login {
                font-size: 1.5rem;
            }

            form a {
                font-size: 1.5rem;
            }

            form .create-account {
                font-size: 1.5rem;
            }

            .flex-div {
                display: flex;
                flex-direction: column;
            }

            @media (orientation: landscape) and (max-height: 500px) {
                .header {
                    height: 90vmax;
                }
            }
        }
    </style>
</head>

<body>

    <div class="content">
        @if (session('msg'))
        <div class="alert alert-danger" role="alert" style="margin-left: 10%;margin-right:20%;">
            <h4>{{session('msg')}}</h4>
        </div>
        @endif

        <div class="flex-div">

            <div class="name-content">
                <h1 class="logo">E-SHOPPER</h1>
                <p>Dashboard and Management</p>
            </div>
            <form method="POST" action="{{ route('login.admin') }}">
                @csrf
                <input type="email" placeholder="Email" name="email" />
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <input type="password" placeholder="Password" name="password" />
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <button type="submit" class="login">Log In</button>
                <a href="#">Forgot Password ?</a>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>