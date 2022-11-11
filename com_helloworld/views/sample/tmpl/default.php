<?php
defined('_JEXEC') or die('Restricted access default tmpl');
?>
<h1>
    <?php echo $this -> msg; ?>
</h1>
<form action="index.php?option=com_helloworld&task=sample.getSaveClient" method="post" id="adminForm" name="adminForm">
    <lable>Input data</lable><br>
    <input type="text" name="input-data"><br>
    <input type="submit">
</form>

