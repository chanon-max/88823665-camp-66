<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <h1>File index.php</h1>
    <?php
    echo "hello world";
    $myvar = "halooo";
    ?>
    <h1>
        <?php echo $myvar; ?></h1>
    <?php
    echo "<h1>" .$myvar. "</h1>";
    ?>
    <?php
    FUNction myfunction($myparam){
        $x = "Helo";
        return $myparam;
    }
    echo "<p>" .MYFUNCTION("Hello World!"). "</p>"
    ?>
    <h1><?php> echo $x; ?></h1>
    <?php>
    $my_array = array(1,2,3,4,5);
     for($i = 0; $i < count($my_array); $i++){
        echo $my_array[$i];
     }
     echo "<br>";
     foreach($my_array as $index => $value){
        echo $value;

     }
     echo "<br>";
     $my_array2[] = [0 =>1,2,3];
     $my_array2[] = 2;
     $my_array2[4] = 3;
     $my_array2[] = 4;
     $my_array2[] = 5;
     print_r($my_array2);
     echo "<br>";
     $my_array3 = array(1,2,3,"myindex" => 4,0 => 9);
     $my_array3["myidex"] = 1;
     print_r($my_array3);
     foreach($my_array as $value){
        echo $value;
     }

     ?>
</body>

</html>