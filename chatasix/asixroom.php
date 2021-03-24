<?php
date_default_timezone_set("Asia/Bangkok");
session_start();

    $username = $_SESSION['user'];
    include 'inti/koneksi.php';

if (!isset($_POST['message']))
{
    $message = "";
}
else
{

    $message = $_POST['message'];

    if ($message != "")
    {
        $channel = $_POST['channel'];
        $sql = "INSERT INTO asixroom (channel,username,message) VALUES('$channel','$username','$message')";
        mysqli_query($kon, $sql);
    }

}
$channel = $_POST['channel'];
$sql = "SELECT * FROM asixroom WHERE channel = '$channel' ORDER BY id DESC";
if ($result = mysqli_query($kon, $sql))
{
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)){

            $chattime = $row['time'];
            $stringtime = strtotime($chattime);
            $hour = date('H:i', $stringtime);

            $today = new DateTime();
            $today->setTime( 0, 0, 0 ); 

            $match_date = DateTime::createFromFormat( "Y-m-d H:i:s", $chattime );
            $match_date->setTime( 0, 0, 0 );

            $diff = $today->diff( $match_date );
            $diffDays = (integer)$diff->format( "%R%a" ); 

            switch( $diffDays ) {
                case 0:
                    $theDate =  "Today";
                    break;
                case -1:
                    $theDate =  "Yesterday";
                    break;
                default:
                    $theDate =  "";
            }

            if ($row['username'] == $username) {
            	echo '  <div class="alert alert-success px-4 py-1" role="alert" style="margin-left: 12%">
						  <p class="text-dark " style="margin-bottom:2px !important;margin-top:2px !important;font-size: 11pt">'.$row['message'].'</p>
						<small>'.$theDate.' '.$hour.'</small>
						</div>';
            }else{
            	echo '  <div class="alert alert-secondary px-4 py-1" role="alert" style="margin-right: 12%">
						  <strong class="text-info">'.$row['username'].'</strong> <small> # '.$theDate.' '.$hour.'</small>
						  <p class="text-dark mt-2 " style="margin-bottom:2px !important;margin-top:2px !important;font-size: 11pt">'.$row['message'].'</p>
						
						</div>';
            }
        } 
    }
    else
    {
        echo "<p class='text-dark'>--Empty--</p>" ;
    }
}

?>
