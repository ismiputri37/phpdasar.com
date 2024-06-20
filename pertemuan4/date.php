<?php
// date 
// untuk menampilkan tanggal dengan format tertentu
   // echo date("l, d-M-Y");

    //Time
    //UNIX Timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 januari 1970
    //echo time();

    // echo date("l", time()+172800);
    // echo date("l", time()+60*60*24*100); //100 hari ke depan
    // echo date("d M Y", time()-60*60*24*100); //100 hari ke belakang

    // MKTIME
    // membuat sendiri detik
    // mktime (0,0,0,0,0,0,)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,8,25,1985));

    //SRTTOTIME
    echo strtotime("25 aug 1985");
?>