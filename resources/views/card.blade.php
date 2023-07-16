@extends('dashboard')
@section('card')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-2 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body" style="text-align: center"><h2>{{$dataAdmin}}</h2></div>
                <div class="card-body" style="text-align: center"><h3>Admin</h3></div>
            </div>
        </div>
        <div class="col-xl-2 col-md-2">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body" style="text-align: center"><h2>{{$dataAlumni}}</h2></div>
                <div class="card-body" style="text-align: center"><h3>Alumni</h3></div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body" style="text-align: center"><h2>{{$dataUmum}}</h2></div>
                <div class="card-body" style="text-align: center"><h3>Umum</h3></div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
        </div>
    </div>
    <div class="row">
        @foreach ($getAll->chunk(3) as $item)
            <div class="row">
                @foreach ($item as $data)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">   
                            <strong class="card-title"><h4>{{$data->name}}</h4></strong>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text">{{$data->potition}}</h3>
                            <h5 class="card-text">{{$data->salary}}</h5>
                            <h5 class="card-text">{{$data->address}}</h5>
                            <p class="card-text">{{$data->description}}</p>
                            <div class="sb-nav-link-icon"><i class="fa fa-envelope"></i> {{$data->email}}</div>
                            <div class="sb-nav-link-icon"><i class="fa fa-phone"></i> {{$data->telephone}}</div>
                        </div>
                    </div>
                    <br/>
                </div>
                @endforeach
            </div>
            <br/>
        @endforeach
    </div>
</div>
@endsection