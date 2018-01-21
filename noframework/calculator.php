<html>
<head>
    <title>Calculator</title>
</head>
<body>
<?php
if (!$_POST) {
    ?>
    <form method="post">
        <input type="text" name="number1">
        <input type="text" name="number2">
        <input type="submit" value="Sum!">
    </form>
    <?php
} else {
    $total = $_POST['number1'] + $_POST['number2'];
    echo $total;
}
?>
</body>
</html>