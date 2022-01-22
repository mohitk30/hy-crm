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
    <link rel="stylesheet" type="text/css" href="../styleadmin.css">
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
              
              <a href="../admin.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Dashboard" > <i class="fas fa-tachometer-alt fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Dashboard</span> </div>
              </div>
              </a>

              <a href="../leads.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Leads" > <i class="fas fa-book fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Leads</span> </div>
              </div>
              </a>


                <!-- cleander -->
                <a href="../calender.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Leads" > <i class="fas fa-clock   left-icon"  ></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Calender</span> </div>
              </div>
              </a>
              
              <a href="../analytics.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Analytics" > <i class="fas fa-chart-bar fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Analytics</span> </div>
              </div>
              </a>

              <a href="../reports.php">
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


              <a href="../addLead.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="New Lead" > <i class="fas fa-plus-circle fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > New Lead</span> </div>
              </div>
              </a>

              <a href="../notifications.php">
             <div class="left-options-div left-options-div1">
             
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Notifications" ><span class="small-red-dot"></span>  <i class="fas fa-bell fa-2x left-icon">  </i> </div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Notifications(0)</span> </div>
              </div>
              </a>

              <a href="./profile.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Settings" > <i class="fas fa-cog fa-2x left-icon"></i></div>
                <div class="left-div-text  "> <span class="align-middle text-white" > Settings</span> </div>
              </div>
              </a>
              
               




<!-- user div -->
              <a class="user-div" href="../user.php">
             <div class="left-options-div left-options-div1 " data-bs-toggle="tooltip" data-bs-html="true" title="User">
                <div class="left-image-div px-2  " > <i class="fas fa-user fa-2x left-icon"></i></div>
                <div class="left-div-text  user-text"> <span class="align-middle text-white" > User</span> </div>
              </div>
              </a>

               
             
               
 
         </div>
         <div id="right-container">
            
                  <div class="right-container-header" >
                  <div class="username-position">Home > Settings > Profile</div>
                  <div class="username-div">Username</div>
                  </div>

                  <div class="main-content-settings-profile">
                    <!-- user profile settings -->
          
                     
                    <div class="left-links-div">
                       <div><strong>General Settings</strong></div>
                       <div><a href="./manageaccount.php">Manage Account</a></div>
                       <div><a href="./profile.php">Profile</a></div>
                       <div><a href="./changepassword.php">Change Password</a></div>
                       <div><a href="./acesscode.php">Access Code</a></div>
                       <div><a href="./changelog.php">Changelog</a></div>
                       <div><strong>Customer Updates</strong></div>
                       <div><a href="./acknowsms.php">Acknowledgment SMS</a></div>
                       <div><strong>Account Settings</strong></div>
                       <div><a href="./roles.php">Roles</a></div>
                       <div><strong>Lead Form Settings</strong></div>
                       <div><a href="./manageoption.php">Manage Source</a></div>
                       <div><a href="./manageoption.php">Manage Status</a></div>
                    </div>
                    <div class="right-form-div">
                    <div><strong>Profile Management</strong></div>
                    <div class="line-div"></div>

                      <div class="complete-profile-div" >

                       <div class="profile-form-labels">
                        <div class="mb-4">Name <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">Email <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">Phone <span class="red-asterick" >*</span> </div>
                        
                        <div class="mb-4">Receive Daily Email Reminders? <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">New Lead Notifications <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">Receive Reports via Email <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">Receive Reports via SMS <span class="red-asterick" >*</span> </div>
                        <div class="mb-4">Role <span class="red-asterick" >*</span> </div>
                        

                       </div>

                       <div class="profile-form-inputs">
                          <div class="input-group w-75 mb-2 flex-nowrap">
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="addon-wrapping">
                          </div>
                          <div class="input-group w-75 mb-2 flex-nowrap">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                          </div>
                          <div class="input-group w-75 mb-2 flex-nowrap">
                            <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="addon-wrapping">
                          </div>
                          <div class="switch-on-off mt-4 mb-2">
                              <input type="checkbox" value="1" checked>
                              
                          </div>
                          <div class="d-flex flex-row" >
                              <div class="switch-on-off mt-4 mb-2">
                                  <input class="mt-2" name="input-for-email" type="checkbox" value="1" checked>
                                  <label class="p-1" for="input-for-email">Email</label>
                              </div>
                              <div class="switch-on-off mt-4 mb-2 mx-2">
                                  <input class="mt-2" name="input-for-sms" type="checkbox" value="1"  >
                                  <label class="p-1" for="input-for-sms">sms</label>
                              </div>

                          </div>

                          <div class="d-flex flex-row" >
                              <div class="switch-on-off mt-4 mb-2">
                                  <input class="mt-2" name="input-for-Daily" type="checkbox" value="1" >
                                  <label class="p-1" for="input-for-Daily">Daily</label>
                              </div>
                              <div class="switch-on-off mt-4 mb-2 mx-2">
                                  <input class="mt-2" name="input-for-Weekly" type="checkbox" value="1" checked >
                                  <label class="p-1" for="input-for-Weekly">Weekly</label>
                              </div>
                              <div class="switch-on-off mt-4 mb-2 mx-2">
                                  <input class="mt-2" name="input-for-Monthly" type="checkbox" value="1"  >
                                  <label class="p-1" for="input-for-Monthly">Monthly</label>
                              </div>

                          </div>

                          <div class="d-flex flex-row" >
                              <div class="switch-on-off mt-4 mb-2">
                                  <input class="mt-2" name="input-for-Daily" type="checkbox" value="1" >
                                  <label class="p-1" for="input-for-Daily">Daily</label>
                              </div>
                              <div class="switch-on-off mt-4 mb-2 mx-2">
                                  <input class="mt-2" name="input-for-Weekly" type="checkbox" value="1" checked >
                                  <label class="p-1" for="input-for-Weekly">Weekly</label>
                              </div>
                              <div class="switch-on-off mt-4 mb-2 mx-2">
                                  <input class="mt-2" name="input-for-Monthly" type="checkbox" value="1"  >
                                  <label class="p-1" for="input-for-Monthly">Monthly</label>
                              </div>

                          </div>
                          <div class="input-group mt-3 mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Administrator</option>
                            </select>
                          </div>

                          <div class="save-button" >
                            <button class="btn btn-primary">Save</button>
                          </div>


                           


                         
                       </div>


                        
                      </div>




                       
                    </div>
                    





                     
                    </div>
         
         




  
         </div>


         </div>

     
      







   


    </section>





</body>

 