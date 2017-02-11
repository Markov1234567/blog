@extends('layouts.master')


@section('js')

@include('posts.tag-script')

@endsection()


@section('content')



<div class="col-sm-8 blog-main">
 <h1>Publish a blog post. </h1>

<hr />



 <form method="post" action="/posts">
     {{ csrf_field() }}

   <div class="form-group">
     <label for="title">Title:</label>
     <input type="text" class="form-control" id="title" name="title" required>
   </div>

   <div class="form-group">
     <label for="exampleInputPassword1">Body:</label>
     <textarea id="body" name="body" class="form-control" required></textarea>
   </div>


<div class="form-group">
  <label for="select">Choose one or several tags:</label>
  <select multiple name="tags[]" class="form-control" id="tags">

  </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Publish</button>

</div>









@include('layouts.errors')


 </form>





</div><!-- /.blog-main -->





@endsection
