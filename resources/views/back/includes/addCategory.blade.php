@extends('back.master')
@section('mainContent')
<div class="container">
  @if(Session::has('serverError'))
  <h1>{{Session::get('serverError')}}</h1>
  @endif
  <h2>Add Category</h2>
  <form method="post" action="{{url('/storCategory')}}">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Category Name:</label>
      <input type="text" class="form-control"  placeholder="Category Name" name="CategoryName">

    </div>
     <div class="form-group">
      <label>Category Description:</label>
      <input type="text" class="form-control"  placeholder="Category Description" name="CategoryDescription">
    </div>
     <div class="form-group">
      <label>Publication Status:</label>
       <select class="form-control" id="sel1" name="PublicationStatus">
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
      </select>
    </div>
   
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection