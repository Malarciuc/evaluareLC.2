<?php
$number = $_POST['number'];
if(isset($_POST['number'])){

    $modified = array_push($_SESSION['nums'], $number);


}

?>
<form method="POST">
    <div class="form-group">
        <label for="number">Numar</label>
        <input type="number" class="number" id="number" name="number">
    </div>
    <button type="submit" class="btn btn-primary">Adauga</button>
</form>
<form method="post">

</form>