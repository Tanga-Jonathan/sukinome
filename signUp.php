<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUpPage</title>
    <link rel="shortcut icon" href="Images/A (1).png" type="image/x-icon">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    
    </head>
    
    <body>
        
        <!-- <div class="container-fluid"> -->
        
            <nav class="navbar navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="/index.html">ASWT INDUSTRIES (U) LTD</a>
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
                          <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/products.html">Products</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/Customer.html">Customers</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="/about.html">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/signIn.html">Sign In</a></li>
                            <li><a class="dropdown-item" href="/signUp.html">Sign Up</a></li>
                            <li><a class="dropdown-item" href="/index.html">Sign out</a></li>
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

        <nav align = "center">
            <form action="" method="post" >
                <input type="text" placeholder="First Name"><br>
                
                <input type="text" placeholder="Second Name"><br>

                    
                <input type="text" placeholder="Create a User Name"> <br>   
                <p>Password</p>
                <input type="password" name="Password" >
                <p>Repeat Password</p>
                <input type="password" name="Password" >
                       
            </form>

        </nav>
        <footer>
    
        </footer>
        
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    </body>
    </html>