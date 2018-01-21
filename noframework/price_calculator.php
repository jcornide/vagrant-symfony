<html>
<head>
    <title>Bill calculator</title>
</head>
<body>
<?php
if (!$_POST) {
    ?>
    <form method="post">
        <input type="text" name="total" id="total">
        <select name="location">
            <option value="terrace">Terrace</option>
            <option value="indoors">Indoors</option>
        </select>
        <input type="submit" value="Calculate!">
    </form>
    <?php
} else {
    $extraCost = $_POST['location'] == 'terrace' ? 1.5 : 0;
    $total = $_POST['total'] + $extraCost;
    echo $total;
}
?>
</body>
</html>