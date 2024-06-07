<?php
    include("dbconn.php");

    $id = isset($_REQUEST['bnum']) ? $_REQUEST['bnum'] : '';

    if ($id) {
        $sql = "DELETE FROM listacc WHERE bnum=$id"; 
        if ($conn->query($sql)) {
            $msg = "Data deleted successfully";	
            header("location:listacc.php");
            exit; 
        } else {
            $msg = "Data not deleted: " . $conn->error;
        }
    } else {
        $msg = "No bnum provided for deletion.";
    }
?>
