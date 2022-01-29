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
                <div class="left-div-text font-24"> <span class="align-middle text-white" > HY</span> </div>
              </div>
              
              <a href="./admin.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Dashboard" > <i class="fas fa-tachometer-alt fa-2x left-icon"></i></div>
                <div class="left-div-text "> <span class="align-middle text-white" > Dashboard</span> </div>
              </div>
              </a>

              <a href="./leads.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Leads" > <i class="fas fa-book fa-2x left-icon"></i></div>
                <div class="left-div-text "> <span class="align-middle text-white" > Leads</span> </div>
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
                <div class="left-div-text "> <span class="align-middle text-white" > Analytics</span> </div>
              </div>
              </a>

              <a href="./reports.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Reports" > <i class="fas fa-box fa-2x left-icon"></i></div>
                <div class="left-div-text "> <span class="align-middle text-white" > Reports</span> </div>
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
                <div class="left-div-text "> <span class="align-middle text-white" > New Lead</span> </div>
              </div>
              </a>

              <a href="./notifications.php">
             <div class="left-options-div left-options-div1">
             
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Notifications" ><span class="small-red-dot"></span>  <i class="fas fa-bell fa-2x left-icon">  </i> </div>
                <div class="left-div-text "> <span class="align-middle text-white" > Notifications(0)</span> </div>
              </div>
              </a>

              <a href="./settings/profile.php">
             <div class="left-options-div left-options-div1">
                <div class="left-image-div px-2  " data-bs-toggle="tooltip" data-bs-html="true" title="Settings" > <i class="fas fa-cog fa-2x left-icon"></i></div>
                <div class="left-div-text "> <span class="align-middle text-white" > Settings</span> </div>
              </div>
              </a>
              
               




