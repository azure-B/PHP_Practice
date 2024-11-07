<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    $a = 1;
    
    echo $a+1;
    echo ' <br/> ';

    $a = 2;
    
    print($a. ' <br/> ');

    $first = "Hello";

    echo $first. "world";
    echo ' <br/> ';

    define('Name', 'PHP Tutorial');
    echo Name;

    ?>

    <?php

    echo ' 1==2 : ';
    var_dump( 1==2 );
    echo ' <br/> ';

    echo ' 1!==2 : ';
    var_dump( 1!==2 );
    echo ' <br/> '; 

    echo ' 1>2 : ';
    var_dump( 1>2 );
    echo ' <br/> ';

    echo $_GET['id'].','.$_GET['password'];
    echo $_POST['id'].','.$_POST['password'];

    include 'Hello.php';
    Welcome();


    ?>
    
    <form method="get">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>

    <form method="POST">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>

    
</body>
</html>