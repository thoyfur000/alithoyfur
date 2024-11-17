<?php
$levelKepedasan = 9; // Tingkat kepedasan
switch($levelKepedasan){
    
case 1:
    echo "Sangat Mild - Cocok untuk yang tidak suka pedas.";
    break;
case 2:
    echo "Mild - Sedikit rasa pedas, masih nyaman.";
    break;
case 3:
    echo "Sedang - Rasa pedas mulai terasa, tapi masih bisa dinikmati.";
    break;
case 4:
    echo "Pedas - Rasa pedas yang cukup menggigit.";
    break;
case 5:
    echo "Pedas Sekali - Siap-siap berkeringat!";
    break;
case 6:
    echo "Sangat Pedas - Hanya untuk yang berani!";
    break;
case 7:
    echo "Ekstrem - Rasa pedas yang bisa membuat kamu teriak!";
    break;
case 8:
    echo "Super Ekstrem - Hanya untuk para pecinta pedas sejati!";
    break;
case 9:
    echo "Ultimate Pedas - Siap-siap untuk tantangan!";
    break;
default:
    echo "Tidak ada level kepedasan yang sesuai.";
}
?>