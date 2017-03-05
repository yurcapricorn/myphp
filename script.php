<?php

include __DIR__ . '/autoload.php';
$mas=[];
if (isset($_POST['btn'])&&isset($_POST['pg'])) {
    $btn = $_POST['btn'];
    $pg = $_POST['pg'];
    $n=0;
    switch ($btn) {
        case 'next':
            if ($n>=130){$n=0;}
            else{$n+=$pg;}
            break;
        case 'prev':
            if ($n==0){$n=150;}
            else if ($n==10){$n=140;}
            else{$n=$pg-20;}
            break;
        case 'b1':
            $n=0;
            break;
        case 'b2':
            $n=20;
            break;
        case 'b3':
            $n=40;
            break;
        case 'b4':
            $n=60;
            break;
        case 'b5':
            $n=80;
            break;
        case 'b6':
            $n=100;
            break;
        case 'b7':
            $n=120;
            break;
        case 'b8':
            $n=140;
            break;
    }
}

function getnews($n){
    if ($n>=0){
        for($i=$n;$i<($n+20);$i++) {
            $mas[] = \App\Models\News::displayOne($i);
        }
    }
    return  $mas;
}

print_r(getnews($n));

// json_encode