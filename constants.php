<?php
// A constant cannot be modified later. //

//Since PHP 7 you can put arrays on a constant. That's pretty useful!//
define("STUDENTS", array("Tomy", "Alba", "Samuel"));
//The result of this print should be: Tomy //
echo STUDENTS[0];

?>