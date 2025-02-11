<?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title> Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY)</title>
       
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">

      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>

       
 </head>

 <body   >
 
      <body>

           <nav class="navbar navbar-expand-xl ">
                 
                <div class=" flex-row-reverse left ">

                     <div class="p-2">
                          
                     </div>
                      
                     <a class="float-left" href="#">
                          <img src="img/AgroVision.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px; width:150px;">
                     </a>
                </div>
                <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
                </button>
                <a class="float-left" href="farmerHomepage.php">
                     <img src="img/AgroVision.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px; width:150px;">
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">



                     <div class="proicon">

                          <?php
                              if (!isset($_SESSION['phonenumber'])) {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                              }
                              ?>
                     </div>

                     <div class="list-group moblists">

                          <?php
                              if (isset($_SESSION['phonenumber'])) {

                                   echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                                   echo "<a href='Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                                   echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                              } else {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                              }
                              ?>
                          <div class='loginz' style="text-align:center;">
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
                </div>




                <div class=" flex-row-reverse right ">
                     <div class="p-2 cart">
                           
                          <div class='loginz'>
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
                     <div class="dropdown p-2 settings ">
                          <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Settings
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                        echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
                     </div>
                </div>
           </nav>
           <br>
           <div class="row" style="text-align:center">
                <div class="col-md-4 col-sm-12">
                     <a href="farmerHomepage.php" id="navbar"><label>Home</label></a>
                </div>
                 
                
                <div class="col-md-4 col-sm-12">
                    <a href="Schemes.php" id="navbar"><label>Schemes</label></a>
                </div>
                 
                <div class="col-md-4 col-sm-12">
                     <a href="CallCenter.php" id="navbar"><label>Call Centers</label></a>
                </div>
           </div>
           <hr>

          

            
           <div class="features container">
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;"> Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY)</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:50%" src="../Images/schemes/PM Mandhan.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                           <h4><b>About:</b></h4>
                            <p style="font: size 25px">
                            Pradhan Mantri Kisan Maandhan Yojna (PMKMY) is a central sector scheme launched on 12th September 2019 to provide security to the most vulnerable farmer families. PM-KMY is contributory scheme, small and marginal farmers (SMFs), subject to exclusion criteria, can opt to become member of the scheme by paying monthly subscription to the Pension Fund. Similar, amount will be contributed by the Central Government.

                            The applicants between the age group of 18 to 40 years will have to contribute between Rs. 55 to Rs. 200 per month till they attain the age of 60. PMKMY is taking care of the farmers during their old age and provides Rs. 3,000 monthly pension to the enrolled farmers once they attain 60 years of age, subject to exclusion criteria.

                            Life Insurance Corporation (LIC) is pension fund manager and registration of beneficiaries is done through CSC and State Govts.So far 23.38 lakh farmers have enrolled under the scheme.
                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                 <div style="font-weight: bold ;font: size 20px;">
                    for more info:<a href="https://agriwelfare.gov.in/" style="margin-left: 10px;">official website</a>
                 </div>
                </div> 
                    
               </div>
           </div>
            
           <br> <br>
           <section id="footer" class="myfooter">
           <div class="container">
                      
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              <p> Team Technova</p>
                              
                              <p>AgroVision</p>
                              <p class="h6"> All copy right Reserved.</p>
                         </div>
                         </hr>
                    </div>
                </div>
           </section>
      </body>

 </html> 