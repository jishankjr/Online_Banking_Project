<?php
    include("dbconn.php");

    $sn = isset($_REQUEST['sn']) ? $_REQUEST['sn'] : '';

    if ($sn) {
        $sql = "DELETE FROM contact_message WHERE sn=$sn"; 
        if ($conn->query($sql)) {
            $msg = "Data deleted successfully";	
            header("location:message.php");
            exit; 
        } else {
            $msg = "Data not deleted: " . $conn->error;
        }
    } else {
        $msg = "No bnum provided for deletion.";
    }
?>
