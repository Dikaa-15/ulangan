<?php

function pengulanganAbsen($noAbsen, $kondisiterminasi, $kt1, $tk2, $kt3, $kt4, $kt5, $kt6, $kt7){


    for($noAbsen; $noAbsen <= $kondisiterminasi; $noAbsen++){
        if($noAbsen == $kt1 || $noAbsen == $tk2 || $noAbsen == $kt3){
            echo "Peserta didik no absen $noAbsen tidak hadir <br />";
        }else if($noAbsen == $kt4 || $noAbsen == $kt5){
            echo "Peserta didik no absen $noAbsen Terlambat <br />";
        }else if($noAbsen == $kt6 || $noAbsen == $kt7){
            echo "Peserta didik no absen $noAbsen sakit <br />";
        }else {
            echo "Peserta didik no absen $noAbsen hadir <br />";
        }
    }
}














echo pengulanganAbsen(1, 15, 2, 3, 10, 6, 8, 9, 13);



?>