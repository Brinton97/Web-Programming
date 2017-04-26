
<?php

include "connect.php";


$result = $con->query("SELECT * FROM form");
if ($result->num_rows != 0) {
    // output data of each row
	$i=0;
    while($rows = $result->fetch_assoc()) {
      $sn = $rows['surname'];
	  $mn = $rows['middlename'];
	  $fn = $rows['firstname'];
	  
	  echo "<p> Name is: $fn <br> $mn <br> $sn </p>";
    }
} else {
    echo "0 results";
}

?>