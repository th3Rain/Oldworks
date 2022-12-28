<?php
include 'connection.php';
if(isset($_POST['get_option']))
{
 $_SESSION['title'] = $_POST['get_option'];
 $title = $_POST['get_option'];
 $price=mysqli_query($connection, "select * from cinema where title='$title'") or die(mysqli_error($connection));
 while($row=mysqli_fetch_array($price))
 {
  echo "<label for='mprice'>Movie Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='mprice' name='price'><option>".$row['price']."</option></select><br><br>
  <label for='mtime'>Showing time </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='mtime' name='time'><option>".$row['time1']."</option>
  <option>".$row['time2']."</option>
  <option>".$row['time3']."</option></select><br><br>
  <label for='mcinema'>Cinema</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='mcinema' name='cinema'><option>".$row['cinema']."</option></select><br><br>
    <label for='cdate'>Showing Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='cdate' name='date'><option>".$row['date']."</option></select><br><br>";
 }
  
 }
 if(isset($_POST['get_option2'])){
  $time = mysqli_query($connection, "select time from cinema where title='$title'") or die(mysqli_error($connection));
 while($row=mysqli_fetch_array($time))
 {
  echo "<option>".$row['time']."</option>";
 }
 exit;
}
?>