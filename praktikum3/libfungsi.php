<?php
function kelulusan($_nilai){
    if($_nilai > 55){
        return 'anda lulus';
    }else{
        return 'anda tidak lulus';
    }
}
function grade($_nilai){
    if ($_nilai >= 85){
            $grade = "A";
        }elseif($_nilai >= 70){
            $grade = "B";
        }elseif($_nilai >= 56){
            $grade = "C";
        }elseif($_nilai >= 36){
            $grade = "D";
        }elseif ($_nilai >= 10){
            $grade = "E";
        }else{
            $grade = "I(tidak ada nilai)";
        }
}
?>