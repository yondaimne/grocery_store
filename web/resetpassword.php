<?php

 include('header.html');
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
            <h3>Reset Password</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                    <!-- <div class="tooltip">Click Me</div> -->
                  </div>
                  
                  <div class="form">
                    <h2>Enter your new password</h2>
                    <form action="resetpassword.php" method="post">
                      <input type="password" name="mypassword" placeholder="password" required=" ">
                      <input type="email" name="email" placeholder="email" required=" ">
                       
                      
                      <input type="submit" value="submit" name="submit">
                  
                    <p style="    text-align: -webkit-center;
    padding-top: 5%;">
                    <?php
                    if (isset($_POST["submit"])){
                     $conn = mysqli_connect("localhost", "root", "", "groceries"); 
          
        // Check connection 
       
          
        // Taking all 5 values from the form data(input) 
        $mypassword =  $_REQUEST['mypassword']; 
        $email = $_REQUEST['email'];
        
      
          
        // Performing insert query execution 
        // here our table name is college 
        // $sql = "Update users Set username='$username',
        // town='$town',
        // mble_no='$mble_no',
        // full_name='$full_name'
        // where landmark='test' ";
        $sql =  "Update users 
        Set password = '$mypassword'
        where email = '$email'";  
        echo "password updated";
    }
    else {
        
    }
        ?>
    </p>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>

                    <?php

include('footer.html');
?>