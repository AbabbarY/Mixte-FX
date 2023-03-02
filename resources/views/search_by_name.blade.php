@extends('master.layout_dash')

@section('title')
Search By Name
@endsection





@section('content')
    <section class="ftco-section">
      

  <div class="container py-4">
    @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
      @endif

      

  <div class="row">
  <div class="col-md-12 ">
    <div class="d-flex justify-content-between align-items-center py-3">
      <h3 class="h5 mb-4 text-center">Table Product</h3>
      <a href="{{ route('create_product') }}" class="btn btn-success">Create</a>
    </div>

  
    <div class="my-3 d-flex justify-content-between align-items-center">
      <form class="d-flex  align-items-center" action="{{ url('/search_by_name') }}" method="GET">
          <input type="search" name="name_product" placeholder="Search By Product Name" class="form-control w-50">
          <button class="btn btn-primary mx-2">Search By Name</button>
        </form>
        <form class="d-flex  align-items-center" action="{{ url('/search_by_type') }}" method="GET">
          <input type="search" name="type_product" placeholder="Search By Product type" class="form-control w-50">
          <button class="btn btn-primary mx-2">Search By Type</button>
        </form>
    </div>

  <div class="table-wrap">
  <table class="table">
    <thead class="thead-primary">
      <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Product</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Old_Price</th>
        <th>Type</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    @foreach($produits as $produit)

    
  <tbody>
    <td>{{ $produit['id'] }}</td>
  <td>
      <img class="img" src="{{ asset('./uploads/'.$produit['image']) }}" width="100px">
  </td>
  <td>
    <span>{{ $produit['title'] }} </span>
  </td>
  <td>
    {{ $produit['prix'] .' '. 'DH' }} 
  </td>
  <td>
    {{ $produit['old-prix'] . ' DH' }} 
  </td>
  
  <td>
    {{ $produit['type'] }} 
  </td>
  <td>
    {{ $produit['description'] }} 
  </td>
  <td>{{ $produit['quantité'] }}</td>
  <td>
    <div class="d-flex">
      <a href="{{ route('edit_product',$produit['id']) }}" class="btn btn-warning mx-2" >Update</a>
    <form onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement?')" action='{{ route('delete_product',$produit['id']) }}' method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" >Delete</button>
    </form>
    </div>

  </td>
  
  </tbody>
  @endforeach
  </table>
  </div>
  </div>
  </div>
  </div>
  </section>
{{-- <div class="d-flex justify-content-center">
{{ $produits->links() }}
</div> --}}
@endsection

