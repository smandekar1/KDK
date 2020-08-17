// JavaScript Document
function TrimString(sInString)
{
  sInString = sInString.replace(/^\s+/g, "" );// strip leading
  return sInString.replace( /\s+$/g, "" );// strip trailing
}

function CheckBlank(txtElement,fieldName)
{
	if (TrimString(txtElement.value) == "") 
	{
		alert ("Please Enter Your " + fieldName);
		txtElement.focus();
		return false;
	}
	return true;
}
function CheckBlank1(txtElement,fieldName)
{
	if (TrimString(txtElement.value) == "") 
	{
		alert ("Please Answer the " + fieldName);
		txtElement.focus();
		return false;
	}
	return true;
}

function checkEmail(txtElement,fieldName,allowEmpty)
{
	var exclude=/[^@\-\.\w\_]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	var strEmail = txtElement.value
	var email_array=strEmail.split(",");
	
	if(allowEmpty == false && txtElement.value.length == 0)
	{
		alert("Please enter '" + fieldName + "'");
		txtElement.focus()
		return false;
	}

	if(allowEmpty == true && txtElement.value.length == 0)
	{
		//empty value is allowed
		return true;
	}
	else 
	{
		var email_num=0;
		var checkEmail;
		while (email_num < email_array.length)
		{
				var trimemail = TrimString(email_array[email_num]);
				//alert("email=" + hello);
				//alert("email=" + email_array[email_num]);
				if(((trimemail.search(exclude) != -1) || 
					(trimemail.search(check)) == -1)   ||	
					(trimemail.search(checkend) == -1))
				{
					checkEmail = "false";
				}
				else
				{
					checkEmail = "true";
				}
				//alert(email_array[email_num]);
				email_num++;
				if(checkEmail == "false")
				{
					alert("Incorrect email address!");
					txtElement.focus()
					return false;
				}
				else 	
					return true;				
		}		
	}
}

function ValidateInput()
{
    if (!CheckBlank(document.theForm.T1,'Name')) return false;
	if (!CheckBlank(document.theForm.T4,'Email Address'))return false;	
	if(!checkEmail(document.theForm.T4,'Email',false))return false;
    if (!CheckBlank1(document.theForm.T6,'Question'))return false;
	 else { 	
		return true;
	}
	
}