<!-- user div -->
              <a class="user-div" href="./user.php">
             <div class="left-options-div left-options-div1 " data-bs-toggle="tooltip" data-bs-html="true" title="User">
                <div class="left-image-div px-2  " > <i class="fas fa-user fa-2x left-icon"></i></div>
                <div class="left-div-text user-text "> <span class="align-middle text-white" > User</span> </div>
              </div>
              </a>

               
             
               
 
         </div>
         <div id="right-container">
            
                  <div class="right-container-header" >
                  <div class="username-position">Home > Trash</div>
                  <div class="username-div">Username</div>
                  </div>

                  <div class="main-content-dashboard p-3">
                    <!-- user info -->
                              <div>
                                        <!-- drop down -->
                                        <div class="dropdown w-25">
                                        
                                              <!-- <select class="custom-select my-1 mr-sm-2 form-control   mt-2" id=" ">
                                              
                                                <option selected value="1">Active Leads</option>
                                                <option value="2">Todays leads</option>
                                                <option value="3">Current Month leads</option>
                                                <option value="4">Last Month leads</option>
                                              
                                            
                                              </select> -->

                                              <select class="form-select" aria-label="Default select example">
                                                  <option selected >Active Leads</option>
                                                  <option value="1">Todays leads</option>
                                                  <option value="2">Current Month leads</option>
                                                  <option value="3">Last Month leads</option>
                                                </select>






                                          </div>
                              </div>


                              <div class="p-2 trash-containers-options mt-3"> 
                              <!-- other content div -->


                                                        <!-- filter div -->


                                                      <!-- Modal  fade-->
                                                      <div class="trash-Mondel fade d-none" id="mondelInTrash"  >
                                                                  <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">Add filters</h5>
                                                                  <button type="button" class="btn-close" onclick="toogleFilterMondel()" ></button>
                                                                </div>


                                                              <!-- main content for filters -->

                                                              <div class="main-content-filter-mondel p-5">

                                                                     <div class="form-group  mb-3">
                                                                          <input type="email" class="form-control   mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search by Name, Email, Phone">
                                                                       </div>

                                                                       <div class="form-group  mb-3">
                                                                            <label for="exampleInputEmail1">Created Date </label>
                                                                            <div class="d-lg-flex  ">
                                                                            <input type="email" class="form-control w-lg-50 w-100  mx-2   mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Date">
                                                                                <input type="email" class="form-control w-lg-50 w-100  mx-2  mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="End Date Date">
                                                                            
                                                                            </div>    
                                                                      </div>

                                                                      <div class="form-group  mb-3">
                                                                            <label for="exampleInputEmail1">Updated Date </label>
                                                                            <div class="d-lg-flex ">
                                                                            <input type="email" class="form-control w-lg-50 w-100 mx-2   mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Date">
                                                                                <input type="email" class="form-control w-lg-50 w-100 mx-2  mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="End Date Date">
                                                                            
                                                                            </div>    
                                                                      </div>

                                                                      <div class="form-group  mb-3">
                                                                            <label for="exampleInputEmail1">Source </label>

                                                                            <div class="d-flex flex-wrap"> 
                                                                              <!-- inputs -->
                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Walkin
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Phone
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Website
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Google
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Facebook
                                                                                </label>
                                                                              </div>







                                                                            </div>
                                                                               
                                                                      </div>
                                                                      <div class="form-group  mb-3">
                                                                            <label for="exampleInputEmail1">Status </label>



                                                                            <div class="d-flex flex-wrap"> 
                                                                              <!-- inputs -->
                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  New lead
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Warm
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Hot
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Won
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Lost
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Drop out
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Invalid
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Carrer
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Vendor
                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                Existing Customer

                                                                                </label>
                                                                              </div>

                                                                              <div class="form-check mx-5">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                                  Future lead
                                                                                </label>
                                                                              </div>

                                                                              







                                                                            </div>





                                                                               
                                                                      </div>
 
                                                              </div>

                                                              <div class="pt-4 px-3">
                                                              <button class="btn btn-outline-primary log-out-button float-right">Clear</button>
                                                              <button class="btn btn-primary w-25 log-out-button float-right">Show leads</button>
                                                              </div>



 


                                                      </div>






                                        <div class="w-100 text-center h4"> <strong>No leads match this filter</strong> </div>
                                        <div class="w-100 text-center "> <strong>....but don't worry. There's help below...</strong> </div>

                                          <div class=" trash-option-3-flex-divs w-100">
                                             <div class="option-divs-change-add-filters">
                                               <!-- div 1 -->
                                                    <div class="small-images-in-trash" >
                                                      <img class="w-50 mt-5 mx-auto" src="https://growtheye.com/crm_beta/images/icon_1.png" alt="">
                                                    </div>

                                                    <div class="w-100 text-center "> <strong>May be a different filter</strong> </div>
                                                    <div class="w-100 text-center p-3">  Apply the right filters to find the leads you need </div>

                                                    <div class="d-flex flex-row">
                                                    <button type="submit" class="btn    mx-auto btn-in-trash " onclick="toogleFilterMondel()"  > Edit filter</button>
                                                    <button type="submit" class="btn    mx-auto btn-in-trash "> Clear filter</button>
                                                    </div>

                                             </div>




                                             <div class="option-divs-change-add-filters">
                                               <!-- div 2 -->

                                                    <div class="small-images-in-trash" >
                                                      <img class="w-50 mt-5 mx-auto" src="https://growtheye.com/crm_beta/images/icon_2.png" alt="">
                                                    </div>

                                                    <div class="w-100 text-center "> <strong>Just starting out?</strong> </div>
                                                    <div class="w-100 text-center p-3">  Create your own list of leads in Growth Eye </div>

                                                    <div class="d-flex flex-row">
                                                    <a class="mx-auto" href="./addLead.php"><button type="submit" class="btn     btn-in-trash "> Create lead</button></a>
                                                   
                                                    </div>

                                             </div>
                                             



                                             
                                             <div class="option-divs-change-add-filters">
                                               <!-- div 3 -->
                                                   <div class="small-images-in-trash" >
                                                      <img class="w-50 mt-5 mx-auto" src="https://growtheye.com/crm_beta/images/icon_3.png" alt="">
                                                    </div>

                                                    <div class="w-100 text-center "> <strong>your leads are in a spreadsheet?</strong> </div>
                                                    <div class="w-100 text-center p-3"> Import all your leads into Growth Eye using your CSV file </div>

                                                    <div class="d-flex flex-row">
                                                    <a class="mx-auto" href="./importleads.php"><button type="submit" class="btn    mx-auto btn-in-trash ">Import Leads</button></a>
                                                    
                                                    </div>

                                             </div>



                                          </div>



                              </div>
                   
                    </div>
         
         




  
         </div>


         </div>

     
      







   


    </section>





</body>

 