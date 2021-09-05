@extends('layout' )
@section('content')

<form action="{{route ('category.save')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="#">
<div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{@old('name')? @old('name'):$category->name}} ">
        </div>
        @error('name')
            <p class="text-danger">
                {{$message}}
            </p>
     @enderror 
    </div> 

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="description" value="{{@old('description')? @old('description'):$category->description}} ">
        </div>
        @error('description')
            <p class="text-danger">
                {{$message}}
            </p>
     @enderror 
    </div> 

    <div class="row mb-3">
       
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/categories" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>


</form>
@endsection