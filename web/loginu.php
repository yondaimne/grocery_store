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
          
  
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
    $stmt = "SELECT * FROM users";
    $query = mysqli_query($conn,$stmt);
           
        $row = mysqli_num_rows($query);
        if($row ==! 1){
            echo "<script language='javascript'>";
            echo "alert('Invalid login please try again.')";
            echo "</script>";
        }
        else {
            echo "login successful";
            $_SESSION['username'] = $username;
            header("Location: index90.php"); 
            
            die();
        }
   
}
?>
