<!doctype html>
<html lang="en">
  <head>
    <title>EDIT PRODUCT ACCUEIL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <p class='text-center fw-bold' style="font-size:23px"> Update Product </p>
          <form action="{{ route('update_product_accueil',$produit->id) }}" method="POST" enctype="multipart/form-data">
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
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>