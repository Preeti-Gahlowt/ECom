<?php
SESSION_START();{
	echo"ename";
}
?>
<html>
   <head>
	   <title> Doc</title>
   <meta charset="utf-8" />
		 <meta name="viewport" content="width=device-width, initial-scale=1" />
	     <link href="css/bootstrap.min.css" rel="stylesheet" />
	     <link href="css/hover.css" rel="stylesheet" />
		 <script src="js/jquery-3.3.1.slim.min.js"></script>
		 <script src="js/popper.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
         <link rel="stylesheet" href="css/animate.css">
		 <link rel="stylesheet" href="css/hom.css">
		 <script src="js/wow.min.js"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             <script>
              wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                     }
                    )
                    wow.init();
			 </script>
			 <script type="text/javascript">
	                  $(document).ready(function(){
		              $("#myModal").modal('show');
	                 });
              </script>
			  <style>
			       		  
			      .banner{   height:600px;
			                 background-image:url('images/h10.jpg');
							 background-size:100%;
							 background-repeat:no-repeat;
							 background-attatchment:fixed;
			       }
				   .r    {   height:420px;
				             background-size:100%;
							 background-repeat:no-repeat;
							 background-attatchment:fixed;
						 }
					.r:hover{opacity:0.95;}	 
				     .t:hover{opacity:0.95;}	 
					.rm:hover{opacity:0.95;}	 
				   .rm    {   height:350px;
				             background-size:100%;
							 background-repeat:no-repeat;
							 background-attatchment:fixed;
			       }
				   
				   .r2    {  background-image:url('images/w21.jpg');
                              				   
			              }
                   .r3    {  background-image:url('images/r4.jpg'); 
				             
			              }	
                   .r1   {  background-image:url('images/w222.jpg');
                              				   
			              }
                   .r4    {  background-image:url('images/r6.jpg');
                              				   
			              }	
                    .f    {  
                              margin:10px;		
                              color:white;
                              border-radius:50% 50% solid white;							  
			              }	
                    .f:hover    {  
                              border-radius:50% 50% solid white;							  
			              }	

                     .testbox {
                                 margin: 20px auto;
                                 width: 343px; 
                                 height: 464px; 
                                -webkit-border-radius: 8px/7px; 
                                -moz-border-radius: 8px/7px; 
                                 border-radius: 8px/7px; 
                                 background-color: #ebebeb; 
                                -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
                                -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
                                 box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
                                 border: solid 1px #cbc9c9;
								 opacity:0.99;
								 
                              }		
                        
					input[type=radio] {
									 visibility: hidden;
									}

					form{
						  margin: 0 30px;
						}
                    label.radio {
										cursor: pointer;
									  text-indent: 35px;
									  overflow: visible;
									  display: inline-block;
									  position: relative;
									  margin-bottom: 15px;
									}

					label.radio:before {
									  background: #3a57af;
									  content:'';
									  position: absolute;
									  top:2px;
									  left: 0;
									  width: 20px;
									  height: 20px;
									  border-radius: 100%;
									}

					label.radio:after {
										opacity: 0;
										content: '';
										position: absolute;
										width: 0.5em;
										height: 0.25em;
										background: transparent;
										top: 7.5px;
										left: 4.5px;
										border: 3px solid #ffffff;
										border-top: none;
										border-right: none;

										-webkit-transform: rotate(-45deg);
										-moz-transform: rotate(-45deg);
										-o-transform: rotate(-45deg);
										-ms-transform: rotate(-45deg);
										transform: rotate(-45deg);
									}

					input[type=radio]:checked + label:after {
										opacity: 1;
									}

					hr{
									  color: #a9a9a9;
									  opacity: 0.3;
									}

					input[type=text],input[type=password]{
									  width: 200px; 
									  height: 39px; 
									  -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
									  -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
									  border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
									  background-color: #fff; 
									  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
									  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
									  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
									  border: solid 1px #cbc9c9;
									  margin-left: -5px;
									  margin-top: 13px; 
									  padding-left: 10px;
									}

					input[type=password]{
									  margin-bottom: 25px;
									}

					#icon {
									  display: inline-block;
									  width: 40px;
									  background-color: #3a57af;
									  padding: 8px 0px 8px 15px;
									  margin-left: 15px;
									  -webkit-border-radius: 4px 0px 0px 4px; 
									  -moz-border-radius: 4px 0px 0px 4px; 
									  border-radius: 4px 0px 0px 4px;
									  color: white;
									  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
									  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
									  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
									  border: solid 0px #cbc9c9;
                                    }
									
                     							  
			  </style>
