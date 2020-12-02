<?php include_once("header.php");?>

<div class="container">
    <h3>Task Title:</h3>
    <?php echo "-> ".$data->name?>
    <h4>Description:</h4>
    <?php echo "-> ".$data->description?></br>
    <?php echo anchor("welcome/index", "Back", ["class" => "btn btn-info btn-sm "])?>
</div>
</br>
<?php include_once("footer.php");?>