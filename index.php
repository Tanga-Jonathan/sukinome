<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">


    <title>Aswt</title>
    <link rel="shortcut icon" href="Images/A (1).png" type="image/x-icon">
  </head>
<body style="background-color: #333;">
     <div class="container-fluid" style="border: 2px solid red;">
     
        <div class="row" style="border: 2px solid red;">
            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container " >
                  <a class="navbar-brand" href="index.html">ASWT INDUSTRIES (U) LTD</a>
                  <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search here" aria-label="Search" style="width: 300px;">
                        <button class="btn btn-success" type="submit">Search</button>
                      </form>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#labelForCanvas" aria-controls="labelForCanvas" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="labelForCanvas" aria-labelledby="labelForCanvas">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="labelForCanvas">ASWT Menu</h5>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="productss.php">Products</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="contactss.php">Contact Us</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="aboutss.php">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Sign In</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Contacts</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search here" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
    </div>
    <div class="row" style="padding-top: 1%;">
        <header style="background-color:  orange; padding-top: 4%;">
            <h1 style= "text-align: center;" >ASWT INDUSTRIES UGANDA LIMITED</h1>
            </header>
    </div>
     
    <div class="row" style="border: 2px solid red;">
        <div class="col-lg-3" style="border: 2px solid red;">
        <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        
        </div>
        <div class="col-lg-7" style="border: 2px solid red;">
            <div id="sliding" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="3"></button>
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="4"></button>
                  <button type="button" data-bs-target="#sliding" data-bs-slide-to="5"></button>
                </div>
              
                <!-- The slideshow/carousel -->
                <div class="carousel-inner" style="padding-top: 3%;">
                  <div class="carousel-item active">
                    <img src="Images/jerry.jpg" alt="pic1" class="bg-dark d-block w-100 rounded-circle">
                    <div class="carousel-caption"><h3>Good Jerrycans at affordable prices</h3></div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/kitchen.jpg" alt="pic2" class=" bg-dark d-block w-100 img-fluid rounded-circle img-responsive">
                    <div class="carousel-caption display-5"><h3>Even kitchen-ware, we have you covered</h3></div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/industry.jpg" alt="pic3" class="bg-dark d-block w-100 img-fluid rounded-circle">
                    <div class="carousel-caption display-5"><h3>Industrial Jars</h3></div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/emoji-3202677_1280.jpg" alt="pic4" class="bg-dark d-block w-100 img-fluid rounded-circle">
                    <div class="carousel-caption display-5 " ><h3>We also deliver for free</h3></div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/team.jpg" alt="pic5" class="bg-dark d-block w-100 img-fluid rounded-circle">
                    <div class="carousel-caption display-5"><h3>We have a good follow-up team</h3></div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/callUs.jpg" alt="pic6" class="bg-dark d-block w-100 img-fluid rounded-circle">
                    <div class="carousel-caption display-5"><h3>You can call us</h3> <a href="/index.html"><button class="btn btn-primary btn-sm"><h5>Here</h5></button></a></div>
                  </div>
                </div>
              
                <!-- right and left arrows -->
                <button class="carousel-control-prev" type="button" data-bs-target="#sliding" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sliding" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            
        
    </div>
    <div class="col-lg-2" style="border: 2px solid red;">
        <h3 style="color: #fff;">ADS</h3>
        <img src="Images/A (1).png" alt="ad_image" style="width: 50%;">
        </div>    
      
    </div>
     
  
        <div class="row">
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head2</div>
            <div class="card-body"><img src="images_2/pexels-pixabay-269264.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">foooter2</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header " style="color: #fff;">head3</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer3</div>
          </div>
        </div>
<div class="row">
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head2</div>
            <div class="card-body"><img src="images_2/pexels-pixabay-269264.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">foooter2</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header " style="color: #fff;">head3</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer3</div>
          </div>
</div>
<div class="row">
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header" style="color: #fff;">head2</div>
            <div class="card-body"><img src="images_2/pexels-pixabay-269264.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">foooter2</div>
          </div>
          <div class="col-lg-4">
            <div class="card-header " style="color: #fff;">head3</div>
            <div class="card-body"><img src="images_2/pexels-ella-olsson-1640768.jpg" alt="" style="width: 100%;"></div>
            <div class="card-footer" style="color: #fff;">footer3</div>
          </div>
        </div>



        </div>

        <footer style="background-color: orange; padding-top: 100px; text-align: center;" > 
                <p><em>Email us: jonathantanga97@gmail.com</em></p>      

                &copy;<P>ASWT (U) LTD</P>
                      <ul style="list-style: none" class="list-inline ">
                            <li class="list-inline-item"  class="bi bi-facebook" ><a href="#">Home</a></li>
                            <li class="list-inline-item display-7"><a href="#">Contacts</a></li>
                            <li class="list-inline-item"><a href="#">Products</a></li>
                            <li class="list-inline-item"><a href="#">About us</a></li>
                            <li class="list-inline-item"><a href="#" >signIn</a></li>
                      </ul>
        </footer>
      
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>