
<?php
$arFile=file("companys.csv");
//$ar=explode("\n",$comps);
$num=count($arFile);

//for($i=0;$i<6;$i++){
for($i=0;$i<$num;$i++){

     $filename=strtolower($arFile[$i]);
     $link=
     "window.open(".
     '"https://www.marketindex.com.au/download-historical-data/'
     .$filename.
     '","_blank");'.
     "<br>";
    echo $link; 
}
?>


