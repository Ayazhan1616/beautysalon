@extends('home')
@section('content')
<!DOCTYPE html>
<html>
    <head>
    <title>Beauty salon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Syne+Mono&display=swap" rel="stylesheet">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
  	

      </script>
    </head>

   <body>
<style>
body{
    background-image: url(https://i.pinimg.com/originals/42/33/85/42338575ba7d8221545c49e4f4e3f085.jpg);
    background-size: cover;
    background-repeat: no-repeat; 
   background-attachment: fixed;
}
#header{
    width: 50%;
}
#page{
    width: 50%;
    float: right;
}
#header {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50%;
    padding: 110px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
header {
    display: block;
}
body {
    margin: 0;
    padding: 0;
    font-size: 16px;
    line-height: 30px;
    font-family: tt_norms,Helvetica,Arial;
    font-weight: 400;
    color: #e3bbb5;
    background-color: #d2b7a6;
    text-size-adjust: none!important;
    -moz-text-size-adjust: none!important;
    -webkit-text-size-adjust: none!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
::selection {
    background: #d2b7a6;
    color: #6a3332;
}
a:hover {
    color: white;
  }
a.acti {
    color: white;
  }
#uvod{
    background-color:  #6a3332;
}
#o-salone{
    background-color:  #6a3332;
}
#osetrenia{
    background-color:  #d2b7a6;
    padding: 20px 110px 30px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}
#predaj{
    background-color:  #6a3332;
}
#kontakt{
    background-color:  #d2b7a6;
}

.has-text-centered {
    text-align: center;
    color: #6a3332;
}
.text-color-white {
    color: #fff;
}
h1 {
    font-family: canela,Helvetica,Arial;
    font-weight: 100;
    font-size: 72px;
    letter-spacing: .62px;
    line-height: 80px;
    margin: 0;
    padding: 0;
}
#content .content-box.about .top-section {
    padding: 20px 110px 30px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
.tab-js-content-wrapper{
    display: block;
}
#content .content-box.flowers-paralax {
    position: relative;
    height: 160px;
    background-image: url(https://wallpapercave.com/wp/Be6Aoli.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
.container{
    display: flex;
    flex-wrap: wrap;
}
a.mail, a.mail:hover, a.mail:active{
    color:  #6a3332;
    text-decoration:none;
    font-size:30px;
    margin-left:120px;
} 
#record_form{
    margin:0px 60px 0px 60px;
}
.form-group{
    margin-bottom:0px;
}
#submit{
    margin: 15px 15px 15px 210px;
}
.form-control{
    margin-bottom: 20px;
}
</style>
<div id="main">

<div id="header">
    <header class="header" id="header">
        <div class="content-wrapper">
            <div class="logo">
                <h2 style="color: aliceblue;">{{ __('lang.salon_name') }}</h2>
            </div>
    
            <div class="mobile-burger" id="burger">
                <div class="lines">
                    <div class="line"></div>
    
                    <div class="line"></div>
    
                    <div class="line"></div>
    
                    <div class="line"></div>
                </div>
            </div>
    
            <nav class="navigation">
                <ul class="nonelist">
                    <li>
                        <a data-section-item="uvod" href="http://localhost/project/public/main" style="text-decoration: none; color: white;">
                        {{ __('lang.home') }}
                        </a>
                    </li>
    
                    <li>
                        <a data-section-item="o-salone" href="http://localhost/project/public/main#o-salone" style="text-decoration: none; color:  white;"> 
                        {{ __('lang.about') }}
                        </a>
                    </li>
    
                    <li>
                        <a data-section-item="osetrenia" href="http://localhost/project/public/main#osetrenia" style="text-decoration: none; color:  white;">
                        {{ __('lang.procedures') }}
                        </a>
                    </li>
    
                    <li>
                        <a data-section-item="predaj" href="http://localhost/project/public/main#predaj" style="text-decoration: none; color:  white;">
                        {{ __('lang.team') }}
                        </a>
                    </li>
    
                    <li>
                        <a data-section-item="kontakt" href="http://localhost/project/public/main#kontakt" style="text-decoration: none; color:  white;">
                        {{ __('lang.contact') }}
                        </a>
                    </li>
                </ul>
            </nav>
    
        </div>
</header>
</div>
    
<div id="page">

    <div id="content" class="content">
        <div class="content-box intro" data-section="uvod" id="uvod" style="margin-top: 200px;">
            <div id="mouse-scroll">
                <div class="scroll-button scroll-mouse">
                  <div class="shapeshifter play"></div>
                 </div>
                </div>
</div>


<div data-section="osetrenia">
<div class="content-box treatments" id="osetrenia">
<div class="anim-wrapper-treatments" data-animation-scroll="treatments">
<h2 class="text-color-brown has-text-centered">
{{ __('lang.hair') }}
</h2>
<br>
<p style="color:  #6a3332;">{{ __('lang.hairtxt') }}</p>
<img src="https://i.pinimg.com/originals/4c/60/73/4c607333ca8d2b788df98ea74b03f31c.jpg" style="width: 200px; height: 250px; margin-left: 100px;">
</div>
</div>
</div>

<div data-section="record">
<div class="content-box cosmetics-sale" data-section="predaj" id="predaj">
<div class="anim-wrapper" data-animation-scroll="partners">
    <h2 class="text-color-white has-text-centered" style="padding-top: 20px; color:#fbf0ec;">
    {{ __('lang.booking') }}
    </h2>
    @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$error}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif

         <form id="record_form" action="send" method="POST">
         {{ csrf_field() }}
      <div class="form-group">
                <h6>Name<h6>
                <input id="name" type="text" class="form-control" name="name" placeholder=" Your name" autocomplete="off"/>

                <h6>Phone number</h6>
                <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder=" Your phone number" autocomplete="off"/>

                <h6>E-mail</h6>
                <input id="e_mail" type="text" class="form-control" name="e_mail" placeholder=" Your mail" autocomplete="off"/>

                <h6>Choose a master</h6>
                <select id="master_name" name="master_name" class="form-control">
                    <option value="{{ __('lang.md') }}">{{ __('lang.md') }}</option>
                    <option value="{{ __('lang.uv') }}">{{ __('lang.uv') }}</option>
                </select>

                <h6>Choose a procedure</h6>
                <select id="procedure_name" name="procedure_name" class="form-control">
                    <option value="{{ __('lang.hair') }}">{{ __('lang.hair') }}</option>
                </select>

                <h6>Choose a recording time</h6>
                <input type="date" id="recording_time" name="recording_time" class="form-control">

                <button id="submit" class="btn btn-outline-light">Submit</button>
            </div>  
</form>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
   <script type="text/javascript">

    $('#record_form').on('submit',function(event){
        event.preventDefault();

        let name = $('#name').val();
        let phone_number = $('#phone_number').val();
        let e_mail = $('#e_mail').val();
        let master_name = $('#master_name').val();
        let procedure_name = $('#procedure_name').val();
        let recording_time = $('#recording_time').val();

        $.ajax({
          url: "/skin",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            phone_number:phone_number,
            e_mail:e_mail,
            master_name:master_name,
            procedure_name:procedure_name,
            recording_time:recording_time,
          },
          success:function(response){
            console.log(response);
          },
         });
        });
      </script>

<div id="flowers" class="content-box flowers-paralax"></div>
</div>

<div data-section="osetrenia">
<div class="content-box treatments" id="osetrenia">
<div class="anim-wrapper-treatments" data-animation-scroll="treatments">
<h2 class="text-color-brown has-text-centered">
{{ __('lang.oprocedures') }}
</h2>
<br>

<div class="tab-js-content-wrapper">
    <div class="tab-js-content" data-fx="2" data-tab="standardne">
   
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/20/9u5CuJLuLys9hS.jpg" href="http://localhost/project/public/skin" style="text-decoration: none; color:  #6a3332;"> 
        <span>{{ __('lang.skin') }}</span>
    </a>
        <br> <hr>              
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/18/yU849Sdo8SNCXn.jpg" href="http://localhost/project/public/manic" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.manic') }}</span>
    </a>
        <br>   <hr>               
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/25/JJG8xxQenUYeFY.jpg" href="http://localhost/project/public/make" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.make') }}</span>
    </a>
    <br> <hr>  
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/25/JJG8xxQenUYeFY.jpg" href="http://localhost/project/public/hair" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.hair') }}</span>
    </a>
    </div>
</div>
</div>
</div>

   </body>

</html>
@endsection