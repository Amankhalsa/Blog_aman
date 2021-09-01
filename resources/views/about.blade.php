@extends('layout.master')  
@section('title', 'About')

@section('content')  
@parent
<!-- <h2>Child page </h2> -->
<!-- blog post start  -->
<!-- session start  -->


<!-- session end  -->

              



<!-- slider -->
   <div id="carouselExampleCaptions" class="carousel slide  shadow p-3 mb-5 bg-white rounded " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner h-50">
        <div class="carousel-item active">
      <img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100 " alt="..." >
        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-primary font-weight-bold">Welcome to Information technology  </h5>
            <p class="text-success font-weight-bold">Information technology (IT) is the use of computers to store or retrieve data and information</p>
        </div>
        </div>
        <div class="carousel-item">
           
<img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-primary font-weight-bold">welcome to Computer programming </h5>
            <p class="text-success font-weight-bold"> The short answer is yes. Programming computers is all about learning certain languages.
                Just like learning any type of foreign language,.</p>
        </div>
        </div>
        <div class="carousel-item">
    <!-- <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="..."> -->
       <img src="https://source.unsplash.com/1200x500/?Mac,apple" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>welcome to Computer </h5>
            <p>Computers have become a useful and necessary part of modern society.</p>
        </div>
        </div>
          <div class="carousel-item">
        <img src="{{asset('images/slider/4.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>welcome to Computer </h5>
            <p>Computers have become a useful and necessary part of modern society.</p>
        </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

<!-- ============================= slider end =============================  -->
 <div class=" container font-weight-bold 
 shadow-sm p-3 mb-5 bg-white rounded"> Total Posts:
  <span class="badge badge-danger px-2 py-2">{{count($get_data)}}</span>
  </div>
  <br>

<div class="container">
@foreach($get_data as $insert_data)


<div class="text-justify shadow p-3 mb-5 bg-white rounded">
  <b class="float-right"> 

  <span class="badge badge-danger">
  
<!-- {{ $loop->index+1}} -->

{{$get_data->firstitem()+$loop->index}}
  </span> </b><br>

<small class="text-muted float-right" >Posted on: 
@if($insert_data->created_at == NULL)
<span class="text-danger bd-highlight">No date set</span>
@else
  {{$insert_data->created_at->diffForHumans()}}

 @endif
 <!-- Carbon\Carbon::parse($seen_data->created_at)->diffForHumans() -->

  </small>
<h3>User Name:{{ucwords($insert_data->name)}}</h3>
<h4>Title:<span class="text-success">{{ucwords($insert_data->title)}}</span>  </h4>


<hr>
<h2 class="bg-primary text-light container ">Post</h2>
<h4>Description:<span class="text-primary">{{ucwords($insert_data->description)}}</span> </h4>

<!-- <div style="float: right;">
<a href="#" class="btn btn-success ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</a>

</div> -->

<p>
@foreach($insert_data->postuser as $user_data)

<span class="h4">Created by: <strong>{{$user_data->name}}</strong></span>

@endforeach

</p>

 @auth
  @if(auth()->user()->id ==  1)
<div style="float: right;">
<a href="#" class="btn btn-primary mr-3">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
   Edit</a>


</div>
   <!-- ============================= delete form ============================= -->
  
   <form method="post" action=" {{route('post_del')}}" onsubmit="return confirm('Do You want to Delete');">
     @csrf
     <input type="hidden" name="id" value="{{ $insert_data->id}}">
<button type="Submit" name="Delete" class=" btn btn-danger" value=" Delete" >
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> Delete
</button>

</form>

@endif
<!-- edit delete if end here  -->
@endauth
   <!-- ============================= delete form ============================= -->
</div>

@endforeach


</div>
{{ $get_data ->links() }} 
<!-- ============================= main card start =========================== -->

<!--============================= Admin Comment ============================= -->
<div class="">
<p class="mx-2 my-2" >
<img src="{{asset('images/aman.jpg')}}" height="50px" width="50px" alt="..." >
This is admin comment
</p>
<div class="">
   <a href="#" class="card-link btn btn-info">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</a>
 <!-- ============================= Admin Comment ===========================  -->
