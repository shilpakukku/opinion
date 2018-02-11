<script type="text/javascript">
	function getXMLHttp()
	{
		var xmlHttp
		
		try
		{
			xmlHttp=new XMLHttpRequest();
		}
		catch(e)
		{
			try
			{
				xmlHttp=new ActiveXObject("Masxml2.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e)
				{
					alert("your browser doesnot support AJAX!");
					return false;
				}
			}
		}
		return xmlHttp;
		
	}
function getPassword(str) {
    if (str == "") {
        document.getElementById("result").innerHTML = "";
        return;
		// document.getElementById("subject").innerHTML = "";
        //return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
           var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
           var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("result").innerHTML = xmlhttp.responseText;
				if(document.getElementById("p").value=="False")
					{
				document.getElementById("btn").disabled=true;
            }
			}
        }
        xmlhttp.open("GET","getpassword.php?q="+str,true);
        xmlhttp.send();
		
		     }
}

</script>




<form name="change" method="post" action="post_changepassword.php">
	<table border="1">
<tr><td>Current Password</td><td><input type="password" name="c_pass" onChange="getPassword(this.value)"><div id="result"></div></td></tr>
		<tr><td>New Password</td><td><input type="password" name="password" required</td></tr>
		<tr><td>Confirm Password</td><td><input type="password" name="c_password" required</td></tr>
<tr><td><input type="submit" value="Update Password" id="btn"></td></tr>		
	</table>
</form>


