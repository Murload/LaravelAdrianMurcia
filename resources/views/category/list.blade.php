@extends('layout')
@section('header','Categories')
@section('content')

<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{route('category.form')}}" class="btn btn-primary">New Brand</a>
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
            
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>
                <a href ="#" class="btn btn-warning">Edit</a>
                <a href ="{{route ('category.delete',['id'=> $category->id])}})" class="btn btn-danger">Delete</a>
                

            </td>
        </tr>
    @endforeach 
    </tbody>
</table>
@endsection