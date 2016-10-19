
function validateForm() {

    var x = document.getElementById("us").value;
	var y = document.getElementById("ps").value;
	var z = document.getElementById("rps").value;
    

    if (x == null || x == "")
	{
		alert("user-name must be filled out");
		return false;
	}
	else if( y!=z )
	{ 
		alert("password did not match");
		return false;
	}
	else
	{
		return true;
	}
	
    
}
