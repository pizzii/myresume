<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Italianno&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Reginald|Resume</title>
    <style>
     aside h1 {
        font-size: 3em;
        font-family: 'yanone kaffeesatz', sans-serif;
        margin-top: 0.5em;
      }

      aside h4{
        font-family: 'yanone kaffeesatz', sans-serif;
      }
      aside a{
        background: #a493c0; 
        border-radius: 2px;
        padding: 5px;
      }
      aside a:visited, aside a:link{
         color: #000;
         text-decoration: none;
         font-size: large;
         text-transform: capitalize;
      }
      aside a:hover{
        color: #d1d1d1;
      }
      .sub-title {
        background-color: #fff;
        font-family: 'yanone kaffeesatz', sans-serif;
        font-size: 1.5em;
        padding: 10px;
      }
      /* .f-img {
        width: 50px;
      } */
      .navbar-brand{
        font-size: 2em;
        font-family: 'Anton', sans-serif;
      }
      .inner-text{
        font-size: 2em;
        font-family: 'italianno', sans-serif;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a493c0;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Resume</a>
          <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"  
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <aside class="mt-5">
        <img class="rounded-circle" src="image/IMG_4466.jpeg" width="100" alt="Reginald Ejike" />
        <h1>Reginald Ejike</h1>
        <h4>Backend Developer</h4>
        <a href="contact.php">Contact me</a>
      </aside>
      <article class="container mt-5">
        <div>
          <h3 class="sub-title">PROFILE</h3>
          <div class="inner-text">
            <p>
              I am passionate about programming and can work in group with people.
            </p>
          </div>
        </div>
        <div>
          <h3 class="sub-title">EDUCATION</h3>
          <div class="inner-text">
           <h4>Federal University of Petroluem resources Effurun</h4>
           <h5 >Computer Sciennce 2016-2020</h5>
          </div>
        </div>
        <div>
          <h3 class="sub-title">EXPERIENCE</h3>
          <div  class="inner-text">
            <p>
              Am experience with PHP language, but i believe learning is on the move. 
              Am also experienced with python
           </p>
          </div>
        </div>
        <div>
          <h3 class="sub-title">SKILLS</h3>
          <div  class="inner-text">
           <ul>
            <li>PHP</li>
            <li>Python</li>
            <li>Html</li>
            <li>javascript</li>
            <li>CSS</li>
            <li>Bootstrap</li>
           </ul>
          </div>
        </div>
        <div>
          <h3 class="sub-title">HOBBIES</h3>
          <div class="inner-text">
           <ul>
            <li>Travelling</li>
            <li>Coding</li>
            <li>Soccer</li>
            <li>Reading</li>
            <li>Peace</li>
           </ul>
          </div>
        </div>
      </article>
    </main>
    <footer>
      <div class="container">
        <h4>Powered by</h4>
        <a href="https://internship.zuri.team"
          ><img src="image/20210818_111530.jpg" width="50" alt=""
        /></a>
        <p>&copy; 2021</p>
    </div>
    </footer>
    <!--jquery bootstrap-->
    <script src="js/jquery-3.5.1.slim.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
