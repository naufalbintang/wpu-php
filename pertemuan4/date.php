<?php
    // Date 
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d M Y", time() - 60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0, 0, 0, 0, 0, 0, 0);
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0, 0, 0, 10, 07, 2005));

    // strtotime
    echo date("l", strtotime("07 oct 2005"));
?>