<?php
    $con = mysqli_connect("localhost","root","","LoginSystem");
    if (mysqli_connect_errno()){
        echo "Bağlantı Kurulamadı " . mysqli_connect_error();
    }
?>