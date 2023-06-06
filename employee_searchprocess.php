<?php
$searchtype=$_POST['search_type'];
$searchterm=$_POST['search_term'];
if(!$searchtype || !$searchterm){
    echo "You did not make any selection.";
    exit;
}
?>