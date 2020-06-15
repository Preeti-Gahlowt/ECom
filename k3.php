
<html>
	<head></head>
		<body>
			<form action="p1.php" method="POST" >
							 
							  <input type="text" name="email" id="name" placeholder="Email" >
							  
							  <input type="text" name="name" id="name" placeholder="Name" >
							  
							  <input type="password" name="password" id="name" placeholder="Password" >
							  <div class="gender">
							  <input type="radio" value="Male" id="male" name="gender">
							  <label for="male" class="radio" >Male</label>
							  <input type="radio" value="Female" id="female" name="gender"/>
							  <label for="female" class="radio">Female</label>
						
							  <button   type="submit" name="submit"><span>Submit</span></button>
			</form>
			
			
			<!---login-->
					   
								<h4>LOGIN</h4>
					   
					   <form  action="p2.php" method="POST">
					<input   type="email" name="txt1">email
					   
					   <input   type="password" name="txt2">passs
					   
					     <p>Forgot Password?<a href="changepassword.py">Click here<a></p>
						<button  type="submit" name="submit">Login</button>
						 </form>
						  
					   <form  action="p3.php" method="post">
					
					     <p>Forgot Password?<a href="changepassword.py">Click here<a></p>
						<button  type="submit" name="outsubmit">Logout</button>
						 </form>
						 
			
		</body>
</html>