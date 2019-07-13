<?php
 session_start();
    $servername = "bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbname = "xdvjkpkp986nwt21";
    $username = "zx0hce4ovc2os4cs";
    $password = "x2den1myinx55q73";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

$query = sprintf("SELECT datetim, demand,total_energy(GJ)  FROM score ORDER BY playerid");

       $result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}
$result->close();

mysqli_close($this->conn);  
?>