<hr>  
<table class="table table-borderless ">   
@foreach($get_comment as $insert_comment) 
<tbody>
<tr>
    <td scope="col"  > 

 @foreach($insert_comment->user as $get_user)
 User Name : 
 <strong >{{$get_user->name}}</strong>
 @endforeach
</td>
          <td >:</td>

   <td scope="row"> {{$insert_comment->comment}}</td>
   <td> 


@if($insert_comment->created_at == NULL)
<span class="text-danger bd-highlight">No date set</span>
@else
  {{$insert_comment->created_at->diffForHumans()}}

 @endif
 </td>



    </tr>   
        @endforeach
   
  
  </tbody>
</table>
   {{ $get_comment->links() }}  



</div>

<hr   style="height:2px;border-width:0;color:gray;background-color:gray">
</div>
<!-- Comment publish form  -->



@auth
<!-- admin comment hide logic -->
   @if(auth()->user()->id == 1)


<div class="alert alert-danger font-weight-bold shadow p-3 mb-5  rounded" role="alert">
Not showing comment section
You need to be logged in to post a comment!
</div>
@else
<div class="alert alert-success font-weight-bold " role="alert">

<h4>Showing commeent section:</h4>
</div>

<form method="post" action="{{route('publish_comment')}}"> 
  @csrf
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Add a comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
     placeholder="Enter Your comments here ..." name="user_comment"></textarea>
       @error('user_comment') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>

  <a class="btn btn-success float-right" href="{{ route('login') }}" >{{ __('Login') }}</a>
 <!--  login -->

 
</form>
@endif
<!-- admin comment hide logic end  -->


@endif
<div>
 <strong> Meet Laravel</strong>
  <p class="container">
Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.

Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.

Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.
  </p>


  <p  id="sbar" style="display: none;" class="container">
    <strong>Why Laravel?</strong><br>
 There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.

A Progressive Framework
We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If you're just taking your first steps into web development, Laravel's vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.
<br>
  <strong>Authentication</strong>
<br>
  Many web applications provide a way for their users to authenticate with the application and "login". Implementing this feature in web applications can be a complex and potentially risky endeavor. For this reason, Laravel strives to give you the tools you need to implement authentication quickly, securely, and easily.

</p>

<!--   <button id="hide" class="btn btn-info"> Hide </button>
  <button class="btn btn-primary" id="Showpara"> Show </button> -->
  <button id="toggle" class="btn btn-info">Read more...</button>

</div>



<!-- Main form and map Comment publish form  -->
<hr>
@auth
 @if(auth()->user()->id ==  1)
<div class="row">

  <div class="col">
<!-- form start  -->
<h3 class="card-header">Create Post</h3>

    <form method="post" action="{{route('blog_post')}}">
  @csrf
    <div class="form-group">
    <label for="user name">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputname" placeholder="Enter your Name" >
      @error('name') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
  </div>

  <div class="form-group">
    <label for="post Title">Title:</label>
    <input type="title" name="title" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="Enter your post Title">
    <small  class="form-text text-muted" >
   @error('title') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
    </small>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description"></textarea>
       @error('description') 
    <span class="text-danger">{{ $message }} </span>
    @enderror 
  </div>

 
  <button type="submit" class="btn btn-primary">Post</button>
</form>
<!-- form end -->
  </div>

  <div class="col mt-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27454.504648702412!2d76.27781155807205!3d30.667391589919273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39101a60c106367f%3A0xd1f8938db092c4cf!2sMandi%20Gobindgarh%2C%20Punjab!5e0!3m2!1sen!2sin!4v1629030355405!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>
@else
<h1 class="bg-warning container">Post create feature only for <strong>Admin</strong></h1>

@endif
@endauth




 @section('footer')  

<!-- <p>Footer from child page </p>  -->

@stop 

@endsection 

