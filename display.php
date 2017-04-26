
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
	  $g = $rows['gender'];
	  $d = $rows['DOB'];
	  $cn = $rows['CONTACT_NUMBER'];
	  $ds = $rows['des'];
	  $dp = $rows['dep'];
	  $s = $rows['SPECIALIZATION'];
	  $yc = $rows['YEAR_OF_COMPLETION'];
	  $dg = $rows['DEGREE'];
	  $u = $rows['UNIVERSITY'];
	  $cmn = $rows['COMPANY_NAME'];
	  $y = $rows['YEAR'];
	  $df = $rows['DATE_FROM'];
	  $dt = $rows['DATE_TO'];
	  $pt = $rows['PROJECT_TITLE'];
	  $a = $rows['area'];
	  $t= $rows['title'];
	  $j = $rows['journal'];
	  $py = $rows['pub_year'];
	  
	  echo "<p align='center'> First Name is: $fn <br> 
	            Middle Name is: $mn <br> 
				Surname is:  $sn <br>
				Gender is: $g <br>
				DOB is: $d <br>
				Contact number is: $cn <br>
				Designation: $ds <br>
				Department: $dp <br>
				SPECIALIZATION:	$s <br>
				YEAR_OF_COMPLETION: $yc <br>
				Degree: $dg <br>
				University: $u <br>
				COMPANY_NAME: $cmn <br>
				Year: $y <br>
				Date From: $df <br>
				Date To: $dt <br>
				Project title: $pt <br>
				Area is: $a <br>
				Title: $t <br>
				Journal: $j <br> 
				Published Year: $py <br>
				</p>";
    }
} else {
    echo "0 results";
}

?>