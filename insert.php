<!DOCTYPE html> 
<html> 
  
 
  
<body> 
    <center> 
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
        $landmark =  $_REQUEST['landmark']; 
        $town = $_REQUEST['town']; 
      
          
        // Performing insert query execution 
        // here our table name is college 
        // $sql = "Update users Set username='$username',
        // town='$town',
        // mble_no='$mble_no',
        // full_name='$full_name'
        // where landmark='test' "; 
        $sql =  "INSERT INTO users (full_name, mble_no, landmark, town) VALUES ('$full_name','$mble_no','$landmark','$town')"; 
          
        if(mysqli_query($conn, $sql)){ 
           header("Location: index.php"); 
  
            
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