<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->element('story/head');?>

</head>
<body>
    <?php echo $this->element('story/header'); ?>
 	<?php echo $this->element('story/menu');?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('story/footer'); ?>
</body>
</html>