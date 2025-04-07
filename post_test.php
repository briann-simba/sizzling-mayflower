<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Username:<input type="text" name="username">
        <input type="submit">

</form>

<?php
$name=$_POST['username'];
if (empty($name)) echo "name can't be empty";
else{
echo "Your name is {$name}";
}
?>
</body>
</html>