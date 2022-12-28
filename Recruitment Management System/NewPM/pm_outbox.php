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
 


$sql="SELECT * FROM  pm_outbox WHERE userid='$pid' ORDER by id DESC";

$result=mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);


?>
<table class="table table-bordered table-striped table-hover">
<form action="pm_outbox.php" method="post" name="form1">
<thead>
<tr>
<td width="41"></td>
<td width="490"><b>Title:</b></td>
<td width="255"><b>From:</b></td>

</tr>
</thead>
<?php 
while($rows=mysqli_fetch_array($result)){
?>
<tbody>
<tr>
<td><input type="checkbox" name="checkbox[]" id="checkbox[]"  value="<?php echo $rows['id']; ?>" ></td>
<td  width="490"><a href="pm_view_out.php?out=<?php echo $rows['id'];?>"><b><?php echo $rows['title'];?></b></a>
<td width="225"><?php echo $rows['to_username'];?></td>
<?php } ?>
</tr>

  <td colspan="3" align="center"><?php if($outboxMessages>0){?>
<input type="submit" name="delete" id="delete" value="Delete Selected Message"/>
<?php } else { echo "There is no message in your outbox";}?></td>
</tr>
 
 <?php
 
if($_POST['delete']){
$checkbox=$_POST['checkbox'];
$delete=$_POST['delete'];
if($delete){
for($i=0; $i<$count; $i++){
$del_id=$checkbox[$i];

$sql="delete from pm_outbox where id='$del_id'";
$result=mysqli_query($connection, $sql);
}
 
if($result){
echo  "<meta http-equiv=\"refresh\"content=\"0;URL=pm_outbox.php\">";
}
}mysqli_close();
} 
else{
}


?>
</form>