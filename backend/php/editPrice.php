<?php
include("../config.php");
    $sql = "UPDATE ir_tourpackage SET cost = '".$_POST[ecost]."' WHERE id = '".$_POST[id]."'"; 
    $Objquery = mysql_query($sql,$conndb);
    
    $rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  