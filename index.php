<!-- // login form for going to dashboard -->

 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="styleindex.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='main.js'>
    </script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">
    <!-- animinate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <title>hycrm-Login</title>
</head>

 

<body  >
    <!-- login nav bar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm hycrm-login-nav w-100 ">
  <div class="container-fluid ">
    <a class="navbar-brand px-4" href="#">hy-crm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-menu-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        <!-- <li class="nav-item ">
          <span class="nav-link active hycrm-register-span" aria-current="page" href="#">Register</span>
        </li> -->
        <li class="nav-item px-lg-4">
          <span class="nav-link active hycrm-register-span" aria-current="page" onclick="showAdmin()" ><span id="admin-or-clint" class="unselectable">Admin</span> Login</span>
        </li>
<!--         
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
       
    </div>
  </div>
</nav>




    <!-- login box info -->

    <!-- all form div -->

    <div id="forms-container-div" class="mx-auto p-2 p-lg-5 mt-1">

      <!-- clint login div  -->

      <div id="clint-login-div" class="different-login-forms  ">
         <div class="p-2 header-form-divs">
         Client Login


         </div>
         <div id="credentials-div" class="p-2">
         <form action="">
          <div class="mb-3 row mx-1">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email*</label>
            <div class="col-sm-8 p-1 mx-auto">
            <input type="email" placeholder="Email" class="form-control" id="inputEmail1" required>
            </div>
        </div>
        <div class="mb-3 row mx-1">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password*</label>
            <div class="col-sm-8 p-1 mx-auto">
            <input type="password" placeholder="Password" class="form-control" id="inputPassword1" required>
            </div>
        </div>
        <div class="mb-3    d-flex flex-lg-row  button-and-forgotpass-div">
             
            <div class="w-75 p-1 mx-auto">
              <button class="mx-lg-2 px-4 btn btn-primary login-button" type="submit">Client Login</button>
            </div>
            <div class="w-100 w-sm-100 p-lg-1 mx-1  pt-2">
             <a class="forgot-password-a" href=""> Forgot your password?</a>
            </div>
        </div>


          </form>
          <a href="./dashboard/client/client.php">Demo clint login</a>
         </div>
      </div>

      <!-- admin login div -->
      <div id="admin-login-div" class="different-login-forms  ">
        <div class="p-2 header-form-divs">
             Admin Login
         </div>
         <div id="credentials-div2" class="p-2">
                <form action="">
                <div class="mb-3 row mx-1">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-8 p-1 mx-auto">
                    <input type="email" placeholder="Email" class="form-control" id="inputEmail2" required>
                    </div>
                </div>
                <div class="mb-3 row mx-1">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password*</label>
                    <div class="col-sm-8 p-1 mx-auto">
                    <input type="password" placeholder="Password" class="form-control" id="inputPassword2" required>
                    </div>
                </div>
                <div class="mb-3    d-flex flex-lg-row  button-and-forgotpass-div">
                    
                    <div class="w-75 p-1 mx-auto">
                    <button class="mx-lg-2 px-4 btn btn-primary login-button" type="submit">Admin Login</button>
                    </div>
                    <div class="w-100 w-sm-100 p-lg-1 mx-1 pt-2">
                    <a class="forgot-password-a" href=""> Forgot your password?</a>
                    </div>
                </div>


             </form>
             <div class="pt-1 red-color-small-font">* This login is only meant for admin and staff members.</div>
             <a href="./dashboard/admin/admin.php">Demo admin login</a>
         </div>
      </div>
       
      <!-- register div -->
      <!-- <div id="register-div" class="different-login-forms  ">
           register div
      </div> -->



    </div>


 
</body>