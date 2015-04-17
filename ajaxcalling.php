<?php
include_once("config.php");
//delete account
if(isset($_POST['remove'])){
    $acc_no=$_POST['remove'];
    $sql = "DELETE from account where acc_no = '$acc_no'" ;
    $result=mysql_query($sql);
    if(! $result )
    {
    die('Could not delete data: ' . mysql_error());
    }
    echo "Account Delete successfully";
}
//delete account
if(isset($_POST['remove_user'])){
    $id=$_POST['remove_user'];
    $sql = "DELETE from usertb where id = '$id'" ;
    $result=mysql_query($sql);
    if(! $result )
    {
    die('Could not delete data: ' . mysql_error());
    }
    echo "Account Delete successfully";
}

?>
