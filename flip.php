<?php
$number =  trim(fgets(STDIN));
$length  = strlen($number);

for($i=1; $i <= $length; $i++){
    $get_number = substr($number,-$i,1);
    if($get_number == 0){
        $new_number[$i] = 1;
    }elseif($get_number == 1){
        $new_number[$i] = 0;
    }
}

echo implode("", $new_number);
