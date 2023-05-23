<?php
    $dta[0]["NAMA"]="sintha";
    $dta[0]["TGL_LAHIR"] = "2003-05-22";
    $dta[0]["JKEL"] = "P";
    $dta[0]["NIM"] = "2201010129";
    $dta[0]["ALAMAT"] = "Gianyar, Bali";

    $dta[1]["NAMA"]="satya";
    $dta[1]["TGL_LAHIR"] = "2003-06-17";
    $dta[1]["JKEL"] = "L";
    $dta[1]["NIM"] = "2201010189";
    $dta[1]["ALAMAT"] = "Denpasar, Bali";

    $dta[2]["NAMA"]="dewi";
    $dta[2]["TGL_LAHIR"] = "2007-02-28";
    $dta[2]["JKEL"] = "P";
    $dta[2]["NIM"] = "2200010129";
    $dta[2]["ALAMAT"] = "jakarta";

    $dta[3]["NAMA"]="kadek";
    $dta[3]["TGL_LAHIR"] = "2004-02-19";
    $dta[3]["JKEL"] = "L";
    $dta[3]["NIM"] = "2201010130";
    $dta[3]["ALAMAT"] = "Ubud, Bali";

    header("content-type: application/json; charset=utf-8");
    echo json_encode ($dta);
?>