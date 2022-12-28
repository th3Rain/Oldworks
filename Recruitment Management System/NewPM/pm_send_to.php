<?php
include'connect_i.php';
//logedin person info
$sql="select id,username from `account` where username='".$_SESSION['username']."'";
//$result1 = mysqli_query($connection, $query) ;
$query=mysqli_query($connection, $sql) or die(mysqli_error($connection));
while($row=mysqli_fetch_array($query)){
$pid=$row['id'];
$username=$row['username'];

}
mysqli_free_result($query);
//to send message to particular user because threre is no $_SESSION['username']
$to_userid=$_POST['to_userid'];
$sqlCommand="select id,username from `account` where id='$to_userid' limit 1";
$query=mysqli_query($connection, $sqlCommand) or die(mysqli_error($connection));
while($row=mysqli_fetch_assoc($query)){
$TOid=$row['id'];
$TOuser=$row['username'];
}

mysqli_free_result($query);
?>
<table width="800" border="0">
<tr>
<td></td>

</tr>
</table>
<table width="800" border="0">
<tr>
<td><?php require_once"pm_check.php";?></td>
</tr>
</table>


<table width="800" border="0">
<form action="pm_send_to.php" method="post">
<tr>
<td width="185">SENDING TO:</td>
<td width="605"><input name="to_username" type="text" id="to_username" readonly="readonly" value="<?php  print $TOuser ?>" size="140" style="border: hidden"/>
</td>
</tr>
<tr>
<td width="185">Title:</td>
<td width="605"><input name="title"  type="text" id="title" size="40"/></td>
</tr>


<tr>
<td width="185">Message:</td>
<td width="605"><textarea name="message"  cols="20" rows="10"></textarea></td></tr>


<tr>
<td colspan="2" align="center"><input type="submit" name="submit" id="submit"  value="<?php  print $TOuser;   ?>"/>
<input name="to_userid" type="hidden" id="to_userid" value="<?php print $TOid;?>"/>
<input name="userid" type="hidden" id="userid" value="<?php print $pid ;?>"/>
<input name="from_username" type="hidden" id="from_username" value="<?php print $username;?>"/> 
<input name="senddate" type="hidden" id="sender" value="<?php echo date("l,jS F Y,g:i:s:a"); ?>"/></td>
</tr>

<?php
require_once"connect_i.php";
if($_POST['submit']){
$to_username=$_POST['to_username'];
$title=$_POST['title'];
$message=$_POST['message'];
$to_userid=$_POST['to_userid'];
$userid=$_POST['userid'];
$from_username=$_POST['from_username'];
$senddate=$_POST['senddate'];

//special character fix
//this function allows user to send message characters like ?,/,#,$,%,& etc.if this function from 78line to 86 not used then user cannot send
//such  caracters.
function filterFunction($var){
$var=nl2br(htmlspecialchars($var));
$var=eregi_replace("'","&#39;",($var));

$var=eregi_replace("'","$#39;",($var));
return $var;
}

$message=filterFunction($message);// this $message from line number 70

require_once"connect_i.php";

$query=mysqli_query($connection, "insert into pm_outbox(userid,username,to_userid,to_username,title,content,senddate)values('$userid','$from_username','$to_userid','$to_username','$title','$message','$senddate')");


$query=mysql_query($connection, "insert into pm_imbox(userid,username,from_id,from_username,title,content,recieve_date)values('$to_userid','to_username','$userid','$from_username','$title','$message','$senddate')");

  echo "<meta http-equiv=\"refresh\"content=\"0;URL=pm_outbox.php\">";
  exit();
}

?>