@extends('back.master')
@section('mainContent')
<div class="container">
  @if(Session::has('serverError'))
  <h1>{{Session::get('serverError')}}</h1>
  @endif
  <h2>Add Category</h2>
  <form method="post" action="{{url('/updateCategory')}}" name="formname">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Category Name:</label>
      <input type="text" class="form-control"  value="{{$Category->CategoryName}}" name="CategoryName">
      <input type="hidden" class="form-control"  value="{{$Category->id}}" name="hiddinName">

    </div>
     <div class="form-group">
      <label>Category Description:</label>
      <input type="text" class="form-control"  value="{{$Category->CategoryDescription}}" name="CategoryDescription">
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
<script>
  document.forms['formname'].elements['PublicationStatus'].value={{$Category->PublicationStatus}}
</script>
@endsection