</head>
  <body>
      <!--------fixed navbar----------->
        <nav class=" navbar-inverse navbar-fixed-top bg-white">
          <div class="container-fluid">
		  <div class="row">
          <div class="navbar-header col-sm-3 wow fadeInDown">
                <a href="home.html"><image src="images/logo5.png" class="img-fluid" alt="Responsive image"style="height:100px;width:200px; margin-left:40px; margin-top:; margin-bottom:;"></a>
	       </div>
		   
		  <div class="col-sm-5 wow " style=" margin-top:10px;">
          <ul class="nav  text-center" style="color:;font-size:16px;font-family:Cambria">
              <li class="nav-item mt-3"><a href="women.php" class="nav-link m hvr-Bounce-To-Bottom "style="color:black;">WOMEN</a></li>
		      <li class="nav-item mt-3"><a href="men.php" class="nav-link m hvr-Bounce-To-Bottom" style="color:black;">MEN</a></li>
			  <li class="nav-item mt-3"><a href="beautiful.php" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">#BEBEAUTIFUL</a></li>
			  <li class="nav-item mt-3"><a href="#" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">LOCATE US</a></li>
			  <li class="nav-item mt-3"><a href="btips.py" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">STORES</a></li>
          </ul>
	      </div>
	      <div class="col-sm-1 wow fadeInDown"></div>
		  <div class="col-sm-3 wow fadeInDown" style="margin-top:20px; color:black;">
		                  <a href="#"><i class="fa fa-map-marker fa-2x m-3" style="color:black;"></i></a>
                          <a href="#"><i class="fa fa-search fa-2x m-3" style="color:black;" ></i></a>
						  <a href="#"><i class="fa fa-heart fa-2x m-3" style="color:black;"></i></a>
						  <a href="#"><i class="fa fa-shopping-cart fa-2x m-3" style="color:black;"></i></a>
						  <a href="#"><i class="fa fa-user fa-2x m-3" style="color:black;" data-toggle="modal" data-target="#myModal"></i></a>
		  </div>
          </div>
          </div>
       </nav>

 
	  <!-------image-------->
	  <div class="container-fluid p-0" style="margin-top:50px">
	  <div class="row mt-3 ">
	     <image src="images/d1.jpg" style="width:100%;height:1000px;">
	  </div>
	  <!------HOW RAA WORKS------->
	  <div class="row" style="color:black;font-size:16px;font-family:Cambria">
	            <div class="col-sm-12 text-center p-3 wow zoomin">
				      <h1 style="color:black;font-size:30px;font-family:Cambria">HOW RAA WORKS</h1>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
                          &emsp;<center><img src="images/hi1.png" ></center>
	                           <center><p class="h5">Select a Style</p></center>
	                           <center><p>Pick your perfect style from<br/>
							             our Collection of Designer <br/>
										 Outfit and accessories.<br/></p></center>
	                           
			    </div>
				<div class="col-sm-2">
                          &emsp;<center><img src="images/hi2.png" ></center>
	                      <center><p class="h5">Book Your Outfit</p></center>
	                       <center><p>Select your delivery date<br/>
						              and duration .Outfit will be  <br/>
						              altered to your size and dry cleaned before delivery.<br/></p></center>
	                       
			    </div>
				<div class="col-sm-2">
                            &emsp;<center><a href="#"><i class="fa fa-truck fa-5x m-3" style="color:black;"></i></a></center>
	                        <center><p class="h5">Get free delivery</p></center>
	                        <center><p>Free Delivery.You get to own<br/>
							          
							           and enjoy the compliments.</p></center>
	                        
			    </div>
				<div class="col-sm-2">
                            &emsp;<center><img src="images/hi3.png"></center>
	                        <center><p class="h5">Flaunt It</p></center>
	                        <center><p>Flaunt your look with that perfect 
							           outfit chosen by you and enjoy the compliments</p></center>
	                        
			    </div>
	            
				<div class="col-sm-2">
                          &emsp;<center><img src="images/hi4.png"></center>
	                      <center><p class="h5">Return It</p></center>
	                      <center><p>Pack the outfit we'll pick it<br/>
						            up a day after your occassion<br/>
						             or the dates choosen by you.<br/></p></center>
	                     
			    </div>
				<div class="col-sm-1"></div>
	        </div>
			<!----CATEGORIES----->
			<div class="col-sm-12 text-center" style="color:black;font-size:30px;font-family:Cambria;background-color:#fafafa;">
			     <h3>Categories</h3>
			
			<div class="col-sm-12 text-center" style="color:black;font-size:16px;font-family:Cambria;background-color:#fafafa;">
               <p><b>Browse through our dreamy catalog and enrobe your wishes.</b></p>
			</div>
			<!------category1------->  
             <div class="row" style="color:black;font-size:25px;font-family:Cambria;background-color:#fafafa;">
                    <div class="col-sm-4 text-right m-5">
					    <a href="#" style="color:black;">Bridal Lehenga</a><br/><br/>
						<a href="#" style="color:black;">Designer Lehenga</a><br/><br/>
						<a href="#" style="color:black;">Gowns</a><br/><br/>
						<a href="#" style="color:black;">Indo Western Outfits</a><br/><br/>
						<a href="#" style="color:black;">Accessories</a><br/><br/>
						<a href="women.php"><button class="btn btn-secondary">Women</button></a>
                    </div>
                    <div class="col-sm-6 mt-5">
					     <img src="images/h2.jpg" style="height:500px;">
					</div>
             </div>
			 <!------category2------->  
             <div class="row mb-4" style="color:black;font-size:25px;font-family:Cambria;background-color:#fafafa;">
			     <div class="col-sm-1"></div>
			     <div class="col-sm-6 ml-5 mb-3"><img src="images/h3.jpg" class="img-fluid" alt="Responsive image"style="height:550px;"></div>
                    <div class="col-sm-3 text-left mt-5 ml-3">
					    <a href="sherwani.php" style="color:black;">Sherwani</a><br/><br/>
						<a href="sherwani.php" style="color:black;">Blazers</a><br/><br/>
						<a href="sherwani.php" style="color:black;">Suits</a><br/><br/>
						<a href="sherwani.php" style="color:black;">Accessories</a><br/><br/>
						<a href="men.php"><button class="btn btn-secondary">Men</button></a>
                    </div>
             </div>
			 </div>
			 <!------pics------->
			 <div class="row">
			     <div class="col-sm-6"><img src="images/h1.jpg" style="height:500px;"></div>
				 <div class="col-sm-6"><img src="images/h4.jpg" style="height:500px;"></div>
			 </div>
			 <!----------Trending------->
			 <div class="col-sm-12 text-center p-3"><br/>
				      <h1 style="color:black;font-size:30px;font-family:Cambria;">TRENDING</h1>
		     </div>
			 <div class="row" style="background-color:#fafafa;">
			      <div class="col-sm-1"></div>
				   <div class="col-sm-5 ml-2 t"><a href="#"><img src="images/h8.jpg" style="height:700px;align:right;"></a></div>
				   <div class="col-sm-5 t"><a href="#"><img src="images/h9.jpg" style="height:700px;"></a></div>
				  
				  
				  <div class="col-sm-2"></div>
				   <div class="col-sm-8 mt-3 banner t">
				   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				   <a class="btn btn-outline-secondary" href="women.php">Women</a>
				 <a class="btn btn-outline-secondary" href="men.php">Men</a></div>
				  <div class="col-sm-1"></div>
			 </div>
			 <div class="col-sm-12 text-center p-2">
				      <h1 style="color:black;font-size:30px;font-family:Cambria">Reach Our Store!</h1>
		     </div>
			 <div class="col-sm-12 text-center">
				      <h1 style="color:black;font-size:20px;font-family:Cambria;">For free trials and the best way to explore our outfits.</h1>
		     </div>
			 
			 <div class="row">
			   <div class="col-sm-2"></div>
			   <div class="col-sm-4 r2 r mr-5">
			         <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			         <h5 style="color:white;font-family:Cambria;">Delhi Stores</h5>
					 <a class="btn btn-danger" href="#">Visit Store</a>
	   		  </div>
			  <div class="col-sm-4 r3 r">
			          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			          <h5 style="color:white;font-family:Cambria;">Mumbai Stores</h5>
					 <a class="btn btn-danger" href="#">Visit Store</a>
			 </div>
			   <div class="col-sm-2"></div>
		       <div class="col-sm-4 r1 rm mr-5">
			        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
			        <h5 style="color:white;font-family:Cambria;">Pune Stores</h5>
					 <a class="btn btn-danger" href="#">Visit Store</a>
			   </div>
			   <div class="col-sm-4 r4 rm">
			         <br/><br/><br/><br/><br/><br/><br/><br/><br/>
			         <h5 style="color:white;font-family:Cambria;">Dehradun Stores</h5>
					 <a class="btn btn-danger" href="#">Visit Store</a>
			   </div>
			 </div>
		<!-------image-------->
		<!--------<div class="col-sm-12" style="width:100%;height:900px;background-image:url('image/m17.jpg');" alt="Responsive-image">
		   <cent><br/><br/><br/><br/><br/><br/><p style="color:indigo;font-family:MV Boli;font-size:80px;margin-left:420px;">Heavy on style </p>
		   <p style="color:indigo;font-family:MV Boli;font-size:80px;margin-left:480px;">Light On Pockets</p></center>
		</div>------->
        <!-------smartlooks-------> 
           <div class="col-sm-12 text-center mt-4" style="color:black;font-size:30px;font-family:Cambria;background-color:#fafafa;">
			     <h3>#Smartlooks</h3>
		   
		   <div class="col-sm-12 text-center" style="color:black;font-size:16px;font-family:Cambria;background-color:#fafafa;">
               <p><b>A chic montage of the very best, made by the very best.</b></p>
			   <div class="col-sm-11 ml-5"><a href="#"><image src="images/smart.jpg" style="width:100%;height:800px;margin-bottom:20px;"></a></div>
			   
		  </div></div>   
        <!-------About-------->
        <div class="row mt-3" style="background-color:#4d4b4c;color:#c6cbc4;font-family:Cambria;">
		 <h4 style="margin-left:150px;margin-top:80px;font-size:30px;">About Us</h4>
		 <p style="margin-left:150px;margin-right:130px;margin-top:20px;margin-bottom:70px;font-size:16px;">Rent An Attire offers premium fashion rental services at delightful prices.
		 Be it weddings, brunch parties, pre wedding shoots or themed fashion shows - rent your choice and say goodbye 
		 to month-long waiting for sales and discounts on your favourite brands. Our charming collections includes designer
		 outfits from premium brands and fashion giants like Sabyasachi, Ridhi Mehra, Sonam Parmar and Kora - all at a mere 
		 fragment of their respective market prices! We, at Rent An Attire, host a large variety of ethnic wear, western wear
		 and Indo-western designer outfits for both men and women. From Bridal lehengas to party wears, designer lehengas to 
		 gowns; and blazers to many other modish outfits, our collections cover your smallest AND your largest fashion demands
		 without burning a hole through your pockets. Over the years, our glamorous outfits have been rented out by the best 
		 Indian models for various fashion events, hence bringing more oomph to our brand. So if you wish to look your best 
		 on your next occasion and want to experience the suave taste of our fashion industry, then hop straight to Rent An 
		 Attire and we will do the rest!</p>
		</div>    		
		<!----------FOOTER--------------->
        <div class="row" style="background-color:#3d3b3b;">
		    <div class="col-sm-2"></div>
			<div class="col-sm-3 mt-5"><img src="images/l1.png" ></div>
			<div class="col-sm-3 mt-5"><img src="images/l2.png"></div>
			<div class="col-sm-3 mt-5"><img src="images/l3.png"></div>
			<div class="col-sm-1"></div>
		</div>	
        <!----------footer------->
        <div class="row pt-5" style="background-color:#3d3b3b;font-family:Cambria;">
		    <div class="col-sm-2"></div>
			<div class="col-sm-2 mt-2">
			  <h6 style="color:white;margin-left:25px;font-size:20px;">Help</h6><br/>
			  <ul type="square" style="color:#d8d3b7;">
			     <li><a>How it works?</a></li>
				 <li><a>FAQs</a></li>
				 <li><a>Contact Us</a></li>
			  </ul>
			</div>
			<div class="col-sm-2 mt-2">
			   <h6 style="color:white;margin-left:25px;font-size:20px;">Rent an Attire</h6><br/>
			  <ul type="square" style="color:#d8d3b7;">
			     <li><a>About us</a></li>
				 <li><a>Quality</a></li>
				 <li><a>Earn Through Us</a></li>
			  </ul>
			</div>
			
			<div class="col-sm-2 mt-2">
			    <h6 style="color:white;margin-left:25px;font-size:20px;">Our Policies</h6><br/>
			  <ul type="square" style="color:#d8d3b7;">
			     <li><a>Return Policies</a></li>
				 <li><a>Cancellation Policies</a></li>
				 <li><a>Terms Of Use</a></li>
			  </ul>
			</div>
			
			<div class="col-sm-4">
			   <h6 style="color:white;margin-left:25px;font-size:20px;">Subscribe</h6><br/>
			   <p style="color:#d8d3b7;margin-left:25px;">Don't miss out,get latest name from us.</p>
			   <input type="email" style="margin-left:25px;height:39px;" placeholder="    Your E-Mail Here!"/>
			   <a class="btn btn-secondary" href="#">Submit</a><br/><br/>
			    <h6 style="color:white;margin-left:25px;font-size:20px;">Contact Us</h6>
				
				          <a href="#"><i class="fa fa-facebook fa-1x f ml-4"></i></a>
                          <a href="#"><i class="fa fa-instagram fa-1x f" ></i></a>
						  <a href="#"><i class="fa fa-linkedin fa-1x f"></i></a>
						  <a href="#"><i class="fa fa-twitter fa-1x f"></i></a>
						  <a href="#"><i class="fa fa-pinterest fa-1x f"></i></a>
			</div>
		</div>
			 <!--copyright row--->
				<div class="row text-center p-5" style="color:#8d8c8c;background-color:#312f30;">
				     <div class="col-sm-12">
					     Copyright &copy; 2019 <a href="#" style="color:white;">rent an attire.com </a>All Rights Reserved.
					 </div>
				</div>
				
				<!---- registration---->
               <!-- Modal -->
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" name="abc.py">
                     <div class="modal-dialog" role="document">
					 <div class="modal-content" style="background-image:url(images/a3.jpg);background-size:cover;;">
					 <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Sign up here</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					 </div>
					 <div class="modal-body">
						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
						<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
                     <div class="testbox">
							  <h1 style="margin-left:60px;font-family:Cambria;">Registration</h1>
                              <form action="p1.php" method="POST" >
							  <label id="icon" for="name"><i class="fa fa-envelope "></i></label>
							  <input type="text" name="email" id="name" placeholder="Email" required/>
							  <label id="icon" for="name"><i class="fa fa-user"></i></label> 
							  <input type="text" name="name" id="name" placeholder="Name" required/>
							  <label id="icon" for="name"><i class="fa fa-shield"></i></label>
							  <input type="password" name="password" id="name" placeholder="Password" required/>
							  <div class="gender">
							  <input type="radio" value="male" id="male" name="gender" checked/>
							  <label for="male" class="radio" checked>Male</label>
							  <input type="radio" value="female" id="female" name="gender"/>
							  <label for="female" class="radio">Female</label>
							  </div> 
							  <button  class="btn btn-primary btn-block btn-lg"  type="submit" name="submit"><span>Submit</span></button></form>
							  <p style="font-size: 14px;">Already have an account?<a href="#" data-toggle="modal"  data-target="#exampleModal2">Login here!</a>.</p>
							  <p style="font-size: 14px;">By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
							  </div>
					  </div>
					  </div></div></div>
					  <!---login-->
					   <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					   <div class="modal-dialog" role="document" >
					   <div class="modal-content" >
					   <div class="modal-header">
					     <h5 class="modal-title" id="exampleModalLabel">Welcome!Login Here!</h5>
					     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					     <span aria-hidden="true">&times;</span>
					     </button>
					   </div>
					   <div class="modal-body" >
					   <div  class="page-wrapper" >
					   <div class="auth-bg" style="background-image:url(image/.jpg);">
					   <div  class="authentication-box">
					   <div  class="text-center"><img  alt="" src="http://www.cakecounter.com/img/swagatam.png"></div>
					   <div  class="card mt-4" >
					   <div  class="card-body" >
					   <div class="text-center">
								<h4>LOGIN</h4>
					   </div>
					   <!---->
					   <form class="theme-form ng-untouched ng-pristine ng-valid" action="p2.php" method="POST">
					   <div class="form-group"><label  class="col-form-label pt-0" name="user">Email</label><input  class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="email" required="" type="email"name="txt1">
					   <!----><!----></div>
					   <div class="form-group"><label  class="col-form-label" name="pwd">Password</label><input  class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="password" required="" type="password" name="txt2">
					   <!---->
					   </div>
					     <p>Forgot Password?<a href="changepassword.py">Click here<a></p>
						 <div  class="form-group form-row mt-3 mb-0"><button  class="btn btn-primary btn-block btn-lg" type="submit" name="submit"><span>Login</span></button></div><div class="social mt-3">
						 </div></form></div></div></div></div></div>
					   </div>
					   </div>
					   </div>
					   </div>
									
				
  </div>
  </body>
</html>
<?php

include_once 'k1.php';

?>
