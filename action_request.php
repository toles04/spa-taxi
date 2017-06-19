<?php 

$pick_up = $_POST['pick_up'];

$destination = $_POST['destination'];

$phone_no = $_POST['phone_no'];

$when = $_POST['when'];

$passangers = $_POST['passangers'];

$return_j = $_POST['return_j'];

$email = $_POST['email'];

$name = $_POST['name'];

if(!isset($_POST['return_j'])){ $return_j = "NO";}
$to = "tolu.akinnubi@yahoo.com";
$subject = "A1 Spa Taxi Pick-Up Request";

$message = '
<body style="font-family:arial;">
<p><br /> </p>
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="1" align="center">
<tbody>
<tr>
<td colspan="2" style="background-color: #fff;" valign="top" align="center">
<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
<br>
<h3 style="color: #ffc107;">Pick-Up Request Form</h3>
<tbody>
<tr>
<td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>
<tr>
<td colspan="2" style="background-color: #ffc107; color: #fff; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>
<tr>
<td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>

<!-- main content here -->
<tr>
  <td colspan="2" align="" style="padding: 20px;">
<br>
<b>Full Name</b> - '.$name.'<br> <br>
<b>Email Address</b> - '.$email.'<br> <br>
<b>Telephone NO</b> - '.$phone_no.'<br> <br>
<b>Pick-Up Location</b> - '.$pick_up.'<br> <br>
<b>Pick-Up When</b> - '.$when.'<br> <br>
<b>Final Destination</b> - '.$destination.'<br> <br>
<b>Number Of Passangers</b> - '.$passangers.'<br> <br>
<b>Return Journey</b> - '.$return_j.' <br> <br>

    
<br>
  </td>

</tr>
<tr>
<td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>
<tr>
<td colspan="2" style="background-color: #ffc107; color: #fff; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>
<tr>
<td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
   <p><u></u></p> </td>
</tr>
<tr>
  <td>

  </td>
  <td>

  </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>

';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no-reply@A1spataxi.com>' . "\r\n";
//$headers .= 'Cc: yishmaell@yahoo.com' . "\r\n";

mail($to,$subject,$message,$headers);

//header("location:javascript://history.go(-1)");
echo "<script type='text/javascript'>window.history.go(-1);window.alert('Your Request has been sent!');</script>";


?>
