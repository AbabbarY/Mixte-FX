{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}





<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
        .error
        {
        color: red;
        size: 80%
        }
        .hidden
        {
        display:none
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
                <h1><a href="{{ route('home') }}" class="text-decoration-none text-dark" style="font-family:'Ubuntu',sans-serif">THING SHOP</a></h1>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column pt-4">


                <div class="text-dark">
                    <h1 style="font-family:'Ubuntu',sans-serif;font-size: 50px;" >Register</h1>
                </div>

                <div>
                    <p style="font-family:'Ubuntu',sans-serif">You do have account ?<a href="{{ __('login') }}" class="text-decoration-none mx-3 " style="font-size:20px">Log In</a></p>
                </div>




                @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="phone_error" class="error hidden"> Please enter a valid phone number </div>

                <div class="w-100 ">
                    <form method="POST" action="{{ route('register') }}" name="myform">
                        @csrf

                        <input type="text" class="form-control my-3" id="text" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name">                        
                        <input type="email" class="form-control my-3" class="email" placeholder="E-mail" :value="old('email')" name="email">
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="submit" value="+212" disabled class="text-dark form-control w-25" >
                            <input type="text" id="myform_phone" class="form-control my-3" class="phone" placeholder="Phone Number" :value="old('phone')" name="phone" required>
                        </div>
                        <input type="password" class="form-control my-3" class="password" placeholder="Password" name="password" required autocomplete="new-password">
                        <input type="password" class="form-control my-3" class="password" placeholder="Confirm Your Password" name="password_confirmation" required autocomplete="new-password">
                        
                        
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

                       
                        <input type="submit" name="submit" value="{{ __('Register') }}" class="submit">
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
    <script>

        
    // function validatePhoneNumber(input_str) {
    //     var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    //     return re.test(input_str);
    // }
    // function validateForm(event) {

    //     var phone = document.getElementById('myform_phone').value;

    //     if (!validatePhoneNumber(phone)) {
    //         document.getElementById('phone_error').classList.remove('hidden');
    //     } else {
    //         event.preventDefault();
    //         document.getElementById('phone_error').classList.add('hidden');
    //     }

    // }

    // document.getElementById('myform').addEventListener('submit', validateForm);

    </script>
  </body>
</html>