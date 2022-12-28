<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>R.M.S  solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="accept-language" content="en-GB">

   <link rel="shortcut icon" href="../favicon.png">
    
   <link href="../bundles/css_002.css" rel="stylesheet">

    <script src="../bundles/modernizr.txt"></script>



    <link href="../bundles/css.css" rel="stylesheet" type="text/css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="/js/html5shim.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
      <script src="/js/json2.js"></script>
    <![endif]-->
    

    <link href="../bundles/bootstrap-fileupload.css" rel="stylesheet">





    <!--Scripts -->
    <script src="../bundles/jquery.txt"></script>

    <script src="../bundles/jqueryval.txt"></script>

    <script src="../bundles/bootstrap.txt"></script>


    <script type="text/javascript">

        $(function () {


            resizeWindow();
            $(window).resize(resizeWindow);



        });



        function resizeWindow() {

            var winHeight = $(document).height();

            var otherHeight = 275;


            // $('#myContainer').height(winHeight - otherHeight);
            $('#content').css("min-height", (winHeight - otherHeight));
        }


    </script>

    

    <script src="../bundles/jquery.js"></script>
    <script src="../bundles/bootstrap-fileupload.js"></script>


    <script type="text/javascript">

        $(function () {
            $("abbr.timeago").timeago();


            $('#addSecondaryModal').on('hidden', function () {
                $(this).data('modal', null);
            });


        });



    </script>




<?php
include'connect_i.php';

require_once'pm_check.php';
 
if($_SESSION['username']){


$sql="SELECT * FROM  pm_imbox WHERE userid='$pid' ORDER by id DESC";

$result=mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);


?>



    
<div style="margin-top: 20px; margin-bottom: 50px;" id="itemsList">
	<div style="margin-bottom: 20px; margin-top: 20px;">
    <a href="pm_send.php" class="btn">Send Message To Administrator</a>
</div>
<table class="table table-bordered table-striped table-hover">
<form action="pm_inbox.php" method="post" name="form1">
<thead>
            <tr>
                <th></th>
                <th style="width: 100px;">Title:</th>
                <th style="width: 60px;">From:</th>
                <th>Message:</th>
                <th>Receive Date:</th>
            </tr>
        </thead>

<?php 
while($rows=mysqli_fetch_array($result)){
?>
<?php if($rows['viewed']==0){//show message in bold ?>
<tbody>
<tr>
<td width="40px" align="center"> <input type="checkbox" name="checkbox[]"  id="checkbox[]" value="<?php echo $rows['id']; ?>"></td>
<td  width="100px"><!--<a href="pm_view_in.php?in=--> <?php echo $rows['id'];?><b><?php echo $rows['title'];?></b><!--</a>--></td> 
<td width="100px"><?php echo $rows['from_username'];?></td><td> <?php echo $rows['content'];?></td><td> <?php echo $rows['recieve_date'];?></td>
</tr>

<?php   //Donotn show message in bold if it is viewed ,So remove <b>    ?>

<?php } else if($rows['viewed']==1){?>
<tr>
<td width="41" align="center"> <input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php  echo $rows['id']; ?>"</td>
<td  width="260"><!--<a href="pm_view_in.php?in=--> <?php  echo $rows['id'];?><!--">--><?php echo $rows['title'];?><!--</a>--></td>
<td width="260"><?php echo $rows['from_username'];?></td><td> <?php echo $rows['content'];?></td>
</tr>
</table>
<?php } ?>
<?php } ?>

<td colspan="3" align="center"><?php if($inboxMessagesNew>0){?>
<input type="submit" name="delete" id="delete" value="Delete Selected Message"/>
<?php } else { print "There is no message in your inbox";}?></td>
</table>
<?php } else { ?>
<table width="800" border="0">
<tr>
<td>Please login<a href="loginpost.php">Login to your account</a></td>
</tr>
</table>


<?php }?>

 <?php
 
if($_POST['delete']){
$checkbox=$_POST['checkbox'];
$delete=$_POST['delete'];
if($delete){
for($i=0; $i<$count; $i++){
$del_id=$checkbox[$i];

$sql="delete from pm_imbox where id='$del_id'";
$result=mysqli_query($connection, $sql);
}
 
if($result){
echo  "<meta http-equiv=\"refresh\"content=\"0;URL=pm_inbox.php\">";
}
}mysqli_close();
} 
else{
}


?>
</form>