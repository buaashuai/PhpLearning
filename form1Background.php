<?php
$fname='fname';
$name = $_POST[$fname];
echo "1：".$name."<br/>";
?>

<?php
$name = $_REQUEST['fname'];
echo "2：".$name."<br/>";
?>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>


