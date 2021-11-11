<?php
class Content{
    function isiContent($con){
        if($con == "page_one_st"){
            include"G_K1L61_1P/config_cerita.php";
            return $con;
        }else if($con == "page_one_sc"){
            include"G_K1L61_1P/config_visi.php";
            return $con;
        }else if($con == "page_one_rd"){
            include"G_K1L61_1P/config_mitra.php";
            return $con;
        }else if($con == "page_one_4th"){
            include"G_K1L61_1P/config_kenali.php";
            return $con;
        }else if($con == "page_one_5th"){
            include"G_K1L61_1P/config_sertifikat.php";
            return $con;
        }else if($con == "page_one_6th"){
            include"G_K1L61_1P/config_makna.php";
            return $con;
        }else if($con == "page_two_st"){
            include"G_K1L61_1P/config_latar_belakang.php";
            return $con;
        }else if($con == "page_two_sc"){
            include"G_K1L61_1P/config_program.php";
            return $con;
        }
    }
}
?>