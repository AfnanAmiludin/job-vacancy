@extends('dashboard')
@section('confirm')
<div class="col-lg-6 mt-4 px-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Basic Table</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Handle</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($user as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="/actionConfirm/{{$item->id}}" class="btn btn-info" >Confirm</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
<div class="col-lg-14 mt-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Basic Table</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Potition</th>
                      <th scope="col">Email</th>
                      <th scope="col">Handle</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($job as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->potition}}</td>
                    <td>{{$data->email}}</td>
                    <td><a href="/actionJobConfirm/{{$data->id}}" class="btn btn-info" >Confirm</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection