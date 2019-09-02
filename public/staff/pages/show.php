<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">

<a href="<?php echo url_for('/staff/pages/index.php');?>">Back to main <== </a><br/>

<?php
$id = $_GET['id'] ?? '1'; //PHP > 7.0
echo  h($id);
?>

<br>
<a href="show.php?name=<?php echo u('William Hague ');?>">Link</a><br/>
<a href="show.php?name=<?php echo u('Buns&More ');?>">Link</a><br/>
<a href="show.php?name=<?php echo u('$%&');?>">Link</a><br/>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>