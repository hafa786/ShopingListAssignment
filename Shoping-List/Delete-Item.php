<?php   
session_start(); //to ensure you are using same session
require_once("db_connect.php");
$i_id=$_GET['itemid'];
//$sql = "DELETE FROM talkshow_episode WHERE Episode_ID='$id'";
$sql = "DELETE FROM items WHERE Item_ID='$i_id'";
/*print_r($id);
die();
*/
if ($conn->query($sql) === TRUE) {

    header("location:Manage-Item.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

?>