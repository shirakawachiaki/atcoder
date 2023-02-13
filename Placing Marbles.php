<?php
$number =  trim(fgets(STDIN));
echo mb_substr_count($number, 1);