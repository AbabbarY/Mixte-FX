<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   {{-- <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet"> --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
   <link href="{{ asset('frontend/css/style_latest.css') }}" rel="stylesheet">
   <link href="{{ asset('frontend/css/style_cart.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
  
    

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&family=Poppins:wght@200;300;400;500&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet"> --}}

   {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&family=Poppins:wght@200;300;400;500&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet"> --}}

    @yield('style')

    <style>
     .thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}
.thumbnail img {
    width: 80%;
}
.thumbnail .caption{
    margin: 7px;
}
.main-section{
    background-color: #F8F8F8;
}
.dropdown{
    float:right;
    padding-right: 30px;
}
.btn{
    border:0px;
    margin:10px 0px;
    box-shadow:none !important;
}
.dropdown .dropdown-menu{
    padding:20px;
    top:30px !important;
    width:350px !important;
    left:-110px !important;
    box-shadow:0px 5px 30px black;
}
.total-header-section{
    border-bottom:1px solid #d2d2d2;
}
.total-section p{
    margin-bottom:20px;
}
.dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
    </style>
    
  </head>
  <body>


    {{-- header --}}
    <div class="query">
        <header>
               <div class="flex">
               <div class="seller">
                    <div class="btn1">
                       {{-- <input type="text" class="search" placeholder="Search...">
                       <input type="button" class="btn2" value="Ok">
                       <!-- <ion-icon name="search-outline"></ion-icon> --> --}}
      
                       <ion-icon name="logo-whatsapp"></ion-icon>
                       <p> +212 614462075 </p>
                    </div>
               </div>
               <div class="pan">
                  @if(Auth::check())
                
                        {{-- <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                            {{ Auth::user()->name }}
                          <button> --}}
                  <a href="{{ route('dashboard') }}" class="text-secondary text-decoration-none" style="font-family: 'Poppins',sans-serif;;font-size:13px;color:#000">{{ Auth::user()->name }}</a>
                  @else
                  <a href="{{ route('login') }}" style="color:black"><ion-icon name="person-outline"></ion-icon></a>
                  @endif
                  

                  <ion-icon name="heart-outline"></ion-icon><sup>0</sup>
                 
                  <a href="{{ route('cart') }}" class="">
                  <button type="button" class="btn btn-dark mx-4" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                  </a>
            
                  <div class="menu" >
                    <!-- <ion-icon name="menu-outline"></ion-icon> -->
                    <img src="../image/icons8-menu-50.png" style="width:30px" class="menu-icon">
                    <img src="../image/icons8-close-50.png" style="width:30px;display:none" class="close-icon">
                  </div>
               </div>
      
               
              </div>
      
              <div class="media-menu">
                <div class="media-list">
                  <ul>
                    <li><a href="{{ route('show.produit.type','homme') }}">Homme</a></li>
                    <li><a href="{{ route('show.produit.type','femme') }}">Femme </a></li>
                    <li><a href="{{ route('show.produit.type','kids') }}">Tendances </a></li>
                    <li><a href="{{ route('show.produit.type','top') }}">Top </a></li>
                    <li><a href="{{ route('show.produit.type','Nouveautés') }}">Nouveautés</a></li>
                    
                  </ul>
              </div>
      
           </header>     <div class="logo">
            <h1><a href="{{ route('home') }}" class="text-decoration-none text-dark">Thing Shop</a> </h1>
            <p>Fashion</p>
          </div>
      
          <div class="list">
            <div class="fre9">
              <ul>
                <li><a href="{{ route('show.produit.type','homme') }}">Homme</a></li>

                <li><a href="{{ route('show.produit.type','femme') }}">Femme</a></li>
                <li><a href="{{ route('show.produit.type','kids') }}">Kids</a></li>
                <li><a href="{{ route('show.produit.type','top') }}">Top</a></li>
                <li><a href="{{ route('show.produit.type','Nouveautés') }}">Nouveautés</a></li>
              </ul>
            </div>
          </div>
        </div>




        @yield("content");






        {{-- footer --}}
        
<footer>
    <div class="container p-4">

      <div class="row foo">
        <div class="col-md-3">
          <ul>
            <li><span>L'information Sur L'etreprise</span></li>
            <li><a href="#">Qui Sommes Nous</a></li>
            <li><a href="#">Affilié</a></li>
            <li><a href="#">Blogger</a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <ul>
            <li><span>Centre</span></li>
            <li><a href="#">Livraison</a></li>
            <li><a href="#">Routeur</a></li>
            <li><a href="#">Commande</a></li>
            <li><a href="#">Guide des taille</a></li>
            <li><a href="#">Responsabilité</a></li>
            <li><a href="#">Sociale</a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <ul>
            <li><span>Aide</span></li>
            <li><a href="#">Nous Contacter</a></li>
            <li><a href="#">Paiment a Livraison</a></li>
            <li><a href="#">Paiment</a></li>
          </ul>
        </div>

        <div class="col-md-5">
          <div>
              <span>Trouver Nous Sur</span> 
              <div class="social">
                   <ion-icon name="logo-facebook"></ion-icon>
                   <ion-icon name="logo-instagram"></ion-icon>
                   <ion-icon name="logo-youtube"></ion-icon>
                   <ion-icon name="logo-twitter"></ion-icon>
                   <ion-icon name="logo-tiktok"></ion-icon>
            </div>
          </div>

          <div>
            <span class="mb-3">APP</span> <br>
            <span style="font-weight:400;margin:20px 0" x>Abonnez-vous à notre newsletter pour suivre toute l'actualité <span style="font-weight:900"> THING SHOP</span> en avant-première ! (Vous pouvez vous DÉSABONNER à tout moment).</span>
            <div class="d-flex btne mt-3">
                <input type="text" placeholder="Votre Email Adress">
                <button type="button"> S'abonner</button>
            </div>
            <div class="cart-payons">
              <img src="../image/payer/3.png">
              <img src="../image/payer/4.png">
              <img src="../image/payer/5.png">
              <img src="../image/payer/6.png">
              <img src="../image/payer/7.png">
              <img src="../image/payer/8.png">
              <img src="../image/payer/9.png">
            </div>
          </div>
          
        </div>
        
        
        
      </div>
      
      
    </div>
    <p class="copy">Released under <span style="font-weight:600">Youssef@Ababbar</span>   | Copyright @ 2022</p>
</footer>









  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 
 
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>

        <script>
              $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
        </script>
 
        </body></html>