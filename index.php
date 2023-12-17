<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">AGRO INSIGHT PRO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="abot.php">About</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        

      
      <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
          
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1000" height="600">
      <div class="carousel-caption">
    <h6>AGRO INSIGHT PRO</h6>
    <p>Your Partner in Sustainable Farming Solutions</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1000" height="600">
      <div class="carousel-caption">
    <h6>AGRO INSIGHT PRO</h6>
    <p>Your Partner in Sustainable Farming Solutions</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1000" height="600">
      <div class="carousel-caption">
    <h6>AGRO INSIGHT PRO</h6>
    <p>Your Partner in Sustainable Farming Solutions</p>
  </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class ="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/6.jpg" class="img-fluid aboutimg1">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Agro Insight Pro</h2>
            <p class="py-3">
                This is an user friendly website exclusively for farmers.They can see for the news in theirs respective field, see the crop predictions,yield predictions,etc..
            </p>
            <a href="abot.php" class="btn btn-success">check more</a>
        </div>
    </div>
    </div>
</section>

<section class ="my-5">
    <div class="py-5">
        <h1 class="text-center">Machine Learning Models</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="images/7.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Crop Recommendation

    </h4>
    <p class="card-text"></p>
    <a href="http://127.0.0.1:5000/" class="btn btn-success">click</a>
  </div>
</div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="images/7.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Fertilizer Prediction</h4>
    <p class="card-text"></p>
    <a href="http://127.0.0.1:3000/" class="btn btn-success">click</a>
  </div>
</div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
  <img class="card-img-top" src="images/7.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Weather Prediction</h4>
    <p class="card-text"></p>
    <a href="#" class="btn btn-success">click</a>
  </div>
</div>
            </div>


        </div>
    </div>

    
</section>

<section class ="my-5">
    <div class="py-5">
        <h1 class="text-center">Comments</h1>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class=" form-group">
                <label>
                    Username
                </label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class=" form-group">
                <label>
                    Email Id
                </label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class=" form-group">
                <label>
                    Mobile number
                </label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class=" form-group">
                <label>
                    Comments
                </label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<section>
    <footer>
        <p class="p-3 bg-dark text-primary text-center">@agroinsightpro</p>
    </footer>
</section>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




