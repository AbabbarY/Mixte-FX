@extends('master.layout_dash')

@section('title')
Users 
@endsection


@section('content')
{{-- {{ dd($user) }} --}}
<div class="bg-white" >
<div class=" p-5">
    <div class="card-header">
      <h3 class="card-title my-4">{{ $user['items']['name'] }} </h3>

      <form class="d-flex  align-items-center" action="{{ url('/search_user') }}" method="GET">
        <input type="search" name="id_user" placeholder="Search By User Id" class="form-control w-50">
        <button class="btn btn-primary m-2 ">Search By User Id</button>
      </form>

    <!-- /.card-header -->
    <div class=" p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Last Seen</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>0{{ $user->phone }}</td>
            <td>{{ Carbon\carbon::parse($user->last_seen)->diffForHumans() }}</td>
            <td>
                @if(Cache::has('user-is-online'.$user->id))
                    <span class="badge bg-success">Online</span>
                @else
                    <span class="badge bg-danger">Offline</span>
                @endif
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    
    <!-- /.card-footer -->
  </div>
</div>
</div>
@endsection