<!-- comment -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= "notes" ?></title>
</head>
<body>
    <?php #single line
    /* multi

    line */
    $name = "brenton"; //end of line
    $age = 84;
    echo "<h2>Notes</h2>";

        echo "full"; ?><?= " short" ?><br>
        <?= "escape \\ " . $name //. for concat?><br>
        <?= "my name is $name" //variable expansion with " ?><br>
        <?= 'my name is $name' //no expansion with '?><br>

    <!--operators and conditionals (Slides 2: 22-38)
    All operators are the same as you are used to
    The only new one is spaceship which I didn't really look at
    Conditionals are the same which includes
    if, elseif, while, do while, switch cases, for --> <!--operators and conditionals-->
    <?php
    $myarray = array("1", "2", "3", "4", "5", "6", "7", "8", "9");
    foreach ($myarray as $value) {echo $value;}
    $myarray[]= "10";
    echo "<pre>";
    print_r($myarray);

    //associative arrays
    //first item is used as index and can even be a string
    $assoarray = array("test"=>"1", "2"=>"2", "3"=>"3");
    echo "<pre>";
    print_r($assoarray);
    echo "called test and got " . $assoarray["test"];

    //multidimensional arrays
    //arrays within arrays
    $mdarray = array(array(1,2,3),array(4,"test2",6),array(array(1,2,"test3"),array(4,5,6)));
    echo "<pre>";
    print_r($mdarray);
    //how to print particular values and could use nested for loops
    echo $mdarray[1][1]." and ".$mdarray[2][0][2];
    //also can use associative arrays in indexed arrays
    $mdstudent = array(array("name"=>"Billy", "major"=>"Math"), array("name"=>"Bob", "major"=>"Science")); echo"<br>";
    echo $mdstudent[0]["name"]." and ".$mdstudent[1]["major"];
    ?> <!--arrays-->
    <a href="index2.php">index and detail example</a>
    <?php //functions
    // These are blocks of code that can be defined like variables to be called again
    function printLineBreak(){ echo "<hr />"; }
    printLineBreak();
    //function can be defined before or after code but try to do before
    //similar to classes in java
    //takes and returns parameters
    function myLog($exp, $base=10){ return (log($exp, $base)); }
    //static variables are not lost when exiting a function
    function counter(){
        static $count = 0;
        return ++$count;
    }
    for($i = 0; $i < 5; $i++){ printf ("%d", counter()); }
    //global variables are defined in functions with the global keyword like static
    //try to avoid using global variables
    //superglobal variables are defined by default in PHP
    //check week 3 slide 15 for  more info on superglobals
    ?><!--functions-->
    <?php //files
    //two functions for linking files, include and require
    //always use require
    ?><!--files-->
    <?php //git
    //git init [creates repository]
    //git add "filename" [adds file to repository]
    //git commit -m 'comment' [commits changes with the comment]
    //git status or git log
    ?> <!--git-->

</body>

