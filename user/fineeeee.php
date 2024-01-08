<?php
$date1=strtotime("2002-10-3");
$date2=strtotime("4-10-2002");
echo $date1;
$intval=(($date2-$date1)/(60*60*24));
echo $intval;
$fine=0;
for($i=1;$i>=$intval;$i++)
{
	$fine=$fine+5;
}
echo $fine;
?>