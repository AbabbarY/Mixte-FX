
@extends('master.layout_dash')

@section('title')
dashboard Admin
@endsection


@section('content')






<div class="content">

  <div class="card_d">

      <div class="d-flex align-items-center justify-content-between">
          <div>
              <p>0</p>
              <span>Views</span>
          </div>
          <div>
              <ion-icon name="eye-outline"></ion-icon>
          </div>
      </div> 

      <div class="d-flex align-items-center justify-content-between">
          <div>
              <p>0</p>
              <span>Sales</span>
          </div>
          <div>
              <ion-icon name="cart-outline"></ion-icon>
          </div>
      </div> 

      <div class="d-flex align-items-center justify-content-between">
          <div>
              <p class="floss">00.00 DH</p>
              <span>Earning</span>
          </div>
          <div>
              <ion-icon name="cash-outline"></ion-icon>
          </div>
      </div> 

      <div class="d-flex align-items-center justify-content-between">
          <div>
              <p>{{ $membres }}</p>
              <span>Users</span>
          </div>
          <div>
              <ion-icon name="people-outline"></ion-icon>
          </div>
      </div> 

  </div>


  <div class="last_orders">
      <div class="row">

          <div class="col-lg-7 col-md-12  table_order">
              <div class="d-flex justify-content-between align-items-center">
                  <p>Recent Orders</p>
                  <a href="#">
                      <span class="badge bg-primary p-2">View All</span>
                  </a>
              </div>
              <table class="table table-responsive">
                  <tr>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Payment</th>
                      <th>Status</th>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-success">Dilevred</span></td>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-success">Dilevred</span></td>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-success">Dilevred</span></td>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-success">Dilevred</span></td>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-success">Dilevred</span></td>
                  </tr>
                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-danger">Return</span></td>
                  </tr>

                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                  </tr>

                  <tr>
                      <td>Y Ababar</td>
                      <td>200 DH</td>
                      <td>Paid</td>
                      <td><span class="badge bg-primary">In Progress</span></td>
                  </tr>
              </table>
          </div>

          <div class="col-lg-4 offset-1 col-md-12  users ">

              <div class="d-flex justify-content-between align-items-center">
                  <p>Recent Users</p>
                  <span class="badge bg-danger p-2">8 New Member</span>
              </div>
              <div class="row">
                  @foreach($users as $user)
                  <div class="col-sm-6  ">

                      <div class="d-flex flex-column align-items-center">

                        <ul class="users-list clearfix ">
                          <li class="text-center">
                            <img src="../image/user1-128x128.jpg"  alt="User Image" style="width:100px;height:auto">
                            <a class="users-list-name text-decoration-none text-secondary " href="#" style="font-size: .875rem;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{ Str::limit($user->name,10) }}</a>
                            <span class="users-list-date " style="color: #748290;font-size: 12px;">{{ $user->day."/".$user->month }} </span>
                          </li>
                      </div>
                  </div>

                  @endforeach


                  

              </div>


          </div>



      </div>
  </div>


  <div class="last_product">
      <div class="d-flex justify-content-between align-items-center">
          <p>Last Products</p>
          <span class="badge bg-secondary">Top 5 Product Sales</span>
      </div>

      <div class="row">
          <div class="col-12">
              <table class="table">
                  <tr>
                      <th>ID </th>
                      <th>Product</th>
                      <th> Name</th>
                      <th>Price</th>
                      <th>Quantité</th>
                      <th>N Sales</th>
                  </tr>
                  @foreach($produits as $produit)
                  <tr>
                      <td>{{ $produit->id }}</td>
                      <td><img src="{{ asset('./uploads/'.$produit->image ) }}" width="30"> </td>
                      <td>{{ $produit->title }}</td>
                      <td>{{ $produit->prix }} DH</td>
                      <td>{{ $produit->quantité }}</td>
                      <td><span class="badge bg-success" class="badge">0</span></td>
                  </tr>
                  @endforeach
                  
              </table>
          </div>
      </div>
  </div>



</div>




  @endsection