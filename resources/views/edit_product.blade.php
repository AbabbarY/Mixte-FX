@extends('master.layout_dash')

@section('title')
EDIT PRODUCT 
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p class='text-center fw-bold' style="font-size:23px"> Update Product </p>
      <form action="{{ route('update_product',$produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" placeholder="name_produit" name="name" class="form-control my-2" value="{{ $produit->title }}" required>
        <input type="number" placeholder="prix" step="0.1" name="prix" class="form-control my-2" value="{{ $produit->prix }}" required>
        <input type="number" placeholder="old_prix" step="0.1" name="old_prix" class="form-control my-2" value="{{ $produit['old-prix'] }}" required>

        <div class="check-box my-2">
          <select class="form-control" name="type"  required>
            <option value="femme" {{ $produit->type === "femme" ? 'selected' : '' }} >Femme</option>
            <option value="homme" {{ $produit->type === "homme" ? 'selected' : '' }}>Homme</option>
            <option value="kids" {{ $produit->type === "kids"  ? 'selected' : '' }}>Kids</option>
            <option value="beauty" {{ $produit->type === "beauty"  ? 'selected' : '' }}>Beauty</option>
          </select>
        </div>

        <input type="number" placeholder="quantité"  name="quantité" class="form-control my-2" value="{{ $produit->quantité }}" required>


        <input type="file" name="image" class="form-control my-2 "  placeholder="Uplaod image">

        <textarea placeholder="description" name="description" class="form-control my-2" required>{{  $produit->description }}</textarea>

        <div>
          <span>Discount</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="form-check mx-3">
            <input type="radio" class="form-check-input" id="radio1" name="offre" value="1" {{ $produit->offres === 1 ? 'checked' : '' }}  >
            <label class="form-check-label" for="radio1">Yes</label>
          </div>
          <div class="form-check mx-3">
            <input type="radio" class="form-check-input" id="radio2" name="offre" value="0" {{ $produit->offres === 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="radio2">No</label>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
              <button class="btn btn-success my-2">Update</button>
          </div>

    
          
      </form>

    </div>
  </div>
</div>
@endsection

