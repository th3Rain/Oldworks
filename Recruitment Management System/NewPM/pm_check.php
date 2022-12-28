<style>
ul.pm {
    list-style-type: none;
    margin: 0;
    padding: 20px;
    overflow: hidden;
    background-color: #4CAF50;
}
.active {
    background-color: #4CAF50;
}
    
li.pm {
    float: left;
    border-right:1px solid #bbb;
}

li.pm:last-child {
    border-right: none;
}

li.pm a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.pm a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>

<?php

require_once"connect_i.php";
$sql="select id,username from account where username='".$_SESSION['username']."'";
$query=mysqli_query($connection, $sql);
while($row=mysqli_fetch_array($query)){
$pid=$row['id'];
$username=$row['username'];
}

// check for New Message

$sqlCommand="select count(id) as numbers from pm_imbox where userid='$pid' and viewed='0'" ;
$query=mysqli_query($connection, $sqlCommand);
$result=mysqli_fetch_assoc($query);

$inboxMessagesNew=$result['numbers'];

//check for all Message in the in box;

$sqlCommand="select count(id) as numbers from pm_imbox where userid='$pid'" ;
$query=mysqli_query($connection, $sqlCommand);
$result=mysqli_fetch_assoc($query);

$inboxMessagesTotal=$result['numbers'];

//outbox message
$sqlCommand="select count(id) as numbers from pm_outbox where userid='$pid'" ;
$query=mysqli_query($connection, $sqlCommand);
$result=mysqli_fetch_assoc($query);

$outboxMessages=$result['numbers'];

?>


<?php // if ($_SESSION['username']){?>
<div>
    <ul class ="pm">
<li class ="pm"><a href="pm_inbox.php">Inbox
<?php if($inboxMessagesNew>0)
{   echo "<b><font color='red'>(".$inboxMessagesNew.")</font></b>";}?>
 <?php echo $inboxMessagesTotal;?></a></li>&nbsp; &nbsp; &nbsp; 
 <li class ="pm"><a href="pm_outbox.php">Outbox<?php echo " ". $outboxMessages;?></a></li>
 <li class ="pm"><a href="pm_send.php">Send New Message</a></li>
    </ul>
</div><br><br>