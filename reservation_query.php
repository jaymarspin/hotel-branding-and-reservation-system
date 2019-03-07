<?php
$message = 0;
if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['mno']) && !empty($_POST['email'])
	&& !empty($_POST['type']) && !empty($_POST['c_in']) && !empty($_POST['c_out']) && !empty($_POST['cpeople']) && !empty($_POST['cr_num'])){
 
 
mysql_connect("localhost","root","")or die("Could Not Connect To The Database !!");
  mysql_select_db("hotel");
  date_default_timezone_set('Asia/manila'); 
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['mno'];
  	$pick_up = $_POST['pick']; 
  	$time = $_POST['time'];
	$type = $_POST['type'];
	$guest = $_POST['cpeople'];
  $num = $_POST['cr_num'];
	$arrival = $_POST['c_in'];
	$departure = $_POST['c_out'];
    if($pick_up != "Yes Please! Pick me up on arrival"){
      $pick_up = "No, I will make my own way there";
    }
    $date = date("y-m-d");
    $tmp_arrival = strtotime($arrival);
    $date = strtotime($date);
    $tmp_departure = strtotime($departure);
    if($tmp_arrival > $date){
      
        if($tmp_departure > $tmp_arrival){
          
            $q = mysql_query("SELECT * FROM pictures WHERE title = '".$type."' AND category = 'rooms'");

            while ($row = mysql_fetch_assoc($q)) {             
              $q2 = mysql_query("SELECT * FROM room_available WHERE pictures = '".$row['id']."'");
              $type = $row['title'];
              $row2 = mysql_fetch_assoc($q2);
              if($num <= $row2['number']){
               
                $tmp = $row2['number'] - $num;
                if($tmp < 0){

                  header("location: index.php?message=1");
                }
                else{
                  mysql_query("UPDATE room_available SET number = '".$tmp."' WHERE pictures = '".$row['id']."'");
                  mysql_query("INSERT INTO reservation(fname,lname,email,number,type,pick,time_pick,guest,romnum,arrival,departure) VALUES('".$fname."','".$lname."','".$email."','".$number."','".$type."','".$pick_up."','".$time."','".$guest."','".$num."','".$arrival."','".$departure."')");
                  header("location: index.php?message=4");
                }
                
              }
              else{
                 header("location: index.php?message=1");

              }


            }
           
        }
        else{
          header("location: index.php?message=2");
        }
    }
    else{
      
      header("location: index.php?message=2");
    }
        
}
else{
	header("location: index.php?message=3");
}

?>