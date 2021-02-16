
@extends('back.master')
@section('mainContent')
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th>
      <th scope="col">Publication Statuse</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Category as $Category)
    <tr>
      <th scope="row">{{$Category->id}}</th>
      <td>{{$Category->CategoryName}}</td>
      <td>{{$Category->CategoryDescription}}</td>
      <td>
        @if ($Category->PublicationStatus==0)
        Unpublish
        @elseif($Category->PublicationStatus==1)
        Publish
        @endif
      </td>
      <td>
        <a href="{{url('/editCategory',$Category->id)}}"><i class="fas fa-edit"></i></a> 
        <a href="{{url('/deleteCategory',$Category->id)}}"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
 
  </tbody>
</table>
</div>
@endsection()
