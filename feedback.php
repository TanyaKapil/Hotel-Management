<?php
 include "connection.php";
 include "index.php";
?>
<?
if($_POST['submit']!='')
{
	
	 $insert_feedback="insert into feedback(name,mno,email,date,ymsg) values('".$_POST['name']."','".$_POST['mno']."','".$_POST['email']."','".$_POST['date']."','".$_POST['ymsg']."')";
	$result_signup=mysql_query($insert_feedback); 
	?>
	<script>window.location="feedback.php?msg=succ";</script>
	<?
}
?>
<body bgcolor='#fff2e5'>
<script language="javascript">
function validate()
{

	if(signup.name.value=='')
	{
		alert("Please enter your name");
		signup.name.focus();
		return false;
	}
	if(signup.mno.value=='')
	{
		alert("Please enter your address");
		signup.mno.focus();
		return false;
	}
	if(signup.email.value=='')
	{
		alert("Please enter your email");
		signup.email.focus();
		return false;
	}
	if(signup.date.value=='')
	{
		alert("Please enter your city");
		signup.date.focus();
		return false;
	}

	if(signup.ymsg.value=='')
	{
		alert("Please enter your password");
		signup.ymsg.focus();
		return false;
	}
}
function checkemail(obj)
{
	var emailAddressEntered = obj.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) {
	
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.value = ""
		}
}
</script>
<table width="100%" bgcolor="#fff2e5">
  <tr>
    <td width="986" height="108" colspan="2"></td>
  </tr>
  <tr>
    <td width="84%">
<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#fff2e5">
	<form action="feedback.php" name="feedback" method="post" onSubmit="return validate()">
 <?
 if($_GET['msg']=='succ')
 {
 ?>
   <tr>
		<td colspan="2" class="errmsg">Your FeedBack process sucessfully added</td>
	</tr>
<? } ?>
  <tr>
    <td width="13%" class="generaltext">Your Name</td>
    <td width="87%"><input type="text" name="name"></td>
  </tr>
  <tr>
    <td class="generaltext">Mobile Number</td>
    <td><input type="text" name="mno"></td>
  </tr>
  <tr>
    <td class="generaltext">Email</td>
    <td><input type="text" name="email" onChange="checkemail(email)"></td>
  </tr>
  <tr>
    <td class="generaltext">Today Date</td>
    <td><input type="text" name="date"></td>
  </tr>

   <tr>
    <td class="generaltext">Type Yuor Message</td>
    <td><textarea name="ymsg" cols="20" rows="3"></textarea></td>
  </tr>
  <tr>
  	<td>
		<input type="submit" name="submit" value="Add">
	</td>
  </tr>
 </form> 
</table>
</td>
</tr>
</table>





<marquee behavior=alternate bgcolor="#7e0000"><b><i><a href=contectus.php><font color="white">Devloped By :- Tanya kapil </a></i></b></font></marquee>
