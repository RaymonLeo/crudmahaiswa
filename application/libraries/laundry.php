<?php
class laundry
{
    function laundry($pilih, $berat, $struk,$dalam,$nama)
    {
        $harga=0;
       if($pilih == "setrika saja"){
        $harga = $berat * 3500;
       }
       else if($pilih == "cuci dan setrika"){
        $harga = $berat * 5000;

       }
        if($struk=="tidak ada"){
        $harga +=10000;
        }
        if($dalam=="ada"){
            $harga+=5000;
        }
        echo "$nama  Pekerjaan = " . $pilih . "Harga total = " . $harga;
    }
}
