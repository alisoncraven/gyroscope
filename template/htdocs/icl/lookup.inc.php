<?
function showdatepicker(){
	global $db;

	$key=trim(GETSTR('key'));
	
	//get current month and year
	$m=adodb_date("m")+0;
	$y=adodb_date("Y");

	//detect user intent
	if ($key==($key+0)) {
		if ($key>0&&$key<=12) $m=$key;
	}

	$keys=explode(" ",str_replace("-"," ",$key));
	if (strlen($keys[0])==4) $y=$keys[0];
	if (strlen($keys[1])==4) $y=$keys[1];
	if (strlen($keys[0])<3&&$keys[0]>0&&$keys[0]<=12) $m=$keys[0];
	if (strlen($keys[1])<3&&$keys[1]>0&&$keys[1]<=12) $m=$keys[1];

	$nm=$m+1;
	$ny=$y;
	$py=$y;
	$pm=$m-1;

	if ($nm>12) {$ny++;$nm-=12;}
	if ($pm<1) {$py--;$pm+=12;}

	$fd=adodb_mktime(1,1,1,$m,1,$y);
	$ld=adodb_date('j',adodb_mktime(23,59,59,$nm,0,$ny));
	$w=adodb_date("w",$fd);

	$wdays=array('Su','Mo','Tu','We','Th','Fr','Sa');

	$start=$fd;
	$end=adodb_mktime(23,59,59,$nm,0,$ny);

?>
<div style="width:100%;text-align:center;">

<div style="width:100%;position:relative;margin-top:5px;text-align:center;"><?echo adodb_date("M Y",$fd);?>
<span style="position:absolute;top:2px;left:12px;cursor:pointer;" onclick="if (!document.hotspot) {pickdate(null,'<?echo "$py-$pm"?>');return;} document.hotspot.value='<?echo "$py-$pm"?>';pickdate(document.hotspot);"><img src="imgs/calel.gif"></span>
<span style="position:absolute;top:2px;right:12px;cursor:pointer;" onclick="if (!document.hotspot) {pickdate(null,'<?echo "$ny-$nm"?>');return;} document.hotspot.value='<?echo "$ny-$nm"?>';pickdate(document.hotspot);"><img src="imgs/caler.gif"></span>
</div>

<div id="calepicker" style="font-size:12px;width:100%;height:200px;margin:0 auto;margin-top:5px;">
<?for ($i=0;$i<7;$i++){?>
<div style="margin-left:1px;width:12%;height:20px;border:solid 1px white;float:left;"><?echo $wdays[$i];?></div>
<?}?>
<?for ($i=0;$i<$w;$i++){?>
<div style="margin-left:1px;margin-top:1px;width:12%;height:25px;border:solid 1px #999999;float:left;"></div>
<?}?>
<?
for ($i=1;$i<=$ld;$i++){
?>
<div onclick="if (document.hotspot) document.hotspot.value='<?echo "$y-$m-$i"?>';else showday('<?echo "$y-$m-$i"?>');" style="cursor:pointer;margin-left:1px;margin-top:1px;width:12%;height:25px;border:solid 1px #444444;float:left;"><?echo $i;?></div>
<?
}
?>
</div>
</div>
<?
}
?>