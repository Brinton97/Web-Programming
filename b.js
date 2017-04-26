function validateForm() {
 	var x= document.myForm.firstname.value;
 	
       	if(x=="")
		{
     			alert("Name must be filled out");
        		return false;
    		}










	var y = document.myForm.middlename.value;
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
	 var z = document.myForm.surname.value;
    if (z == "") {
        alert("Name must be filled out");
        return false;
    }
	if((document.myForm.gender[0].checked==false)&&(document.myForm.gender[1].checked==false))
 	{
  		alert("Please select a gender.");
  		return false;
 	}
	if(document.myForm.DOB.value=="")
	{
	alert("Please Enter your Date Of Birth");
	return false;
	}
	if(document.myForm.CONTACT_NUMBER.value=="")
	{
	alert("Please Enter your CONTACT_NUMBER");
	return false;
	}
	 else if(isNaN(document.myForm.CONTACT_NUMBER.value))
	{
	alert("Contact number should contain only digits.");

	  document.myForm.CONTACT_NUMBER.value="";
	  return false;

	 }

	 else if(document.myForm.CONTACT_NUMBER.value.length!=10)
	{

	  alert("Contact number should contain only 10 digits.(Mobile number)");

	  document.myForm.CONTACT_NUMBER.value="";
	  return false;

	 }
	 if(document.myForm.des.value=="SELECT")
	{
	alert("Please select your DESIGNATION");
	return false;
	}
	 if(document.myForm.dep.value=="SELECT")
	{
	alert("Please select your DEPARTMENT");
	return false;
	}
	if(document.myForm.SPECIALIZATION.value=="")
	{
	alert("Please Enter your SPECIALIZATION");
	return false;
	}
	if(document.myForm.YEAR_OF_COMPLETION.value=="")
	{
	alert("Please Enter your year of completion");
	return false;
	}
	 else if(document.myForm.YEAR_OF_COMPLETION.value.length!=4)
	{

	  alert("Enter a valid year");

	  document.myForm.YEAR_OF_COMPLETION.value="";
	  return false;

	 }
	if(document.myForm.DEGREE.value=="")
	{
	alert("Please mention your degree");
	return false;
	}
	if(document.myForm.UNIVERSITY.value=="")
	{
	alert("Please Enter your UNIVERSITY");
	return false;
	}

	
	if(document.myForm.COMPANY_NAME.value=="")
	{
	alert("Please Enter your COMPANY_NAME");
	return false;
	}
	if(document.myForm.YEAR.value=="")
	{
	alert("Please Enter your YEAR");
	return false;
	}
	else if(document.myForm.YEAR.value.length!=4)
	{

	  alert("Enter a valid year");

	  document.myForm.YEAR.value="";
	  return false;

	 }
	if(document.myForm.DATE_FROM.value=="")
	{
	alert("Please Enter industry experience year FROM");
	return false;
	}
	if(document.myForm.DATE_TO.value=="")
	{
	alert("Please Enter industry experience year TO");
	return false;
	}
	if(document.myForm.PROJECT_TITLE.value=="")
	{
	alert("Please Enter your PROJECT_TITLE");
	return false;
	}
	if(document.myForm.area.value=="")
	{
	alert("Please Enter your AREA/SPECIALIZATION");
	return false;
	}
	if(document.myForm.title.value=="")
	{
	alert("Please Enter your TITLE_OF_PAPER");
	return false;
	}
	if(document.myForm.journal.value=="")
	{
	alert("Please Enter your JOURNAL/CONFERENCE");
	return false;
	}
	if(document.myForm.year.value=="")
	{
	alert("Please Enter your YEAR");
	return false;
	}
	else if(document.myForm.year.value.length!=4)
	{

	  alert("Enter a valid year");

	  document.myForm.year.value="";
	  return false;

	 }
	
	
		
	
}
