@extends("master.layout")

@section('title')
Cart
@endsection

@section('style')
<style>
        
    .cart-detail{
        padding:15px 0px;
    }
    .cart-detail-img img{
        width:100%;
        height:100%;
        padding-left:15px;
    }
    .cart-detail-product p{
        margin:0px;
        color:#000;
        font-weight:500;
    }
    .cart-detail .price{
        font-size:12px;
        margin-right:10px;
        font-weight:500;
    }
    .cart-detail .count{
        color:#C2C2DC;
    }
    .checkout{
        border-top:1px solid #d2d2d2;
        padding-top: 15px;
    }
    .checkout .btn-primary{
        border-radius:50px;
        height:50px;
    }
    @media screen and (max-width:994px){
        
    }
</style>
@endsection



@section('content')
<div class="container-lg container-fluid-md py-5">
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div> 
    @endif

    @if(session()->has('Success'))
        <div class="alert alert-success">
            {{ session()->get('Success') }}
          </div> 
    @endif

    
    @if(session()->has('Failed'))
    <div class="alert alert-danger">
        {{ session()->get('Failed') }}
      </div> 
    @endif

    <div class="card w-90 m-auto">
        <header class="p-2 bg-light text-secondary">Shooping Card({{ count((array) session('cart')) }})</header>
        <main class="p-2">
            <table class="table table-responsive table-responsive-lg table-responsive-md table-responsive-xl table-responsive-xxl">
                @if(count((array) session('cart')) > 0)
                <tr >
                    <th>Product Name & Details</th>
                    <th class="text-center  d-sm-none d-none  d-md-block">Price</th>
                    <th class="text-center w-25 d-sm-none d-none  d-md-table-cell">quantité</th>
                    <th class="text-center">Total</th>
                    <th></th>
                </tr>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td class="d-md-flex align-items-center p-md-4">
                        <img src="{{ asset('./uploads/'.$details['image']) }}" width="60" height="auto">
                        <div class="d-md-flex flex-column mx-md-2">
                            <p style="font-size:27px;font-weight:600;letter-spacing: -1px;color:rgb(55, 55, 55);font-family: 'Ubuntu',sans-serif;">{{ $details['name'] }}</p>
                            <div class="d-md-flex align-items-center">
                                <div class="d-flex align-items-center mx-md-3">
                                    <p style="font-weight: 700;font-style: italic;">Size : </p>
                                    <p class="text-secondary mx-2">{{ $details['attributes']['size'] }}</p>
                                </div>
                                <div class="d-flex align-items-center mx-md-3">
                                    <p style="font-weight: 700;font-style: italic;">Price : </p>
                                    <p class="mx-2">{{ $details['price'] }}DH</p>
                                </div>
                                <div class="d-flex align-items-center qty-media d-md-none">
                                    <p style="font-weight: 700;font-style: italic;">Quanitité: </p>
                                    <div data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control w-50 m-auto quantity update-cart mx-1" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="p-md-4 d-sm-none d-none d-md-table-cell">
                        {{ $details['price'] }}DH
                    </td>
                    <td class="p-4 d-sm-none d-none d-md-table-cell"  data-th="Quantity" >
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control w-50 m-auto quantity update-cart" >
                    </td>
                    <td class="fw-bold p-4">
                        {{ $details['price'] *  $details['quantity']  }}DH
                    </td>
                    <td class="actions p-4" data-th="">
                        <a class="remove-from-cart " style="cursor: pointer"><ion-icon name="close" class="text-danger" style="font-size:32px"></ion-icon></a>
                    </td>
                </tr>
                        @endforeach
                        @endif

                @else
                    <p class="p-3" style="font-size: 20px;letter-spacing: 1px;">No Product In Cart</p>
                @endif
            </table>
        </main>
        <footer>
            <!-- <div class="d-flex justify-content-end align-items-center"> -->
                    <div class="row  p-3 d-flex align-items-end justify-content-end">
                            <div class="col-md-2 bg-light text-center p-2 fw-bold">SubTotal</div>
                            @if(count((array) session('cart')) > 0)
                            <div class="col-md-1 p-2 text-md-end text-center">{{ $total }} DH</div>
                            @else
                            <div class="col-md-1 p-2 text-md-end text-center">0 DH</div>
                            @endif
                    </div>
                    <div class="row  p-3 d-flex align-items-end justify-content-end  m-sm-auto">
                        <a href="{{ url('/') }}" class="btn btn-secondary col-lg-2 col-md-3 m-2 m-2 "><i class="fa fa-angle-left"></i>  Back To Shopping</a>
                        @if(count((array) session('cart')) > 0)
                            @if($total > 0)
                                <a href="{{ route('make.payment') }}" class="text-decoration-none btn btn-warning  col-lg-2 col-md-3 m-2 m-2" style="">
                                <div id="smart-button-container">
                                    <div style="text-align: center; ">
                                    <div role="link" data-button="" data-funding-source="paypal" class="paypal-button paypal-button-number-0 paypal-button-layout-vertical paypal-button-shape-rect paypal-button-number-multiple paypal-button-env-sandbox paypal-button-color-gold paypal-button-text-color-black paypal-logo-color-blue" tabindex="0" aria-label="PayPal"><div class="paypal-button-label-container"><img style="width:30%" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxcHgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMDEgMzIiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaW5ZTWluIG1lZXQiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDEyLjIzNyAyLjggTCA0LjQzNyAyLjggQyAzLjkzNyAyLjggMy40MzcgMy4yIDMuMzM3IDMuNyBMIDAuMjM3IDIzLjcgQyAwLjEzNyAyNC4xIDAuNDM3IDI0LjQgMC44MzcgMjQuNCBMIDQuNTM3IDI0LjQgQyA1LjAzNyAyNC40IDUuNTM3IDI0IDUuNjM3IDIzLjUgTCA2LjQzNyAxOC4xIEMgNi41MzcgMTcuNiA2LjkzNyAxNy4yIDcuNTM3IDE3LjIgTCAxMC4wMzcgMTcuMiBDIDE1LjEzNyAxNy4yIDE4LjEzNyAxNC43IDE4LjkzNyA5LjggQyAxOS4yMzcgNy43IDE4LjkzNyA2IDE3LjkzNyA0LjggQyAxNi44MzcgMy41IDE0LjgzNyAyLjggMTIuMjM3IDIuOCBaIE0gMTMuMTM3IDEwLjEgQyAxMi43MzcgMTIuOSAxMC41MzcgMTIuOSA4LjUzNyAxMi45IEwgNy4zMzcgMTIuOSBMIDguMTM3IDcuNyBDIDguMTM3IDcuNCA4LjQzNyA3LjIgOC43MzcgNy4yIEwgOS4yMzcgNy4yIEMgMTAuNjM3IDcuMiAxMS45MzcgNy4yIDEyLjYzNyA4IEMgMTMuMTM3IDguNCAxMy4zMzcgOS4xIDEzLjEzNyAxMC4xIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDM1LjQzNyAxMCBMIDMxLjczNyAxMCBDIDMxLjQzNyAxMCAzMS4xMzcgMTAuMiAzMS4xMzcgMTAuNSBMIDMwLjkzNyAxMS41IEwgMzAuNjM3IDExLjEgQyAyOS44MzcgOS45IDI4LjAzNyA5LjUgMjYuMjM3IDkuNSBDIDIyLjEzNyA5LjUgMTguNjM3IDEyLjYgMTcuOTM3IDE3IEMgMTcuNTM3IDE5LjIgMTguMDM3IDIxLjMgMTkuMzM3IDIyLjcgQyAyMC40MzcgMjQgMjIuMTM3IDI0LjYgMjQuMDM3IDI0LjYgQyAyNy4zMzcgMjQuNiAyOS4yMzcgMjIuNSAyOS4yMzcgMjIuNSBMIDI5LjAzNyAyMy41IEMgMjguOTM3IDIzLjkgMjkuMjM3IDI0LjMgMjkuNjM3IDI0LjMgTCAzMy4wMzcgMjQuMyBDIDMzLjUzNyAyNC4zIDM0LjAzNyAyMy45IDM0LjEzNyAyMy40IEwgMzYuMTM3IDEwLjYgQyAzNi4yMzcgMTAuNCAzNS44MzcgMTAgMzUuNDM3IDEwIFogTSAzMC4zMzcgMTcuMiBDIDI5LjkzNyAxOS4zIDI4LjMzNyAyMC44IDI2LjEzNyAyMC44IEMgMjUuMDM3IDIwLjggMjQuMjM3IDIwLjUgMjMuNjM3IDE5LjggQyAyMy4wMzcgMTkuMSAyMi44MzcgMTguMiAyMy4wMzcgMTcuMiBDIDIzLjMzNyAxNS4xIDI1LjEzNyAxMy42IDI3LjIzNyAxMy42IEMgMjguMzM3IDEzLjYgMjkuMTM3IDE0IDI5LjczNyAxNC42IEMgMzAuMjM3IDE1LjMgMzAuNDM3IDE2LjIgMzAuMzM3IDE3LjIgWiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0gNTUuMzM3IDEwIEwgNTEuNjM3IDEwIEMgNTEuMjM3IDEwIDUwLjkzNyAxMC4yIDUwLjczNyAxMC41IEwgNDUuNTM3IDE4LjEgTCA0My4zMzcgMTAuOCBDIDQzLjIzNyAxMC4zIDQyLjczNyAxMCA0Mi4zMzcgMTAgTCAzOC42MzcgMTAgQyAzOC4yMzcgMTAgMzcuODM3IDEwLjQgMzguMDM3IDEwLjkgTCA0Mi4xMzcgMjMgTCAzOC4yMzcgMjguNCBDIDM3LjkzNyAyOC44IDM4LjIzNyAyOS40IDM4LjczNyAyOS40IEwgNDIuNDM3IDI5LjQgQyA0Mi44MzcgMjkuNCA0My4xMzcgMjkuMiA0My4zMzcgMjguOSBMIDU1LjgzNyAxMC45IEMgNTYuMTM3IDEwLjYgNTUuODM3IDEwIDU1LjMzNyAxMCBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA2Ny43MzcgMi44IEwgNTkuOTM3IDIuOCBDIDU5LjQzNyAyLjggNTguOTM3IDMuMiA1OC44MzcgMy43IEwgNTUuNzM3IDIzLjYgQyA1NS42MzcgMjQgNTUuOTM3IDI0LjMgNTYuMzM3IDI0LjMgTCA2MC4zMzcgMjQuMyBDIDYwLjczNyAyNC4zIDYxLjAzNyAyNCA2MS4wMzcgMjMuNyBMIDYxLjkzNyAxOCBDIDYyLjAzNyAxNy41IDYyLjQzNyAxNy4xIDYzLjAzNyAxNy4xIEwgNjUuNTM3IDE3LjEgQyA3MC42MzcgMTcuMSA3My42MzcgMTQuNiA3NC40MzcgOS43IEMgNzQuNzM3IDcuNiA3NC40MzcgNS45IDczLjQzNyA0LjcgQyA3Mi4yMzcgMy41IDcwLjMzNyAyLjggNjcuNzM3IDIuOCBaIE0gNjguNjM3IDEwLjEgQyA2OC4yMzcgMTIuOSA2Ni4wMzcgMTIuOSA2NC4wMzcgMTIuOSBMIDYyLjgzNyAxMi45IEwgNjMuNjM3IDcuNyBDIDYzLjYzNyA3LjQgNjMuOTM3IDcuMiA2NC4yMzcgNy4yIEwgNjQuNzM3IDcuMiBDIDY2LjEzNyA3LjIgNjcuNDM3IDcuMiA2OC4xMzcgOCBDIDY4LjYzNyA4LjQgNjguNzM3IDkuMSA2OC42MzcgMTAuMSBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA5MC45MzcgMTAgTCA4Ny4yMzcgMTAgQyA4Ni45MzcgMTAgODYuNjM3IDEwLjIgODYuNjM3IDEwLjUgTCA4Ni40MzcgMTEuNSBMIDg2LjEzNyAxMS4xIEMgODUuMzM3IDkuOSA4My41MzcgOS41IDgxLjczNyA5LjUgQyA3Ny42MzcgOS41IDc0LjEzNyAxMi42IDczLjQzNyAxNyBDIDczLjAzNyAxOS4yIDczLjUzNyAyMS4zIDc0LjgzNyAyMi43IEMgNzUuOTM3IDI0IDc3LjYzNyAyNC42IDc5LjUzNyAyNC42IEMgODIuODM3IDI0LjYgODQuNzM3IDIyLjUgODQuNzM3IDIyLjUgTCA4NC41MzcgMjMuNSBDIDg0LjQzNyAyMy45IDg0LjczNyAyNC4zIDg1LjEzNyAyNC4zIEwgODguNTM3IDI0LjMgQyA4OS4wMzcgMjQuMyA4OS41MzcgMjMuOSA4OS42MzcgMjMuNCBMIDkxLjYzNyAxMC42IEMgOTEuNjM3IDEwLjQgOTEuMzM3IDEwIDkwLjkzNyAxMCBaIE0gODUuNzM3IDE3LjIgQyA4NS4zMzcgMTkuMyA4My43MzcgMjAuOCA4MS41MzcgMjAuOCBDIDgwLjQzNyAyMC44IDc5LjYzNyAyMC41IDc5LjAzNyAxOS44IEMgNzguNDM3IDE5LjEgNzguMjM3IDE4LjIgNzguNDM3IDE3LjIgQyA3OC43MzcgMTUuMSA4MC41MzcgMTMuNiA4Mi42MzcgMTMuNiBDIDgzLjczNyAxMy42IDg0LjUzNyAxNCA4NS4xMzcgMTQuNiBDIDg1LjczNyAxNS4zIDg1LjkzNyAxNi4yIDg1LjczNyAxNy4yIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDA5Y2RlIiBkPSJNIDk1LjMzNyAzLjMgTCA5Mi4xMzcgMjMuNiBDIDkyLjAzNyAyNCA5Mi4zMzcgMjQuMyA5Mi43MzcgMjQuMyBMIDk1LjkzNyAyNC4zIEMgOTYuNDM3IDI0LjMgOTYuOTM3IDIzLjkgOTcuMDM3IDIzLjQgTCAxMDAuMjM3IDMuNSBDIDEwMC4zMzcgMy4xIDEwMC4wMzcgMi44IDk5LjYzNyAyLjggTCA5Ni4wMzcgMi44IEMgOTUuNjM3IDIuOCA5NS40MzcgMyA5NS4zMzcgMy4zIFoiPjwvcGF0aD48L3N2Zz4" data-v-b01da731="" alt="" role="presentation" class="paypal-logo paypal-logo-paypal paypal-logo-color-blue"></div><div class="paypal-button-spinner"></div></div>
                                    </div>
                                </div>
                                </a>
                                <a href="https://wa.me/+212614462075" class="text-decoration-none btn btn-success  col-lg-2 col-md-3 m-2 m-2" style="">
                                    <div id="smart-button-container">
                                        <div style="text-align: center; ">
                                        <div role="link" data-button="" data-funding-source="whattsap" class="paypal-button paypal-button-number-0 paypal-button-layout-vertical paypal-button-shape-rect paypal-button-number-multiple paypal-button-env-sandbox paypal-button-color-gold paypal-button-text-color-black paypal-logo-color-blue" tabindex="0" aria-label="PayPal"><div class="paypal-button-label-container">                
                                            Whats<span class="text-dark fw-bold">App</span>
                                        </div><div class="paypal-button-spinner"></div></div>
                                        </div>
                                        </div>
                                    </a>
                            @endif                                
                        @endif
                    </div>
                    
                   <div>
                    
                   </div>
            <!-- </div> -->
        </footer>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>


@endsection
















