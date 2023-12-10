<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" sizes="4x4" href="{{asset('assets/img/nmpc-logo.png')}}">
        <title>msu-iit nmpc</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Font: Source Sans 3 -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700;800;900&display=swap');

            :root{
                --primary-color: #9c0d0f;
                --primary-color-dark: #800000;
                --secondary-color: ;
                --text-dark: #1f2937;
                --text-light: #6b7280;
                --extra-light: #fffceb;
                --max-width: 1200px;
            }

            *{
                font-family: 'Source Sans 3', sans-serif;
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            a{ text-decoration: none; }

            .wrapper{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            nav{
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                background-color: var(--primary-color);
                z-index: 99;
            }
            .nav_content{
                max-width: var(--max-width);
                margin: auto;
                padding: 1.5rem 1rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            nav .logo a{
                font-size: 1.5rem;
                font-weight: 600;
                color: #ffffff;
                transition: .3s;
            }

            .form-box{
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 512px;
                height: 420px;
                overflow: hidden;
                z-index: 2;
            }

            .login-container{
                width: 500px;
                left: 4px;
                display: flex;
                flex-direction: column;
                transition: 0.5s ease-in-out;
            }

            .top header{
                color: var(--primary-color);
                font-size: 40px;
                font-weight: 700;
                text-align: center;
                padding: 10px 0 30px 0;
            }

            .input-field{
                font-weight: 500;
                font-size: 15px;
                height: 50px;
                width: 100%;
                padding: 0 10px 0 45px;
                background: white;
                border: none;
                border-radius: 30px;
                outline: none;
                transition: 0.2s ease;
            }

            .input-box .fas{
                position: relative;
                font-size: 20px;
                top: -35px;
                left: 17px;
                color: var(--primary-color-dark);
            }

            .submit{
                font-size: 20px;
                text-align: center;
                justify-content: center;
                align-items: center;
                font-weight: 500;
                height: 45px;
                width: 100%;
                border: none;
                border-radius: 30px;
                outline: none;
                cursor: pointer;
                transition: 0.3s ease-in-out;
            }

            @media (width < 750px) {
                .section_container{
                    padding: 10rem 1rem 5rem 1rem;
                    text-align: center;
                    grid-template-columns: repeat(1, 1fr);
                }

                .image{ grid-area: 1/1/2/2; }

                .action_btns{ margin: auto; }
            }
        </style>

    </head>

    <body class="hold-transition login-page">
        <div class="wrapper">

            <!-- Preloader -->
            <div class=" preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="{{asset('assets/img/nmpc-logo.png')}}" width="250">
            </div>

            <nav>
                <div class="nav_content">
                    <div class="logo"><a href="{{url('/')}}">msu-iit nmpc</a></div>
                </div>
            </nav>

            <div class="form-box">
                <div class="login-container" id="login">
                    <div class="top">
                        <header>Sign In</header>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Username">
                        <i class="fas fa-circle-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password">
                        <i class="fas fa-lock"></i>
                    </div>

                    <div class="input-box">
                        <a href="" class="submit btn btn-danger">Sign In</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
    </body>
</html>
