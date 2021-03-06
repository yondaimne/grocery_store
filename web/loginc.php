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
          
        // Taking all 5 values from the form data(input) 
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $mble_no = $_REQUEST['mble_no']; 



        if($username=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($password=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
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
            header("Location: login.php"); 

                 
        } 
        else{
        $sql =  "INSERT INTO users (username, email, mble_no) VALUES ('$username','$email','$mble_no')";
        if(mysqli_query($conn,$sql))  
    {  
        echo"<script>window.open('index90.php','_self')</script>";  
    }  
}
          
        // Close connection 
        mysqli_close($conn); 
        ?>         
