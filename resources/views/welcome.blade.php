<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hardiman</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Red Hat Text:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Red Hat Text';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #323232;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #585757;
}

.active {
  background-color: #585757;
}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bgimg {
            background-position: absolute;
            background-size: 12px 30px;
            background-image: url("file:///C:/Users/RPL-30/Downloads/sioop.jfif");
            min-height: 75%;
}
.menu {
  display: none;
}

.warna-bg {
background-size: cover;
  
  background-attachment: fixed;
     background-repeat: no-repeat;    
}
.jumbotron-bg{
  background-image: url('/img/rs6.jpg');
        background-repeat: no-repeat; 
        background-size: cover;
        height: 300px;
        
       
}
.jombutron{
  margin-top: -75px
} 
.jumbotron .display-4 {
  color: white;
  text-align: center;
  margin-top: 165px; 
}

.form-inline{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}


        </style>
    </head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    <div class="container">
    <a class="navbar-brand" href="#">
  </a>
  <div class="navbar-nav ml-auto">
      <a class="nav-link text-light" href="/">about</a>
    </div>
</div>
</nav>

<section class="jombutron-bg text-center">
  <div class="jumbotron-bg pt-5 text-light ">
    <h1 class="display-4 mt-5 align-item-center">AyoLawanCorona!</h1>
  </div>

</section>


<div class="container">
<div class="row">
<div class="col text-center bg-light">
<h3 class="text-primary">Rumah Sakit di Lampung barat yang menyediakan<p class="text-primary">.test covid_19</p> </h3>

</div>
</div>
</div>



<div class="container">
<div class="row">
<div class="col text-center bg-light">
<h1 class="text-dark">Lampung Barat</h1>
</div>
</div>

<div class="row">
<div class="col text-center bg-danger">
<p class="font-weight-bold text-light">POSITIF.</p>
<div class="badge badge-primary text-wrap bg-danger rounded mb-5" style="width: 6rem;">
<h3>100</h3>
</div>
</div>
    <div class="col text-center bg-success">
    <p class="font-weight-bold text-light ">NEGATIF</p> 
<div class="badge badge-primary text-wrap bg-success rounded" style="width: 6rem;">
  <h3>100</h3>
</div>
    </div>
<div class="col text-center bg-dark">
<p class="font-weight-bold text-light">MENINGGAL</p>
<div class="badge badge-primary text-wrap bg-dark rounded" style="width: 6rem;">
  <h3>100</h3>
</div>
</div>
</div>
<hr size: 0,5px>
</div>


<div class="container">
<div class="row mb-5">
  <div class="col-4 offset-6">
    <input class="form-control  mr-sm-4" type="search" placeholder="cari tempat...." aria-label="Search">
  </div>
  <div class="col-2">
    <button class="btn btn-outline-primary" type="submit">search</button>
  </div>
</div>

<div class="row">
<div class="col mb-2">
    <div class="card">
        <img src="/img/rs2.jpg" class="card-img-top" alt="Responsive image">
        <div class="card-body">
          <h5 class="card-title text-center">RS.Alimuddin Umar</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ url('/view') }}" class="btn btn-primary">view</a>
        </div>
    </div>
</div>

<div class="col mb-2">
    <div class="card">
        <img src="/img/rs2.jpg" class="card-img-top" alt="Responsive image">
        <div class="card-body">
          <h5 class="card-title">Rumah Sakit</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ url('/view') }}" class="btn btn-primary">view</a>
        </div>
    </div>
</div>

<div class="col mb-2">
    <div class="card">
        <img src="/img/rs2.jpg" class="card-img-top" alt="Responsive image">
        <div class="card-body">
          <h5 class="card-title">Rumah Sakit</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ url('/view') }}" class="btn btn-primary">view</a>
        </div>
    </div>
</div>
</div>
</div>

</div>

<div class="card-footer text-muted">
   <div class="container text-center">
   <p>hardiman</p></div>
  </div>
</div>






          
    </body>
</html>
