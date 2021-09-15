<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
     <title>ahenrikson0582 Welcome</title>
  </head>
  <header>
    <!-- Image and text -->
    <nav class="navbar navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #1f8597;">
      <a id="toggleMenu"><img src="images/favicon-32x32.png" width="30" height="30" class="d-inline-block align-top" alt=""><a class="navbar-brand" href="index.html">Abby Henrikson</a>
      <a class="navbar-brand" href="#"></a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resume.html">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </nav>   
</header>
<body style="background-color:#a7a49144">
        <div class="jumbotron jumbotron-fluid" style="background-color:#a7a49144">
          <!-- <div class="container"> -->
          <h1 class="display-4">Hello welcome to Abby Henrikson's Website</h1>
          <p class="lead">Full Stack Web and Hybrid Mobile Applications Developer</p>
          <hr class="my-4">
          <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
          <a class="btn btn-primary btn-lg" href="contact.html" role="button">Contact Me</a>
        </div>
        
   
        
    <div class="card-group justify-content-center">
      <div class="card border-info mb-3" style="max-width: 20rem;">
        <h5 class="card-header">Canvas Draw</h5>
        <div class="card-body">
          <!-- <h5 class="card-title">Card title</h5> -->
          <h5 class="card-title">JavaScript Draw on Canvas</h5>
          <p class="card-text">Canvas doodler complete with color picker, shapes and lines.</p>
          <a href="/draw/program.html" target="_blank" class="btn btn-primary">Draw and Doodle</a>
        </div>
      </div>
      <div class="card border-info mb-3" style="max-width: 20rem;">
        <h5 class="card-header">HTML5 Game</h5>
        <div class="card-body">
          <!-- <h5 class="card-title">HTML5 Game</h5> -->
          <h5 class="card-title">Javascript Game</h5>
          <p class="card-text">Move your player and avoid ending the game with killer sprites.</p>
          <a href="/game" target="_blank" class="btn btn-primary">Play a Game</a>
        </div>
      </div>
      <div class="card border-info mb-3" style="max-width: 20rem;">
        <h5 class="card-header">NASA APOD</h5>
        <div class="card-body">
          <!-- <h5 class="card-title">NASA APOD</h5> -->
          <h5 class="card-title">NASA Apod Using JQuery</h5>
          <p class="card-text">View random NASA Astronomy Picture of the Day.</p>
          <a href="/jquery-apod" target="_blank" class="btn btn-primary">View Pics</a>
        </div>
      </div>
    </div>
          
    <script>

      var toggleMenu = document.getElementById('toggleMenu');
      var nav = document.querySelector('nav');
      toggleMenu.addEventListener(
        'click',
        function(){
          if(nav.style.display=='block'){
            nav.style.display='none';
          }else{
            nav.style.display='block';
          }
        }
      );
    </script>

</main>
    
    </body>
</html>
