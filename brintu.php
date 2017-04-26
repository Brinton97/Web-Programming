<html>
<head>
<link rel="stylesheet" type="text/css" href="b.css">
<script src="b.js">
</script>
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.11.131#p=hgstxhts545050a7e680_rb250a262ju3xj2ju3xjx";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>
<title></title>
<body>

<form name="myForm" onsubmit="return validateForm()" action="brintu.php" method="post">
<fieldset>
<legend> PERSONAL INFORMATION </legend>
<table align="center" border="0" cellpadding="10%">
<tr>
<td>SURNAME</td>
<td>:</td>
<td><input type="text" name="surname" maxlength="10"></td>
</tr>

<tr>
<td>FIRST NAME</td>
<td>:</td>
<td><input type="text" name="firstname" maxlength="10"></td>
</tr>
<tr>
<td>MIDDLE NAME</td>
<td>:</td>
<td><input type="text" name="middlename" maxlength="10"></td>
</tr>

<tr>
<td>GENDER</td>
<td>:</td>
<td><input type="radio" name="gender"> MALE 
<input type="radio" name="gender"> FEMALE</td>
</tr>

<tr>
<td>DATE OF BIRTH</td>
<td>:</td>
<td><input type="date" name="DOB"></td>
</tr>

<tr>
<td>CONTACT_NUMBER</td>
<td>:</td>
<td><input type="number" name="CONTACT_NUMBER" maxlength="10"></td>
</tr>

<tr>
<td>DESIGNATION</td>
<td>:</td> 
<td><select name="des" id="des">
<option value="SELECT"> SELECT</option>
<option value="TEACHING ASSISTANT"> TEACHING ASSISTANT </option>
<option value="ASSISTANT PROFFESOR"> ASSISTANT PROFFESOR </option>
<option value="ASSOCIATE PROFESSOR"> ASSOCIATE PROFFESOR</option>
<option value="PROFFESOR"> PROFESSOR </option>
</select></td>
</tr>

<tr>
<td>DEPARTMENT</td>
<td>:</td>
<td><select name="dep" id="dep">
<option value="SELECT">SELECT</option>
<option value="IT">IT</option>
<option value="EXTC">EXTC</option>
<option value="MECH">MECH</option>
<option value="COMPS">COMPS</option>
</select></td>
</tr>

</table>
<hr>

<legend> QUALIFICATION </legend>
<table align="center" border="0" cellpadding="10%">
<tr>
<td>SPECIALIZATION</td>
<td>:</td>
<td><input type="text" name="SPECIALIZATION"></td>
</tr>

<tr>
<td>YEAR OF COMPLETION</td>
<td>:</td>
<td><input type="number" name="YEAR_OF_COMPLETION"></td>
</tr>

<tr>
<td>DEGREE</td>
<td>:</td>
<td><input type="text" name="DEGREE"></td>
</tr>


<tr> 
<td>UNIVERSITY</td>
<td>:</td>
<td><input type="text" name="UNIVERSITY"></td>
</tr>

</table>

<hr>
<legend> INDUSTRY EXPERIENCE </legend>
<table align="center" border="0" cellpadding="10%">
<tr>
<td>COMPANY NAME</td>
<td>:</td>
<td><input type="text" name="COMPANY_NAME"></td>
</tr>

<tr>
<td>YEAR</td>
<td>:</td>
<td><input type="number" name="YEAR"></td>
</tr>

<tr>
<td>DATE FROM</td>
<td>:</td>
<td><input type="date" name="DATE_FROM"></td>
</tr>

<tr>
<td>DATE TO</td>
<td>:</td>
<td><input type="date" name="DATE_TO"></td>
</tr>


</table>
<hr>

<legend> PROJECTS UNDERTAKEN </legend>
<table align="center" border="0" cellpadding="10%">

<tr>
<td>PROJECT TITLE</td>
<td>:</td>
<td><input type="text" name="PROJECT_TITLE"></td>
</tr>

<tr>
<td>AREA/SPECIALIZATION</td><td>:</td>
<td><input type="text" name="area"></td>
</tr>

</table>

<hr>

<legend>PAPERS PUBLISHED</legend>
<table align="center" border="0" cellpadding="10%">

<tr>
<td>TITLE OF PAPER</td>
<td>:</td>
<td><input type="text" name="title"></td>
</tr>

<tr>
<td>JOURNAL/CONFERENCE</td>
<td>:</td>
<td><input type="text" name="journal"></td>
</tr>

<tr>
<td>PUBLISHED_YEAR</td>
<td>:</td>
<td><input type="number" name="pub_year"></td>
</tr>

</fieldset>
</table>
<hr>
<tr>
<td> 
<center><input type="submit" name="sub" value="SUBMIT">

<button type="reset" onclick="alert('Are you sure you want to reset?')"> RESET </center> </button>
</td>
</tr>
</form>

</body>
</html>
<?php
if(isset($_POST['sub']))
{
$sn=$_POST["surname"];
$fn=$_POST["firstname"];
$mn=$_POST["middlename"];

$g=$_POST["gender"];
$d=$_POST["DOB"];
$cn=$_POST["CONTACT_NUMBER"];


$ds=$_POST["des"];
$dp=$_POST["dep"];
$s=$_POST["SPECIALIZATION"];
$yc=$_POST["YEAR_OF_COMPLETION"];

$dg=$_POST["DEGREE"];
$u=$_POST["UNIVERSITY"];
$cmn=$_POST["COMPANY_NAME"];


$y=$_POST["YEAR"];
$df=$_POST["DATE_FROM"];
$dt=$_POST["DATE_TO"];
$pt=$_POST["PROJECT_TITLE"];

$a=$_POST["area"];
$t=$_POST["title"];
$j=$_POST["journal"];
$py=$_POST["pub_year"];



include "connect.php";

$sql = "INSERT INTO form VALUES('$sn','$fn','$mn','$g','$d','$cn','$ds','$dp','$s','$yc','$dg','$u','$cmn','$y','$df','$dt','$pt','$a','$t','$j','$py')";
$result = mysqli_query($con,$sql);
include "display.php";
		echo "<h2><font color=green>Member successfully added</font></h2>";

}
?>	