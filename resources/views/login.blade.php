<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    
   <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="../style/style.css">
    <style>
        .container form{
            width: 50%;
            margin: auto;
        }
        .container form input{
            border: none;
            border-radius: 0;
            border-bottom: 1px solid#e1e1e1;
            outline: none;
        }
        .container form input::placeholder{
            color:#aaa;
            font-size: 14px;
            letter-spacing: 2px;
        }
        .container form input.submit{
            margin-top: 20px;
            width: 100%;
            background-color: #000;
            color: #fff;
            height: 45px;
            font-size: 20px;
            letter-spacing: 2px;
        }
        form .gmail{
            width: 100%;
            background: #4285f4;
            margin-right: 40px;

        }
        form .facebook{
            width: 100%;
            background:#3b5998 ;

        }
        form .gmail button{
            background: none;
            text-align: center;
            color:#fff;
            font-size: 17px;
            letter-spacing: 2px;
            border: none;
        }
        form .facebook button{
            background: none;
            text-align: center;
            color:#fff;
            font-size: 17px;
            letter-spacing: 2px;
            border: none;
        }
        .check{
            font-size: 14px;
            letter-spacing: 1px;
            border: none;
            color: rgb(50, 50, 50);
        }
        form ion-icon{
            color: #fff;
            font-size: 30px;
        }
        .confidentialité{
            padding: 60px;
            font-size: 14px;
            letter-spacing: 2px;
            border: none;
            text-align: center;
        }
        @media all and (max-width:1300px){
            .container form{
            width: 80%;
            margin: auto;
        }
    }
        @media all and (max-width:992px){
            .container form{
            width: 95%;
            margin: auto;
        }
        }
        @media all and (max-width:770px){
            .container form{
            width: 100%;
            margin: auto;
            }
            form .social{
                display: flex;
                flex-direction: column;

            }
            form .gmail{
                margin: 10px 0;
                
            }
        }
    </style>
  </head>
  <body>


    <div>
        <div class="container py-2">
            <div>
                <h1 style="font-family:'Ubuntu',sans-serif">THING SHOP</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column pt-4">


                <div class="text-dark">
                    <h1 style="font-family:'Ubuntu',sans-serif;font-size: 50px;" >Log In</h1>
                </div>

                <div>
                    <p style="font-family:'Ubuntu',sans-serif">You do not have an account ?<a href="{{ route("register") }}" class="text-decoration-none mx-3 " style="font-size:20px">Register</a></p>
                </div>





                <div class="w-100 ">
                    <form >
                        <input type="email" class="form-control" class="email" placeholder="E-mail" name="email">
                        <input type="password" class="form-control my-3" class="password" placeholder="Password" name="password">
                        {{-- <div>
                            <p class="text-center">Or</p>
                        </div> --}}
                       {{-- <div class="d-flex social">
                        <div class="gmail d-flex align-items-center ">
                            <ion-icon name="logo-google" class="m-2"></ion-icon>
                            <button type="button" >Continuez avec Google</button>
                        </div>
                        <div class="facebook d-flex align-items-center ">
                            <ion-icon name="logo-facebook" class="m-2"></ion-icon>
                            <button type="button" >Continuez avec Facebook</button>
                        </div>
                       </div> --}}

                       <div class="check my-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked" class="check">Remember me</label>
                            </div>
                            <div >
                                <a href="#" class="text-decoration-none">Forget Password Or Email</a>
                            </div>
                       </div>
                        <input type="submit" name="submit" value="Se Connecter" class="submit">
                    </form>

                    
                </div>


          
            </div>

            <div class="confidentialité">
                <p>
                    En vous connectant, vous acceptez nos 
                    <a href="#" class="text-decoration">Conditions d'utilisation</a>,
                     de recevoir des e-mails et des mises à jour de THING SHOP et vous reconnaissez
                      avoir lu notre <a href="#" class="text-decoration">Politique de confidentialité </a>.
                </p>
            </div>
        </div>
        
    </div>



















    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>