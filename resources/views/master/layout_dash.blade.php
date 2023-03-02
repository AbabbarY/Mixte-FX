


<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link href="{{ asset('frontend/css/style_dash.css') }}" rel="stylesheet">
   


  </head>
  <body>



    
    <div >

        <div class="container-fluid">
            <div class="row d-flex">
                <div class="navigation text-white" >
                    <nav class="mt-2" style="position: fixed">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item " style="pointer-events: none;">
                                <a href="" class="nav-link text-white d-flex align-items-center">
                                    <ion-icon name="accessibility" class="mr-3" style="font-size:22px"></ion-icon>
                                   <p class="text-start mx-2">{{ Auth::user()->name }}</p>
                                </a>
                                

                              </li>
                          
                        </ul>

                        <ul class="nav nav-pills nav-sidebar flex-column my-5" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link  d-flex align-items-center ">
                                  <ion-icon name="home-outline" class=" mr-3" style="font-size:22px"></ion-icon>
                                  <p class="text-center mx-2 hidd">Dashboard</p>
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="{{ route('management_produit') }}" class="nav-link  d-flex align-items-center">
                                    <ion-icon name="shirt-outline" class="mr-3" style="font-size:22px"></ion-icon>
                                    <p class="text-center mx-2 hidd">Product</p>
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="{{ route('users') }}" class="nav-link  d-flex  align-items-center">
                                  <ion-icon name="people-outline" class="mr-3" style="font-size:22px"></ion-icon>
                                  <p class="text-center mx-2 hidd">Users</p>
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="{{ route('orders') }}" class="nav-link  d-flex align-items-center">
                                  <ion-icon name="people-outline" class="mr-3" style="font-size:22px"></ion-icon>
                                  <p class="text-center mx-2 hidd">Orders</p>
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="{{ route('profile.show') }}" class="nav-link  d-flex align-items-center">
                                  <ion-icon name="settings-outline" class="mr-3" style="font-size:22px"></ion-icon>
                                  <p class="text-center mx-2 hidd">Settings</p>
                                </a>
                              </li>

                  
                          
                        </ul>
                      </nav>
                </div>
                
                
                
                <div class="main" >

                  <div class="d-flex justify-content-between align-items-center my-1">
                    <div class="toggle ">
                        <ion-icon name="menu" style="font-size:30px"></ion-icon>
                    </div>
                  
                    <div class="profile_image">
                        {{-- <img src="Capture.PNG"> --}}
                    </div>
                  
                  </div>
                  
                  
                    @yield('content')

                </div>

            {{-- </div>

                <footer class="main-footer">
                  <strong>Copyright &copy; 2022-2030 <a href="#">Youssef.Ababbar</a> </strong>
                  All rights reserved.
              
                </footer>
              </div> --}}


















            </div>
        </div>

    </div>

    <script>

        let main = document.querySelector('.main');
        let toggle = document.querySelector('.toggle');
        let nav = document.querySelector('.navigation');
        let p = document.querySelectorAll('.hidd');

        toggle.addEventListener('click',function(){
            nav.classList.toggle('active');
            toggle.classList.toggle('active');
            main.classList.toggle('active');
            for(let i=0;i<=p.length+1;i++){
                p[i].classList.toggle('active')
            }
        })

    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>