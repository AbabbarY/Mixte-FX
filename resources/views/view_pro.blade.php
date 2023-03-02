@extends("master.layout")
@section('title')
Add To Cart
@endsection

@section('style')
<style>
     *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Ubuntu",sans-serif;  
  }
  .last p,.lorem{
    font-family: 'Poppins',sans-serif;
    letter-spacing: 1px;
    font-size: 15px;
    margin: 0 8px;
  }
  .last ion-icon{
    font-size: 20px;
  }
  .form-check-input:checked[type=radio] {
    background: #f76b6a;
    border: pink;
}
  .add-to-cart{
    background: #f76b6a;
    color: aliceblue;
  }
  .con .social ion-icon{
    
    font-size:23px;color:#000 ;margin:0 4px;transition: 0.3s ease-in-out;
  }
  .con .social ion-icon:hover{
    color: #f76b6a;
  }
</style>
@endsection



@section('content')
<div class="show-pro py-5">
    <div class="container">

      @if(session()->has("success"))
      <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif

      <div class="row">
       
        <div class="col-md-12 col-lg-6">
          <div class="bg-light d-flex justify-content-center align-items-center" style="width:90%;height:100%">
            <img src="{{ asset('./uploads/'.$produit['image']) }}" style="max-width:100%;height:auto">
            
          </div>
        </div>
       
       
  <div class="col-md-12 col-lg-6">
    <form action="{{ route('add.to.cart', $produit->id) }}" method="POST">
      @csrf
      
          <h1><strong>{{ $produit['title'] }}</strong></h1>

          
          <div class="d-flex  last">
            <ion-icon name="airplane-outline" class="text-succes"></ion-icon>
            <p><span style="color:#f76b6a">11</span> Solde in last <span style="color:#f76b6a">24</span>Hours</p>
          </div>

          <div class="d-flex align-items-center my-2">
            <span class="price"><del><span class="money" style="color:#aaa;font-size:20px;">${{ $produit['old-prix'] }}</span></del> 
            <span class="money" style="color:#f76b6a;font-size:30px;">{{ $produit['prix'] }} DH</span></ins></span>
            <span class="badge bg-success mx-2">20%</span>
          </div>

          <div class="lorem">
            <p class="text-secondary">{{ $produit['description'] }} </p>
            <input type="hidden" name="description" value="{{ $produit['description'] }}">
          </div>

          <div class="size">
            <div>
              <span>Size</span>
            </div>
            <div class="radio d-flex align-items-center">
              <div class="form-check mx-3">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="S"  checked>
                <label class="form-check-label" for="radio1">S</label>
              </div>
              <div class="form-check mx-3">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="M" >
                <label class="form-check-label" for="radio2">M</label>
              </div>
              <div class="form-check mx-3">
                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="L" >
                <label class="form-check-label">L</label>
              </div>
              <div class="form-check mx-3">
                <input type="radio" class="form-check-input" id="radio4" name="optradio" value="XL" >
                <label class="form-check-label">XL</label>
              </div>
              <div class="form-check mx-3">
                <input type="radio" class="form-check-input" id="radio5" name="optradio" value="XXL" >
                <label class="form-check-label">XXL</label>
              </div>
            </div>

          

        </div>
        <div class="color my-4">
          <div>
            <span>Color</span>
          </div>
          <div class="d-flex align-items-center">
            <div class="form-check mx-3">
              <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="Red" checked >
              <label class="form-check-label" for="radio1">Red</label>
            </div>
            <div class="form-check mx-3">
              <input type="radio" class="form-check-input" id="radio2" name="optradio2" value="Pink" >
              <label class="form-check-label" for="radio2">Pink</label>
            </div>
            <div class="form-check mx-3">
              <input type="radio" class="form-check-input" id="radio3" name="optradio2" value="Blue" >
              <label class="form-check-label">Blue</label>
            </div>
          
          </div>
          </div>

            <div class="quantité">
        <span >Quantité</span>
        <div class="container mt-2" style="width:100%;">
          <div>
          </div>
            <div class="d-flex align-items-center">
                <input type="number" name="quantity" value="1" min="0" max="100" step="1" class="form-control w-25 h-25">
                <input type="submit" name="submit" value="ADD TO CART" class="btn btn-danger w-50 mx-2">
                {{-- <a href="{{ route('add.to.cart', $produit->id) }}" class="btn btn-danger btn-block text-center w-50 mx-2" role="button">Add to cart</a> --}}
            </div>
        </div>
      </form>
        <div class="my-3 ">
          <div class="d-flex align-items-center">
              <p style="color:#f76b6a;">Or</p>
          </div>
              <div class="container">
                <a href="https://wa.me/+212614462075" class="text-decoration-none p-2 d-flex bg-success add-to-cart w-75 border border-0 hover mx-2 justify-content-center align-items-center">
                    <ion-icon name="logo-whatsapp" style="font-size:20px ;margin:0 10px" class="text-white"></ion-icon>
                    <p class="border border-success bg-success text-white"  style="height:10px" >Contacter Nous On Whatssap</p>
                </a>

            </div>
        </div>

        <div class="chick_out py-3">
          <div>
            <p style="font-size:20px;font-weight:400">We Support</p>
          </div>
          <div class="container">
            <div class="d-flex">
              <img src="../image/payer/3.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/4.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/5.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/6.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/7.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/8.png" style="width:8%;margin:0 5px">
              <img src="../image/payer/9.png" style="width:8%;margin:0 5px">
            </div>
          </div>
        </div>

        <div class="my-5 d-flex align-items-center w-50 justify-content-between">
          <div>
            <span style="font-size:20px;font-weight:400">Share On : </span>
          </div>
          <div class="con">
  
                <div class="container">
                  <div class="d-flex social">
                    <ion-icon name="logo-facebook" ></ion-icon>
                    <ion-icon name="logo-instagram" ></ion-icon>
                    <ion-icon name="logo-twitter" ></ion-icon>
                    <ion-icon name="logo-tiktok" ></ion-icon>
                  </div>
                </div>
          </div>
        </div>
      </div>



      </div>
    </div>
  {{-- </form> --}}
  </div>


 <div class="container p-5">
  <div class="information">
    <div>
      <p class="text-secondary">PRODUCT INFORMATION</p>
    </div>
    <div>
      {{ $produit['description'] }}
    </div>
  </div>
 </div>



 
@endsection