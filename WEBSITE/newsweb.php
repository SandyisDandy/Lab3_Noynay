<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>News</title>
</head>
<body>
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">Initio</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Welcome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Stuff.html">Stuff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Signup.html">Sell your soul to Technology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="News.html">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Guestlist.html">See your fellow souls who sold their will</a>
          </li>
        </ul>
      </nav>

    <div class="card px-3 pt-3" style="max-width: 32rem">
        <!-- News block -->
        <div>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
      
          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="https://assets3.thrillist.com/v1/image/3005222/1584x1836/scale;webp=auto;jpeg_quality=60.jpg" class="text-info">
                <i class="fas fa-plane"></i>
                CATS
              </a>
            </div>
      
            <div class="col-6 text-end">
              <u> 15.07.2020</u>
            </div>
          </div>
      
          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5>This is title of the news</h5>
      
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
              id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
              adipisci iusto nam temporibus modi animi laboriosam?
            </p>
          </a>
      
          <hr />
      
          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
                  class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill" />
              </div>
      
              <div class="col-9">
                <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                <p>
                  <u> 15.07.2020</u>
                </p>
              </div>
            </div>
          </a>
      
          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp"
                  class="img-fluid shadow-1-strong rounded" alt="Palm Springs Road" />
              </div>
      
              <div class="col-9">
                <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                <p>
                  <u> 15.07.2020</u>
                </p>
              </div>
            </div>
          </a>
      
          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp"
                  class="img-fluid shadow-1-strong rounded" alt="Los Angeles Skyscrapers" />
              </div>
      
              <div class="col-9">
                <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                <p>
                  <u> 15.07.2020</u>
                </p>
              </div>
            </div>
          </a>
      
          <!-- News -->
          <a href="" class="text-dark">
            <div class="row mb-4 border-bottom pb-2">
              <div class="col-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
                  class="img-fluid shadow-1-strong rounded" alt="Skyscrapers" />
              </div>
      
              <div class="col-9">
                <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                <p>
                  <u> 15.07.2020</u>
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- News block -->
      </div>
      
      <p>Current Date and Time is <span id='date-time'></span>.</p>
      <!--==================== Bootstrap due to rush time ====================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--==================== MAIN JS ====================-->
    <script src="main.js"></script>
</body>
</html>