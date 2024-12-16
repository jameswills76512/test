<?php
if(isset($_POST['sub'])){
$name = $_POST['name'];
$num = $_POST['number'];
         $to = "harvygomez61@gmail.com";
         $subject = "Test";
         
         $message = "<table border='1' cellpadding='10'><tr><td>Name</td><td>$name</td></tr>
         <tr><td>Contact Number</td><td>$num</td></tr></table>";
         
         $header = "From: harvygomez61@gmail.com\r\n";
        //  $header .= "Bcc: harvygomez61@gmail.com\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script>window.location.href='thankyou.php'</script>";
         }else {
            echo "<script>alert('Message could not be sent...')</script>";
         }
}
?>
