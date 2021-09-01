<!doctype html>
<html lang="en">
  <head>
<!-- CDM javascript -->
    <!-- https://code.jquery.com/  --> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- my Css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<style> #toast-container > 

.toast-success { background-color: green; } 
.toast-info { background-color: navy; } 
.toast-error { background-color: red; } 
</style>

<!-- Toaster  -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" >    
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>@yield('title') - Amankhalsa</title>
  </head>
  <body>
    <!-- Container div start -->
 
 
    <!-- nav bar start   -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm p-3 mb-5  rounded">
  <!-- Navbar content -->

  <a class="navbar-brand" href="#">Aman</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse font-weight-bolder" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('sample')}}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
    <a class="nav-link " href="{{ route('login') }}" tabindex="-1" aria-disabled="true">{{ __('Login') }}</a>


      </li>

   <li class="nav-item">
    <a class="nav-link " href="{{ route('logout') }}" tabindex="-1" aria-disabled="true"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                                    </form>

      </li>
   @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Navbar end  -->


<div class="container"> 
    @if(Auth::user())
    <h1>Hello..!
 <B > 
  <span style="color: green;">
   {{ucwords( Auth::user()->name)}}
@endif

  </span></B>
  <br>
   </h1>
 

    @yield('content') 
<!-- <h1>This is from master file </h1> -->


    









<!-- <h1>Master file:</h1> -->
@yield('footer')


<!-- new footer -->

</div>  
<div class="bg-dark  py-1 text-light  ">
<p class="px-5  ">
   
 <div class="footer-clean" style="display: block;">
        <footer>
                      <!-- <h1 class="text-center">footer section</h1> -->

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                      
               <div class="text-center" >

<a href="https://www.facebook.com/amansingh.co/"   target="_blank"  ><img src="https://amansin.weebly.com/uploads/4/6/7/8/46784111/fb.png " alt="facebook" height="30" width="30"></a> 
<!--You tube-->
<a href="https://www.youtube.com/channel/UCxbsAh7NLciLLgKohVgJPQg" target="_blank" >
<img src="https://amansin.weebly.com/uploads/4/6/7/8/46784111/youtube.png" alt="youtube" 
height="30"  width="30"></a>
<!--Instagram-->
<a href="https://www.instagram.com/khalsa_veeer/"  target="_blank">
    <img src="https://amansin.weebly.com/uploads/4/6/7/8/46784111/inta.png" alt="Insta" height="30"  width="30"></a>
<a href="https://www.linkedin.com/in/amanpreet-singh-092722122/"  target="_blank">
<img src="https://amansin.weebly.com/uploads/4/6/7/8/46784111/linkid.png" alt="linkedin" height="30"  width="30"></a>

<a href="https://twitter.com/amansin31gmail2" target="_blank" >
<img src="https://amansin.weebly.com/uploads/4/6/7/8/46784111/twiter.png" alt="twiter" height="30"  width="30"></a>

</div>
                       <center>
    <p class="font-weight-bold">Copyright &copy; 2021 Developed by <span class="text-primary">   AmanKhalsa</span></p></center>
                    </div>


                </div>

            </div>

        </footer><hr>
    
    </div>
<!-- social links -->

<!-- social links -->

</div>  
  
    <!-- Container div end  -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<script src="{{ asset('js/aman.js') }}" type="text/javascript" ></script>
<!-- <script src="{{ asset('js/jquery.js') }}" type="text/javascript" ></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- end my js  -->
<!-- Toaster CDN script  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Toaster script -->

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 


</script>
  </body>
</html>