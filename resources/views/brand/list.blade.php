@extends('layout')
@section('header','Brands')
@section('content')

<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{route('brand.form')}}" class="btn btn-primary">New Brand</a>
    </div>
</div>

<!-- @if(Session::has('message'))
    <p class="alert alert-success">
        {{Session::get('message')}}
    </p>
@endif -->

<table class="table table-striped table-hover">
    <thead>
        <tr>
            
            <th>Brand</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            
            <td>{{$brand->name}}</td>
            <td>
                <a href ="#" class="btn btn-warning">Edit</a>
                <a href ="{{route ('brand.delete',['id'=> $brand->id])}})" class="btn btn-danger">Delete</a>
                

            </td>
        </tr>
    @endforeach 
    </tbody>
</table>
@endsection