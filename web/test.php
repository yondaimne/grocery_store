<?php
include 'db.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT id, name FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " <img src=images\$row[image]> <br>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
