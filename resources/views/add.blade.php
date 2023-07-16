@extends('dashboard')
@section('add')
<div class="container-fluid px-4 mt-4">
    <div class="col-lg-6">
        <div class="card card-center" style="justify-content: center">
            <div class="card-header">
                <strong>Add Job Vacancy</strong>
            </div>
            <form action="/create" method="POST">
                @csrf
                <div class="card-body card-block">
                    <div class="has-success form-group"><label class=" form-control-label">Company</label><input type="name" class="form-control" name="name"></div>
                    <div class="has-warning form-group"><label class=" form-control-label">Potition</label><input type="potition" class="form-control" name="potition"></div>
                    <div class="has-success form-group"><label class=" form-control-label">Salary</label><input type="number" class="form-control" name="salary"></div>
                    <div class="has-warning form-group"><label class=" form-control-label">Description</label><input type="text" class="form-control" name="description"></div>
                    <div class="has-success form-group"><label class=" form-control-label">Address</label><input type="address" class="form-control" name="address"></div>
                    <div class="has-warning form-group"><label class=" form-control-label">Email</label><input type="email" class="form-control" name="email"></div>
                    <div class="has-warning form-group"><label class=" form-control-label">Telephone</label><input type="number" class="form-control" name="telephone"></div>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection