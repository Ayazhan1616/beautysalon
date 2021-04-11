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

                <div class="container" style="background-color: #d2b7a6;">
        <div class="row">
       
        <div class="col-md-8">
        </div>
        </div>
        <br>
        <h4 class="text-color-white has-text-centered" style="padding-top: 20px; margin-left:100px;color: #6a3332">
    {{ __('lang.upload') }}
    </h4>

</div>


<h1 class="text-color-white has-text-centered" style="padding-top: 64.5px; padding-bottom: 64.5px;">
{{ __('lang.your_best') }}<br><span class="italic" style="font-style: italic;">{{ __('lang.ritual') }}</span>
</h1>
</div>

<div class="content-box about" data-section="o-salone" id="o-salone">
<div class="top-section p-t-0">
<div class="anim-wrapper" data-animation-scroll="front">
    <p>
        <span>{{ __('lang.abouttext1') }}</span>{{ __('lang.abouttext2') }}
    </p>
    <img src="https://thesalonmagazine.co.uk/wp-content/uploads/2021/02/March-1.jpg" class="center";style="width:300px; height:400px; margin-bottom:50px">
    <p style="margin-top:20px;">{{ __('lang.abouttext3') }}</p>
    <h5 style="float: right; font-family: 'Syne Mono', monospace;">{{ __('lang.with_love') }}</h5>
</div>
</div>
</div>



<div data-section="osetrenia">
<div class="content-box treatments" id="osetrenia">
<div class="anim-wrapper-treatments" data-animation-scroll="treatments">
<h2 class="text-color-brown has-text-centered">
{{ __('lang.procedures') }}
</h2>
<br>

<div class="tab-js-content-wrapper">
    <div class="tab-js-content" data-fx="2" data-tab="standardne">
   
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/20/9u5CuJLuLys9hS.jpg" href="http://project.test/skin" style="text-decoration: none; color:  #6a3332;"> 
        <span>{{ __('lang.skin') }}</span>
    </a>
        <br> <hr>              
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/18/yU849Sdo8SNCXn.jpg" href="" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.manic') }}</span>
    </a>
        <br>   <hr>               
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/25/JJG8xxQenUYeFY.jpg" href="" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.make') }}</span>
    </a>
    <br> <hr>  
    <a class="link treatment arrow text-color-brown" data-img="http://ss.art4web.co/storage/treatments/25/JJG8xxQenUYeFY.jpg" href="" style="text-decoration: none; color:  #6a3332;">
        <span>{{ __('lang.hair') }}</span>
    </a>
    </div>
</div>
</div>
</div>


<div id="flowers" class="content-box flowers-paralax"></div>
</div>


<div data-section="predaj">
<div class="content-box cosmetics-sale" data-section="predaj" id="predaj">
<div class="anim-wrapper" data-animation-scroll="partners">
    <h2 class="text-color-white has-text-centered" style="padding-top: 20px; color:#fbf0ec;">
    {{ __('lang.team') }}
    </h2>
    <div class="container" style="padding-bottom: 40px;">
        <div class="card" style="width:180px; height: 360px;margin: 5px;">
          <img class="card-img-top" src="https://goaravetisyan.ru/wp-content/uploads/Davydova-Marianna.jpg" alt="Card image" style="width:100%; height: 70%;">
          <div class="card-body">
            <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.md') }}</h4>
            <p class="card-text" style="color:#6a3332;">{{ __('lang.make_artist') }}</p>
          </div>
        </div>
      
        <div class="card"  style="width:180px; height: 360px;margin: 5px;">
            <img class="card-img-bottom" src="https://goaravetisyan.ru/wp-content/uploads/Plehanova-Vera.jpg" alt="Card image" style="width:100%; height: 70%;">
          <div class="card-body">
          <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.vp') }}</h4>
            <p class="card-text" style="color:#6a3332;">{{ __('lang.stylist') }}</p>
        </div>
      </div>
      
      <div class="card" style="width:180px; height: 360px;margin: 5px;">
      <img class="card-img-top" src="https://goaravetisyan.ru/wp-content/uploads/Umar-Vazhma-1.jpg" alt="Card image" style="width:100%; height: 70%;">
      <div class="card-body">
      <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.uv') }}</h4>
      <p class="card-text" style="color:#6a3332;">{{ __('lang.make_artist') }}</p>
      </div>
      </div>
      
      <div class="card"  style="width:180px; height: 360px;margin: 5px;">
      <img class="card-img-bottom" src="https://goaravetisyan.ru/wp-content/uploads/Petoyan-Diana.jpg" alt="Card image" style="width:100%; height: 70%;">
      <div class="card-body">
      <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.dp') }}</h4>
      <p class="card-text" style="color:#6a3332;">{{ __('lang.manicurist') }}</p>
      </div>
      </div>

      <div class="card"  style="width:180px; height: 360px;margin: 5px;">
        <img class="card-img-top" src="https://goaravetisyan.ru/wp-content/uploads/Blynskaya-Polina.jpg" alt="Card image" style="width:100%; height: 70%;">
        <div class="card-body">
        <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.pb') }}</h4>
        <p class="card-text" style="color:#6a3332;">{{ __('lang.csm') }}</p>
        </div>
        </div>
        
        <div class="card"  style="width:180px; height: 360px;margin: 5px;">
        <img class="card-img-bottom" src="https://goaravetisyan.ru/wp-content/uploads/Lyudmila-Hurshudyan.jpg" alt="Card image" style="width:100%; height: 70%;">
        <div class="card-body">
        <h4 class="card-title" style="color:#6a3332; font-size:20px">{{ __('lang.lh') }}</h4>
        <p class="card-text" style="color:#6a3332;">{{ __('lang.adm') }}</p>
        </div>
        </div>
</div>
</div>

        <div>
        <h4 class="text-color-white has-text-centered" style="padding-top: 20px; color:#fbf0ec;">
    {{ __('lang.res1') }}
    </h4>
    <h4 class="text-color-white has-text-centered" style="color:#fbf0ec;">
    {{ __('lang.res11') }}
    </h4>
    <h5 class="text-color-white has-text-centered" style="padding-top: 10px; color:#fbf0ec;">
    {{ __('lang.res2') }}
    </h5>

<div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif
    <div class="container">
        <div class="row">
       
        <div class="col-md-8">
        </div>
        </div>
        <br>
<form action="/main" method="post" enctype="multipart/form-data" style="margin: 0px 130px">
{{ csrf_field() }}
<div class="form-group">
<label for="Product Name">{{ __('lang.fullname') }}</label>
<input type="text" name="name" class="form-control"  placeholder="{{ __('lang.placeh') }}" >
</div>
<label for="Product Name">{{ __('lang.resume') }}</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple />
<br /><br />
<input type="submit" class="btn btn-outline-light" value="{{ __('lang.upl') }}" style="margin-left:120px; margin-top:0px; margin-bottom:20px"/>
</form>
</div>
</div>
</div>
  
</div>

</div>


<div data-section="kontakt">
    <div class="content-box cosmetics-sale" data-section="kontakt" id="kontakt"  style="padding: 5px 30px 30px 30px;">
    <div class="anim-wrapper" data-animation-scroll="partners">
        <h2 class="text-color-white has-text-centered" style="padding: 20px 30px 30px 30px; color: #6a3332;">
        {{ __('lang.contact') }}
        </h2>
        <a class="mail" href = "mailto: zhaksykeldievaayazhan@gmail.com" target="_blank" rel="noopener">
        {{ __('lang.mail') }}
          </a>
     
</div>
</div>
</div>


</div>
</div>
   </body>

</html>
@endsection