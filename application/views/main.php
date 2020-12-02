<?php include_once("header.php");?>
<div class="container">
    <br>
    <?php echo anchor("welcome/create", "Add Todo", ["class" => "btn btn-primary"])?>
    <br>
    <h3>All Todos</h3>
    <table class="table table-hover">
        <tr>
            <td>ID</td>
            <td>WORK</td>
            <td>DESCRIPTION</td>
            <td>ACTIONS</td>
        </tr>
        <?php if(count(!is_null($data)?$data:[])): ?>
            <?php foreach($data as $datum):?>
            <tr>
                <td><?php echo $datum->id;?></td>
                <td><?php echo $datum->name;?></td>
                <td><?php echo $datum->description;?></td>
                <td>
                    <?php echo anchor("welcome/view/".$datum->id, "View", ["class" => "btn btn-info btn-sm "])?>
                    <?php echo anchor("welcome/delete/".$datum->id, "Delete", ["class" => "btn btn-danger btn-sm "])?>
                </td>
            </tr>
            <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td>No records found</td>
            </tr>
        <?php endif;?>
    </table>
</div>
<?php include_once("footer.php");?>