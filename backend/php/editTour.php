<?php
include("../config.php");
    $sql = "UPDATE ir_tourpackage SET name_en = '".$_POST[ename_en]."',detail = '".$_POST[edetail]."',program = '".$_POST[eprogram]."',conditions = '".$_POST[econdition]."',contact = '".$_POST[econtact]."',description = '".$_POST[edescription]."',note = '".$_POST[enote]."',province = '".$_POST[eprovince]."',include = '".$_POST[eincludes]."' ,show_recommend = '".$_POST[echekrecommends]."',show_popular = '".$_POST[echekpopulars]."'WHERE id = '".$_POST[id]."'"; //"INSERT INTO ir_tourpackage(name_en,detail,program,conditions,contact,class,description,note,province,include,show_recommend,show_popular,cost) VALUES ('".$_POST[name_en]."','".$_POST[detail]."','".$_POST[program]."','".$_POST[condition]."','".$_POST[contact]."','".$_POST[classs]."','".$_POST[short]."','".$_POST[note]."','".$_POST[city]."','".$_POST[includes]."','".$_POST[chekrecommends]."','".$_POST[chekpopulars]."','".$_POST[price]."')";
    $Objquery = mysql_query($sql,$conndb);
    //echo $Objquery;
    //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
$rows = array();
    if($Objquery){
        
       echo "1 results";
      
    }
    else{
        echo "0 results";;
        
    }

?>

   



  