<?
include("../config.php");
    $sql = "DELETE FROM ir_gallery WHERE id  ='".$_POST[id]."'";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    $rows = array();
    if($Objquery){
    	$path = "../images/gallery/";
        $file = $path.$_POST[gallery];
		unlink($file);
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }
?>

   



  