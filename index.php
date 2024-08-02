<!DOCTYPE html>
<html lang="en">
<head>
  <title>The White Stripes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<!-- navigaton bar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">The White Stripes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="About.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Albums.html">Albums</a>
      </li>
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="php/login.php">FanZone</a>
      </li>    
    </ul>
  </div>  
</nav>
<!--cookie alert-->
<div class="cookie-approve rounded">
  <span>
    This website makes use of cookies to improve user experience.<br>
    <a href="cookie_Policy.html">learn more</a> <br>
  </span>
  <button class="ok-btn mr-1 rounded">Okay</button>
</div>
<!--carosel-->

  <div class = "container">
     <div id = "carouselwithIndicators" class = "carousel slide w-auto" data-ride = "carousel">
        <ol class = "carousel-indicators">
           <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
           <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
           <li data-target = "#carouselExampleIndicators" data-slide-to = "2s"></li>
        </ol>
        
        <div class =" carousel-inner">
           <div class = "carousel-item active">
            <!--https://www.youtube.com/watch?v=YaTbr8MOtLg-->
              <img class = "d-block w-100" 
                 src = "gfx/wts1.jpg" 
                 alt = "Elephant from seven nation army">
           </div>
           
           <div class = "carousel-item">
             <!--https://faroutmagazine.co.uk/the-truth-behind-meg-and-jack-whites-creative-partnership/-->
              <img class = "d-block w-100" 
                 src = "gfx/wts2.jpg" 
                 alt = "Band members Jack and Meg">
           </div>
           <div class = "carousel-item">
             <!--https://www.redbubble.com/people/alanbaoart/works/24139174-jack-of-diamonds?irclickid=RfWWHizsXxyITr80Fl0U2UEkUkGznn0xnT5UyU0&irgwc=1&utm_group=RBC&utm_source=Impact&utm_medium=brand_awareness&PartnerType=pt.aff&PartnerCategory=&Region=&PartnerID=77643-->
              <img class = "d-block w-100" 
                 src = "gfx/wts3.jpg" 
                 alt = "Fan art of Jack">
           </div>
        </div>
        

        <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
           <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
           <span class = "sr-only">Previous</span>
        </a>
        
        <a class = "carousel-control-next" href = "#carouselwithIndicators" role = "button" data-slide = "next">
           <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
           <span class = "sr-only">Next</span>
        </a>
     </div>
  </div>
<!--spliter-->
<br>
<br>
<div class="container-fluid split">

      <h2 >The White Stripes</h2>
      <p>The White Stripes broke up: <span id="time"></span></p>
      
      <p id = "moreinfo"></p>
      <button id="writeBtn" class="btn btn-info">More Info</button>
      </div>
<br>
<br>
<!--thumnails -->
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-4">
      <div class="img-thumbnail text-center">
      <!--https://www.discogs.com/release/14543409-The-White-Stripes-The-White-Stripes-->
          <img src="gfx/wsalb1.jpg" class="rounded" alt="About" onclick= "albLoad();return false;">
        </a>
      <h2>Albums</h2>
      <p>The White Stripes released 10 albums and countless songs. Click below to find where you can purchase and listen</p>
      <a href="Albums.html" class="btn btn-info" role="button">More Info</a>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="img-thumbnail  text-center">
          <img src="gfx/wsalb3.jpg" class="rounded" alt="Fanzone"onclick= "fzLoad();return false;">
        </a>
      <h2>Start Chatting!</h2>
      <p>Click Here to talk to other White Stripes fans. Discuss your favourite Albums, Songs and News!</p>
      
      <a href="php/chat.php" class="btn btn-info" role="button">More Info</a>
    
    </div>
    </div>


    <div class="col-sm-4">
      <div class="img-thumbnail text-center">
        <!--https://twitter.com/exclaimdotca/status/980532535347249153-->
          <img src="gfx/wsalb2.jpg" class="rounded " alt="About" onclick= "abtLoad();return false;">
        </a>
      <h2>About</h2>
      <p>Click Here to learn about the history of Jack and Meg White; former bands, legal disputes, relationships and more</p>
      <a href="About.html" class="btn btn-info" role="button">More Info</a>
      <br>
      </div>
    </div>


  </div>
</div>


<!--footer-->
<footer>
  <h3>Made By Paul Oates </h3>
  <p>For educational purposes only all creditaion goes to artists</p>
  <a href="cookie_Policy.html">Cookie/Privacy Policy</a>
  <br>
  <br><br>

  <br><br>  
  <br><br>
  <br><br>
</footer>
<script src="code.js"></script>
</body>

</html>