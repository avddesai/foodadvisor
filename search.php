 <?php
 echo "0";
  $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "joinus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
  echo "1";
      echo "2";
      $search = $_POST['search'];
      echo $search;
      $query = "SELECT * FROM `url` WHERE page= '".$search."'";
      //$query = "SELECT * FROM url WHERE page = 'malad'";
      //echo $query;
      $result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0)
{ echo "taps"; 
while($row = mysqli_fetch_array($result)){ 
 header("Location:".$row['location'].""); 
exit();
      }
    }
  ?>