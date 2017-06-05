<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- jQuery library -->
    <link rel="stylesheet" href="styles/style.css" />
    <title>Luki Personal Webpage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#maincontent">Luki Webpage</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li class="active"><a href="#home">Home</a></li> -->
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#about">O mnie</a></li>
            <li><a href="#contact">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="maincontent">
      <div class="container">
        <div class="row">
            <div class="col-sm-5 rightdiv">
              <img class="img-avatar" src="images/luki.png" alt="">
            </div>
            <div class="col-sm-7 leftdiv">
              <div class="intro-text">
                <h1>LUKI ✪</h1>
                <h2><small>Web Developer, gracz, kibic</small></h2>
              </div>
            </div>
          </div>
      </div>
    </header>

    <section id="portfolio">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h1>Portfolio</h1>
                <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
              </div>
          </div>
      </div>
    </section>

    <section id="about">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h1>O mnie</h1>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="black-square-behind">
                      <img src="images/about/cs.jpg" alt="CS:GO">
                      <div class="carousel-caption">
                        <h3>Gry komputerowe</h3>
                        <p>Moją pasją od dziecka są gry komputerowe i w wolnych chwilach <br />lubie rozerwać się przy grze.<br /> Najczęściej gram w CS:GO.</p>
                      </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="black-square-behind">
                      <img src="images/about/gotowanie.jpg" alt="Gotowanie">
                      <div class="carousel-caption">
                        <h3>Gotowanie</h3>
                        <p>Gdy mam okazję lubie ugotować coś czego nigdy nie gotowałem.<br /> Tutaj kurczak z ryżem i jabłkami :3</p>
                      </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="black-square-behind">
                      <img src="images/about/gitara.jpg" alt="Gitara">
                      <div class="carousel-caption">
                        <h3>Muzyka</h3>
                        <p>Uwielbiam od czasu do czasu posłuchać muzyki <br />Mam nawet gitarę na której może kiedyś nauczę się grać ;)</p>
                      </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="black-square-behind">
                      <img src="images/about/db.jpg" alt="anime">
                      <div class="carousel-caption">
                        <h3>Magna i anime</h3>
                        <p>Czasem lubię obejrzeć jakieś anime lub poczytać mangę</p>
                      </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="black-square-behind">
                      <img src="images/about/real.jpg" alt="real">
                      <div class="carousel-caption">
                        <h3>Real Madryt</h3>
                        <p>Jestem fanem Realu Madryt od małego, <br />choć wtedy nie miałem nawet możliwości oglądać regularnie ich meczy</p>
                      </div>
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
          </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                <h1>Kontakt</h1>
                <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
              </div>
          </div>
      </div>
    </section>

    <script>
    $(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a,.navbar-header .navbar-brand").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
    </script>
  </body>
</html>
