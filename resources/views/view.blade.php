
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>view</title>
      <link rel="stylesheet" href="{{asset('detail/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('detail/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('detail/css/style.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      

    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
        <!-- Place favicon.ico in the root directory -->		
		<!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

   </head>
   <body>
         <nav class="navbar navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="/">back</a>
            </div>
         </nav>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="/img/rs2.jpg" alt="rs2.jpg">
                  <div class="ovarlay_slide_cont">
                     <h2>RS.Alimudin Umar</h2>
                     <h4>details</h4>
    
                  </div>
               </div>
         
            </div>
         </div>
      </div> 
    
         <div class="container">
            <div class="row mb-5">
               <div class="col-md-4">

                  <h3 style="text-transform: none !important">Jumlah Pasien Covid-19</h3>
                  <hr size: 0,5px>
                  <div class="row mb-5">
                     <div class="col text-center">
                     <h3>positif</h3>
                     <div class="badge badge-primary text-wrap bg-danger" style="width: 6rem;">
                     <h3>100</h3>
                     </div>
                     </div>
                  
               </div>
               <hr size: 0,5px>
               <div class="row mb-5">
                     <div class="col text-center">
                     <h3>negatif</h3>
                     <div class="badge badge-primary text-wrap bg-succes" style="width: 6rem;">
                     <h3>100</h3>
                     </div>
                     </div>
               </div>
               <hr size: 0,5px>
            </div>
           
         <div class="col">
    <div class="card text-white bg-secondary mb-3">
  <div class="card-header text-center  bg-dark ">
  RS Alimuddin Umar
      </div>
             <div class="card-body text-left mb-2">
                  <h4 class="card-text">Alamat* <p>Jl. Teuku Umar, Kubu Perahu, Balik Bukit, Kabupaten Lampung Barat, Lampung 34813</p></h4>
                  <h4 class="card-text">telp* <p>	0728 21651</p></h4>
                  <h4 class="card-text">pelayanan*
                  <p >*rawat jalan </br> 
                      *rawat inap </br>
                     *pelayanan penunjang
                  </h4>
                  <p class="card-text">lebih detail di : <a href="https://rsudalimuddinumar.lampungbaratkab.go.id/">http://rsudliwa.com/</a></p>
                  
             </div>
                  <a href="#" class="btn btn-dark">Go somewhere</a>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.435379264453!2d104.07059231429949!3d-5.0329242526038795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e478fa11ecf8bdf%3A0xb39ce5cb6ca1ee0e!2sRS%20Umum%20Alimuddin%20Umar%20Liwa!5e0!3m2!1sid!2sid!4v1600656594963!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
</div>
</div>


      </div>
      <footer>
         <div class="copyright text-center">
            <p>Copyright 2019  Design by Dimen</p>
         </div>
      </footer>
      <script src="{{asset('view/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('view/js/bootstrap.min.js')}}"></script>
      <script>
         $(function () {
            
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
   </body>
</html>