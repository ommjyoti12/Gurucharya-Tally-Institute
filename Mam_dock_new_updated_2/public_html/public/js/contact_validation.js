function numbersonly(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode
	//alert(unicode);
	if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
		if ((unicode<48 || unicode>57) && unicode!=9) //if not a number  
		return false //disable key press    
	}
}

// Validation for contact us
function validatecontactus()
{   
	var error = 0;
	if(document.frm_contact.contact_fname.value === '')
	{	
		error += 1;
		$("#contact_fname").css("border", "1px solid red");
		$('#contact_fname').val('');
		$("#contact_fname").attr("placeholder", "First Name should not be blank!");
	}
	else
	{
		$("#contact_fname").css("border", "1px solid green");
	}
	if(document.frm_contact.contact_lname.value == "")
	{	
		error += 1;
		$("#contact_lname").css("border", "1px solid red");
		$('#contact_lname').val('');
		$("#contact_lname").attr("placeholder", "Last Name should not be blank!");
	}
	else
	{
		$("#contact_lname").css("border", "1px solid green");
	}
	if(document.frm_contact.contact_mail.value=="")
	{ 
		error += 1;
		$("#contact_mail").css("border", "1px solid red");
		$('#contact_mail').val('');
		$("#contact_mail").attr("placeholder", "Email I'd should not be blank!");
	}
	else
	{
		if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.frm_contact.contact_mail.value))
		{
			$("#contact_mail").css("border", "1px solid green");
		}
		else
		{
			$("#contact_mail").css("border", "1px solid red");
			$('#contact_mail').val('');
			$("#contact_mail").attr("placeholder", "Email I'd should be a valid one!");
			error += 1;
		}
	}
	if(document.frm_contact.contact_phno.value=="")
	{
		error += 1;
		$("#contact_phno").css("border", "1px solid red");
		$('#contact_phno').val('');
		$("#contact_phno").attr("placeholder", "Phone No should not be blank!");
	}
	else
	{
		if(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(document.frm_contact.contact_phno.value))
		{
			$("#contact_phno").css("border", "1px solid green");
		}
		else
		{
			$("#contact_phno").css("border", "1px solid red");
			$('#contact_phno').val('');
			$("#contact_phno").attr("placeholder", "Phone No should be a valid one!");
			error += 1;
		}
	}
	if(document.frm_contact.contact_msg.value=="")
	{
		error += 1;
		$("#contact_msg").css("border", "1px solid red");
		$('#contact_msg').val('');
		$("#contact_msg").attr("placeholder", "Message should not be blank!");
	}
	else
	{
		$("#contact_msg").css("border", "1px solid green");
	}
	if(error >0)
	{
	return false;
	}
}
