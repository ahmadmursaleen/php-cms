<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1'; //PHP > 7.0
echo $id;
?>


<a href="show.php?name=<?php echo u('William Hague ');?>">Link</a><br/>
<a href="show.php?name=<?php echo u('Buns&More ');?>">Link</a><br/>
<a href="show.php?name=<?php echo u('$%&');?>">Link</a><br/>