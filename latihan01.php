<?php
    $dta["NAMA"]="sintha";
    $dta["TGL_LAHIR"] = "2003-05-22";
    $dta["JKEL"] = "P";
    $dta["NIM"] = "2201010129";
    $dta["ALAMAT"] = "Gianyar, Bali";

    header("content-type: application/json; charset=utf-8");
    echo json_encode ($dta);
?>