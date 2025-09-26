<?php

session_start();
echo "<pre>";

$TITLE = $_REQUEST ['TITLE'];
$DESCRIPTION = $_REQUEST ['DESCRIPTION'];
$DATE = $_REQUEST ['DATE'];
$errors = [];

if(empty($TITLE)){
     echo "enter title";
} else if(strlen($TITLE)<5){
    echo "title incomplete";
} else if(strlen($TITLE)>10){
    echo "title over";
}
echo "<br>";
echo "<br>";
if(empty($DESCRIPTION)){
     echo "enter description";
} else if(strlen($DESCRIPTION)<5){
    echo "description incomplete";
} else if(strlen($DESCRIPTION)>10){
    echo "description over";
}
echo "<br>";
echo "<br>";



$today = date("d-m-Y");
$user_date = date("27-10-2025");

if($user_date >= $today){
echo "acceptable :" . $user_date ;
} else if($user_date < $today){
    echo "unacceptable :" . $user_date ;
}
