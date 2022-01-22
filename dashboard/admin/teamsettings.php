<!-- admin dashboard -->
 

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
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='./jsfiles/mainadmin.js'>
    </script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">
    <!-- animinate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <title>hycrm-admin : Dashboard</title>
</head>
<body>
    <section id="main-admin-section">
         <div id="main-container-div" class="d-flex flex-row">

         <div id="left-container" class="">
             <!-- all left options div -->
          
             <div class="left-options-div">
                <!-- <div class="left-image-div px-sm-1 px-lg-2  " > <img class="left-icon-image" src="https://assets-geys.sgp1.digitaloceanspaces.com/growtheye/logo.png" alt="Logo"></div> -->
                <div class="left-div-text  font-24"> <span class="align-middle text-white" > HY</span> </div>
              </div>
              
              <a href="./admin.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Dashboard" > <i class="fas fa-tachometer-alt fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Dashboard</span> </div>
              </div>
              </a>

              <a href="./leads.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Leads" > <i class="fas fa-book fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Leads</span> </div>
              </div>
              </a>

                <!-- cleander -->
                <a href="./calender.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Leads" > <i class="fas fa-clock   left-icon"  ></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Calender</span> </div>
              </div>
              </a>
              

              <a href="./analytics.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Analytics" > <i class="fas fa-chart-bar fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Analytics</span> </div>
              </div>
              </a>

              <a href="./reports.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Reports" > <i class="fas fa-box fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Reports</span> </div>
              </div>
              </a>

               <!-- trash -->

               <a href="./trash.php">
                      <div class="left-options-div left-options-div1">
                          <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Reports" > <i class="fas fa-trash-alt fa-2x left-icon"></i></div>
                          <div class="left-div-text mx-auto "> <span class="align-middle text-white mx-1"  > Trash</span> </div>
                        </div>
                        </a>


              <a href="./addLead.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="New Lead" > <i class="fas fa-plus-circle fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > New Lead</span> </div>
              </div>
              </a>

              <a href="./notifications.php">
             <div class="left-options-div left-options-div1">
             
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Notifications" ><span class="small-red-dot"></span>  <i class="fas fa-bell fa-2x left-icon">  </i> </div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Notifications(0)</span> </div>
              </div>
              </a>

              <a href="./settings/profile.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Settings" > <i class="fas fa-cog fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Settings</span> </div>
              </div>
              </a>
              
               




<!-- user div -->
              <a class="user-div" href="./user.php">
             <div class="left-options-div left-options-div1 " data-bs-toggle="tooltip" data-bs-html="true" title="User">
                <div class="left-image-div px-2  " > <i class="fas fa-user fa-2x left-icon"></i></div>
                <div class="left-div-text  user-text"> <span class="align-middle text-white" > User</span> </div>
              </div>
              </a>

               
             
               
 
         </div>
         <div id="right-container">




                              <!-- Mendel for email notification start -->


                              <div id="mondel-for-email-notification" class="shadow ">
                                        <div class="w-100 d-flex flex-row p-2"> <span><strong>Confirmation</strong></span> <i class="fas fa-times cancel-button-email-mondel" onclick="hideEmailConformationMondel()"></i></div>
                                    <span class=" pt-3">Are you sure do you want to send verification email to this user?</span>

                                    <div class="w-100 mt-2">
                                       <button class="btn btn-primary">Yes</button>
                                       <button class="btn btn-secondary  " onclick="hideEmailConformationMondel()">No</button>
                                    </div>
                                </div>



                               <!-- Mendel for email notification end -->





            
                  <div class="right-container-header" >
                  <div class="username-position">Home > Users</div>
                  <div class="username-div">Username</div>
                  </div>

                  <div class="main-content-user ">
                    <!-- user info -->
                    <div class="w-100 d-flex flex-row p-2">
                      <a href="./adduserteam.php"><button class="btn btn-success add-user-button-team">Add User</button></a>
                      <button class="btn btn-secondary refresh-button-team"><i class="fas fa-sync-alt text-white"></i></button>
                    </div>
                       <div class="w-100 p-2  team-settings-table-container">
                      <!-- table div -->
                          <div class="team-settings-main-table-div">
                            <!-- main table div -->









                            <table id="teamSettingTable" class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Verified</th>
                                    <th scope="col">Active </th>
                                    <th scope="col">Pause</th>
                                    <th scope="col">Role(Admin/Client)</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">SMS</th>
                                    <th scope="col">Action</th>
                                     
                                   
                                  </tr>
                                  <tr>
                                    <th scope="col">
                                      <div class="form-group">
   
                                        <input type="text" class="form-control" oninput="searchNameInTeam()" id="searchInputName" aria-describedby="emailHelp" placeholder="Enter Name">
                                        
                                      </div>
                                    </th>

                                    <th scope="col">  
                                    <div class="form-group">
   
                                      <input type="text" class="form-control" oninput="searchEmailInTeam()" id="searchInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                      
                                    </div>
                                    </th>

                                    <th scope="col">
                                    <div class="form-group">
   
                                          <input type="text" class="form-control" oninput="searchPhoneInTeam()" id="searchInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone">
                                          
                                        </div>
                                    </th>
                                    <th scope="col"> </th>
                                    <th scope="col">  </th>
                                    <th scope="col"> </th>
                                    <th scope="col">
                                    <div class="form-group">
   
                                          <input type="text" class="form-control" oninput="searchRoleInTeam()" id="searchInputRole" aria-describedby="emailHelp" placeholder="Enter Role">
                                          
                                        </div>
                                    </th>
                                    <th scope="col"> </th>
                                    <th scope="col"> </th>
                                    <th scope="col">
                                     
                                    </th>
                                     
                                   
                                  </tr>
                                </thead>
                                <tbody id="teamSettingTableBody">
                                  <tr>
                                    <td>Rohit kumar</td>
                                    <td>rohitkumar@gmail.com</td>
                                    <td>9968532458</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>No</td>
                                    <td>Admin</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>
                                      <!-- actions column -->
                                    <div class="d-flex-flex-row align-items-center actions-div">
                                      <a href="./settings/profile.php"><i class="fas fa-edit"></i></a>
                                      <i class="fas fa-trash-alt"></i>
                                      <i class="fas fa-pause"></i>
                                       <!-- <i class="fas fa-play"></i> -->
                                      <i class="far fa-envelope" onclick="showEmailConformationMondel()"></i>

                                      </div>
                                    </td>
                                     
                                    
                                  </tr>

                                  <!-- 2nd demo row -->
                                  <tr>
                                    <td>Mohit kumar</td>
                                    <td>mohitkumar@gmail.com</td>
                                    <td>9853265412</td>
                                    <td>No</td>
                                    <td>Yes</td>
                                    <td>No</td>
                                    <td>Admin</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>
                                      <!-- actions column -->
                                    <div class="d-flex-flex-row align-items-center actions-div">
                                    <a href="./settings/profile.php"> <i class="fas fa-edit"></i></a>
                                      <i class="fas fa-trash-alt"></i>
                                      <i class="fas fa-pause"></i>
                                      <!-- <i class="fas fa-play"></i> -->
                                      <i class="far fa-envelope" onclick="showEmailConformationMondel()"></i>

                                      </div>
                                    </td>
                                  </tr>

 
                                  
                                   
                                </tbody>
                              </table>


                             
                          </div>

                       </div>
                       

                      
                     
                  </div>
         
         




  
         </div>


         </div>

     
      







   


    </section>





</body>

 