
<?php
include 'db.php';

				
					 
// session_start();

// if(isset($_POST['login']))
// {
//     extract($_POST);
//     include 'db.php';
//     $sql=mysqli_query($db,"SELECT * FROM users where username='$username' and password='$password'");
//     $row  = mysqli_fetch_array($sql);
//     if(is_array($row))
//     {
        
//         $_SESSION["email"]=$row['email'];
//         $_SESSION["username"]=$row['username'];
//         $_SESSION["Last_Name"]=$row['Last_Name']; 
//         header("Location: index90.php"); 
//     }
//     else
//     {
//         echo "Invalid Email ID/Password";
//     }
// }


include('header.php');
?>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.html">Branded Foods</a></li>
						<li><a href="household.html">Households</a></li>
						<li><a href="kitchen.html">Kitchen</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.html">Soft Drinks</a></li>
										<li><a href="drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.html">Frozen Snacks</a></li>
										<li><a href="frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
					
						<li><a href="bread.html">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="loginu.php" method="post">
					  <input type="text" name="username" id="username" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" value="Login" name="login" id="login">
					 
		 
					</form>

					
				<!-- <p>Please fill in your credentials to login.</p> -->
       

				  </div>
				  <div class="form">
				  	 <h2>Create an account</h2>
					<form action="login.php" method="post">
					  <input type="text" name="username" id="username" placeholder="Username" required=" ">
                    
                        <input type="email" name="email" id="email" placeholder="Email Address" required=" ">
					  <input type="password" name="password" id="password" placeholder="Password" required=" ">
					  
					  <input type="text" name="mble_no" id="mble_no" placeholder="Phone Number" required=" ">
					  <input type="submit" name="register" value="Register">
					</form>

				 </div>
				 <?php 
  
        // servername => localhost 
        // username => root 
        // password => empty 
        // database name => staff 
        $conn = mysqli_connect("localhost", "root", "", "groceries"); 
          
        // Check connection 
        if($conn === false){ 
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
        } 
        
        if (isset($_POST["register"])){  
        // Taking all 5 values from the form data(input) 
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $mble_no = $_REQUEST['mble_no']; 

 
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE email='$email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
      
      
          
        // Performing insert query execution 
        // here our table name is college 
        // $sql = "Update users Set username='$username',
        // town='$town',
        // mble_no='$mble_no',
        // full_name='$full_name'
        // where landmark='test' "; 
        // $sql =  "INSERT INTO users (username, email, mble_no) VALUES ('$username','$email','$mble_no')"; 
          
        // if(mysqli_query($conn, $sql)){ 
        //    header("Location: login.php"); 
  
            
        // } else{ 
            echo "<script language='javascript'>";
            echo "alert('email address already in use.')";
            echo "</script>";
            

                 
        } 
        else{
        $sql =  "INSERT INTO users (username, email, mble_no) VALUES ('$username','$email','$mble_no')";
        if(mysqli_query($conn,$sql))  
    {  
        echo"<script>window.open('index90.php','_self')</script>";  
    }  
}
}
          
        // Close connection 
        
        ?>  
				  <div class="cta"><a href="forgotpassword.php">Forgot your password?</a></div>
				</div>
			</div>
			
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php

include('footer.html');
?>