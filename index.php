<?php
require_once 'employe.php';
$francois = new employe('2020','François','G','1900','M','5000');
$emilie = new employe('2021','Emilie','L','1900','F','10000');
?>
<p><?= $francois ?></p>
<p><?= $emilie ?></p>
