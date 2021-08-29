<?php

$arFile=file("companys.csv");
//$ar=explode("\n",$comps);
$num=count($arFile);

for($i=0;$i<$num;$i++){
    echo $arFile[$i]."<br>";
}

