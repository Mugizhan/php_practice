<?php
$date1=strtotime("03-10-2002");
$date2=strtotime("4-10-2002");
echo $date1;
$intv=($date2-$date1);
$in=$intv/(60*60*24);
echo $in;
$fine=0;
for($i=1;$i>=$in;$i++)
{
	$fine=$fine+5;
}
echo $fine;
?>