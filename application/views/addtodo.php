<?php include_once("header.php")?>

<div class="container" style="padding:5%">
    <?php echo form_open("welcome/save", ["class" => "form-horizontal"])?>
        <fieldset>
            <h3>Enter Task</h3>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Task</label>
                <?php echo form_input(["name" => "name","placeholder" => "Task", "class" => "form-control"])?>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Description</label>
                <?php echo form_textarea(["name" => "description","placeholder" => "Description", "class" => "form-control"])?>
            </div>
                <?php echo form_submit(["name" => "submit", "value" => "submit", "class" => "btn btn-primary"])?>
            <br>
        </fieldset> 
    <?php echo form_close()?>
</div>

<?php include_once("footer.php")?>