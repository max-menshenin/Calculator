<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Calculator</title>
</head>
<body>
<form>
<input type="text" name="num1" placeholder="Number 1">
<input type="text" name="num2" placeholder="Number 2">
<select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
</select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button
</form>
<p>Result is:</p>
<?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator){
        case "None":
            echo "You should select an action";
            break;
        case "Add":
            echo $result1 + $result2;
            break;
        case "Subtract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
    }

}

?>
</body>
</html>