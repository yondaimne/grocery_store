<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Insert Page page</title> 
</head> 
  
<body>  
    <center> 
                                        <?php 
    
    if(isset($_POST['email_delivery'])){

 $connection= new mysqli("localhost", "root","", "groceries");
 $email = $connection->real_escape_string($_POST["email"]);
 
 $data = $connection->query("SELECT email FROM users WHERE email='$email'");
 
 if(mail($_POST['email'], $_POST['subject'], $_POST['message'])){
            echo "mail sent";
        }
        else
        {
            echo "failed";
        }
 
 
 }
        
    ?>
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
        $full_name =  $_REQUEST['full_name']; 
        $mble_no = $_REQUEST['mble_no']; 
        $email = $_REQUEST['email'];
        $landmark =  $_REQUEST['landmark']; 
        $town = $_REQUEST['town']; 
      
          
        // Performing insert query execution 
        // here our table name is college 

        $sql = "Update users Set full_name='$full_name',
        mble_no='$mble_no',
        landmark='$landmark',
        town='$town'
        where email='$email' ";
        // $sql =  "INSERT INTO users (full_name, mble_no, landmark, town) VALUES ('$full_name','$mble_no','$landmark','$town')";  
         
        if(mysqli_query($conn, $sql)){ 
                 

           header("Location: payment.html"); 
  
            
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
    
          
        // Close connection 
        mysqli_close($conn); 
        ?> 

        
        
    </center> 
</body> 
  
</html> 