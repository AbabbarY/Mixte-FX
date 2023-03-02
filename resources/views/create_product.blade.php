@extends('master.layout_dash')

@section('title')
Create Product 
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p class='text-center fw-bold' style="font-size:23px"> Add New Product </p>
      <form action="{{ route('sent_product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="name_produit" name="name" class="form-control my-2" required>
        <input type="number" placeholder="prix" step="0.1" name="prix" class="form-control my-2" required>
        <input type="number" placeholder="old_prix" step="0.1" name="old_prix" class="form-control my-2" required>

        <div class="check-box my-2">
          <select class="form-control" name="type" required>
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
            <option value="kids">Kids</option>
            <option value="beauty">Beauty</option>
          </select>
        </div>

        
       

        <input type="number" placeholder="quantité"  name="quantité" class="form-control my-2" required>


        <input type="file" name="image" class="form-control my-2 " placeholder="Uplaod image" required>

        <textarea placeholder="description" name="description" class="form-control my-2" required></textarea>

        <div class="color my-4">
          <div>
            <span>Color</span>
          </div>
          <div class="d-flex">
            <div class="form-check mx-2">
              <input class="form-check-input" type="checkbox" value="green" name="color[]" id="flexCheckDefault" checked>
              <label class="form-check-label" for="flexCheckDefault">
                Green
              </label>
            </div>
            <div class="form-check mx-2">
              <input class="form-check-input" type="checkbox" value="pink" name="color[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Pink
              </label>
            </div>
            <div class="form-check mx-2">
              <input class="form-check-input" type="checkbox" value="blue" name="color[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Blue
              </label>
            </div>
          </div>

        </div>


        




        <div>
          <span>Discount</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="form-check mx-3">
            <input type="radio" class="form-check-input" id="radio1" name="offre" value="1" checked >
            <label class="form-check-label" for="radio1">Yes</label>
          </div>
          <div class="form-check mx-3">
            <input type="radio" class="form-check-input" id="radio2" name="offre" value="0" >
            <label class="form-check-label" for="radio2">No</label>
          </div>
        </div>

          <div class="d-flex align-items-center justify-content-center">
              <button class="btn btn-success my-2">Create</button>
          </div>
          
      </form>

    </div>
  </div>
</div>
@endsection

