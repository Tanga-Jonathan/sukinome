<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">

<link rel="shortcut icon" href="Images/A (1).png" type="image/x-icon">
    <title>ClientsPage</title>
</head>
<body style="background-color: #333;">
     <div class="container-fluid" style="background-color: rgba(0,0,0,0.7);">
     <video src="vid/bgvideo.mp4" autoplay loop muted type="mp4" class="background-clip" style="position: fixed;top: 0;left: 0;width: 100vw;height: 100vh;object-fit:cover;z-index: -1;">
        </video>
     
        <div class="row" >
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
                            <a class="nav-link " aria-current="page" href="contactss.php">Customers</a>
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
    
     
    <div class="row">
        <div class="col-lg-3">
        <p style="color: #fff; padding-top:20%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        <p style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga assumenda explicabo atque saepe labore quod repellendus optio qui neque cumque odit ipsam vero, sequi impedit dignissimos suscipit, pariatur est velit officiis illo, fugiat in quos! Ut in earum, ipsum commodi nobis vero temporibus. Earum exercitationem est, ea minus voluptatum tenetur?</p>
        
        </div>
    <div class="col-lg-7" >
        <section >
          
          <center>
            <h1 style="color: #fff; padding-top:10%;">Registration Form</h1>
            <form  action="insertDbData.php" method="post" class="form-group">
              
            <input class="form-control" style="width:70%;" type="text" name="User_Name" placeholder="User Name"><br>
            <input class="form-control" style="width:70%;" type="text" name="Firstname" placeholder="First Name"><br>
            <input class="form-control" style="width:70%;" type="text" name="LastName" placeholder="Last Name"><br>
            <input class="form-control" style="width:70%;"  type="email" name="email" placeholder="Your Email"><br>
            <input class="form-control" style="width:70%;"  type="password" name="password" placeholder="password"><br>
            <!-- <input class="form-control" style="width:70%;"  type="password" name="rpassword" placeholder="Repeat password"><br> -->
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </center>
        </section>
    </div>
    <div class="col-lg-2" >
        <h3 style="color: #fff; padding-top:30%;">ADS</h3>
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