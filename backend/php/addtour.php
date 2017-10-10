<?
include("../config.php");
    $sql = "INSERT INTO ir_tourpackage(name_en,detail,program,conditions,contact,class,description,note,province,include,show_recommend,show_popular,cost) VALUES ('".$_POST[name_en]."','".$_POST[detail]."','".$_POST[program]."','".$_POST[condition]."','".$_POST[contact]."','".$_POST[classs]."','".$_POST[short]."','".$_POST[note]."','".$_POST[city]."','".$_POST[includes]."','".$_POST[chekrecommends]."','".$_POST[chekpopulars]."','".$_POST[price]."')";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        $last_id = mysql_insert_id();
       echo $last_id;
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  