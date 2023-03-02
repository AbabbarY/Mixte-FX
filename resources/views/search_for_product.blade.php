@extends("master.layout")

@section('title')
Produits
@endsection

@section('style')
<style>
       .container .form-select{
                letter-spacing: 1px;
                border: none;
                background: none;
                border-top: 1px solid #aaa;
                border-radius: 0;
                border-bottom: 1px solid #aaa;
                color: #515151;
            }
            select{
              margin: 5px 0;
            }
            .brdr::first-letter{
                text-transform: uppercase;
                color: #f38b53
            }
           
</style>
@endsection


@section('content')
<div class="bg-light">
     
              
              
    <div class="container p-3">
        <form method="GET" action="{{ route('search_for_product')  }}">

        <input type="hidden" name="type" value="{{ $type }}" >
        <div class="row">   
            
            <div class="col-md-3">
                    <select class="form-select" name="length" required="required">
                        <option selected>Length</option>
                        <option value="1" >Long</option>
                        <option value="1" >Half-long</option>
                        <option value="2" >Max</option>
                        <option value="2" >Mini</option>
                        <option value="2" >On the Kness</option>
                        <option value="2" >Short</option>
                    </select>
                   
            </div>

            <div class="col-md-3">
                <select class="form-select" name="color" required="required">
                    <option value="color"  selected>Color</option>
                    <option value="green" >Green</option>
                    <option value="yellow" >Yellow</option>
                    <option value="black" >Black</option>
                    <option value="white" >White</option>
                    <option value="pink" >Pink</option>
                </select>
            </div>

            <div class="col-md-3">
                    <select class="form-select" required="required">
                        <option selected>Waist Size</option>
                        <option value="1" >Small size</option>
                        <option value="2" >Tall</option>
                        <option value="2" >Natural</option>
                    </select>
            </div>

            <div class="col-md-3">
                <select class="form-select" required="required">
                    <option selected>Size</option>
                    <option value="1" >S</option>
                    <option value="2" >L</option>
                    <option value="2" >M</option>
                    <option value="2" >XL</option>
                    <option value="2" >XXL</option>
                </select>
            </div>

            
        
        </div>
        <div class="row mt-2">
            
            <div class="col-md-3">
                    <select class="form-select" required="required">
                        <option selected>Style</option>
                        <option value="1" >Basic</option>
                        <option value="2" >Casual</option>
                        <option value="2" >Elegant</option>
                        <option value="2" >Sport</option>
                    </select>
            </div>

            <div class="col-md-3">
                <select class="form-select" name="budget" required="required">
                    <option value="10000" selected>Budget</option>
                    <option value="50" >50 DH</option>
                    <option value="100" >100 DH</option>
                    <option value="200" >200 DH</option>
                    <option value="300" >300 DH</option>
                    <option value="400" >400 DH</option>
                    <option value="500" >500 DH</option>
                    
                </select>
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center">
            <input type="submit" class="btn btn-dark" value="Search">    
        </div> 
        </form>
    </div>
      
</div>












<!-- PRODUITS -->

<div class="container ">
    <div class="why">
       <p class="text-center fw-bold brdr " style="padding: 20px;font-family: 'Poppins',sans-serif;letter-spacing: 1px;font-size: 20px;" >{{$type}}</p>
       
       <div class="from">
              @foreach($produits as $produit)

            <div class="card-d">
              <div class="image">
                <ion-icon name="heart-outline"></ion-icon>
                <img src="{{ asset('./uploads/'.$produit['image']) }}" >
              </div>
              <div class="title d-flex justify-content-between align-content-center px-3">
                <p style="font-family: 'Ubuntu'">{{ $produit['title'] }}</p>

                <!-- <img src="../image/etoile.png" style="width:100px;height:30px"> -->
              </div>
              <div class="prix d-flex justify-content-between align-content-center px-3">
                <p style="font-weight:300;color:#74af43">{{ $produit['prix'] }} DH </p>
                <!-- <p>Femme</p> -->
                <a href="{{ route('show.produit.title',$produit['id']) }}" class="btne">Payer Now</a>
              </div>
              
            </div>
            @endforeach 
       </div>
    </div>
 </div>
@endsection

