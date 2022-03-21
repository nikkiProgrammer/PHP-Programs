<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMBINATIONS</title>
    <style>
body{
display: grid;
place-items: center;
background-color: lightseagreen;
color: #fff ;
height: 100vh;
overflow: hidden;
}

input[type="number"] {
padding: 20px;
border-radius: 15px;
margin: 10px 0;
border:none;
}

input[type="submit"]{
padding: 15px;
border-radius: 10px;
background: lightgreen;
color:#fff ;
margin:0 25px ;
border:none;

}
input[type="text"]{
padding: 20px;
border-radius: 15px;
margin: 10px 0;
margin-left: 15px;
border:none;
}

.btn{
margin: 0 25px;

}



    </style>
</head>
<?php
$combination = "C(n,r)=?";
if (isset($_POST["calculate"])) {
    $num1 = $_POST["combination"];
    $num2 = $_POST["permutation"];
    $dif = $num1 - $num2;
    $n = factorial($num1);
    $r = factorial($num2) * factorial($dif);
    $combination = $n / $r;
} else if (isset($_POST["clear"])) {
    $num1 = "";
    $num2 = "";
    $combination = "C(n,r)=?";
}
function factorial($num)
{
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact = $i * $fact;
    }
    return $fact;
}
?>

<body>

    <form action="" method="post">
        <label>n (objects): </label>
        <input type="number" name="combination" placeholder="Combination(n)"><br>
        <label>r (sample): </label>
        <input type="number" name="permutation" placeholder="Permutation(r)"><br>
        <label class="btn"></label>
        <input type="submit" value="clear" name="clear">
        <input type="submit" value="calculate" name="calculate"><br>
        <label>Answer: </label>
        <input type="text" name="answer" placeholder="C(n,r)=? " readonly="read only" value="<?php echo $combination; ?>">

    </form>

</body>

</html>