<?php 
include "../candidate/include.php";
session_start();
$job_id = $_SESSION['job_id'];
$username = $_SESSION['username'];

$query = "SELECT * FROM `job_vacancy` WHERE id='$job_id'";

 
$result1 = mysqli_query($connection, $query) or die(mysqli_error("Result1 <br>". $connection));

while($row = mysqli_fetch_assoc($result1)){
        $job_title = $row["title"];
}
$job_label = preg_replace('/\s+/', '', $job_title).$job_id;
 $query = "INSERT INTO `applied_candidates` (" . $job_label. ") VALUES ('$username')";
        mysqli_query($connection, $query) or die(mysqli_error($connection));
        header("location:admin.php?action=viewArticle&amp;articleId=<?php echo $job_id; ?>");
        
?>
