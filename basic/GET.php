<?php
$nameCode = $_GET['name'];
$countryCode = $_GET['country'];

//echo 'Hi ' .$nameCode;
//echo 'From' .$countryCode;
//เปลี่ยน URL = page1.php?name=Max&country=Thailand//

?>
<div>
    <h1>Profile</h1>
    Hi <b><?php echo $nameCode; ?></b>
    From <u><?php echo $countryCode; ?></u>
    <hr />
</div>