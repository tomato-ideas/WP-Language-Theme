<?php
header("Content-type:application/json; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);  
// ส่วนติดต่อกับฐานข้อมูล
mysql_connect("localhost","root","") or die("Cannot connect the Server");     
mysql_select_db("WordPress") or die("Cannot select database");     
mysql_query("set character set utf8");   
?>
<?php
$q="SELECT * FROM wp_banner ORDER BY idx";
$qr=mysql_query($q);
while($rs=mysql_fetch_array($qr)){
	$json_data[]=array(
		"id"=>$rs['idx'],
		"img"=>$rs['imgurl'],
		"url"=>$rs['linkurl'],
		"wid"=>$rs['width'],
		"hei"=>$rs['height'],
		"animd"=>$rs['animduration'],
		"anims"=>$rs['animspeed'],
		"navi"=>$rs['navigation'],
		"bull"=>$rs['bullet'],
		"usec"=>$rs['usecaptions'],
		"hove"=>$rs['hoverpause'],
		"rand"=>$rs['randomstart'],
		"resp"=>$rs['responsive'],
	);	
}
$json= json_encode($json_data);
echo $json;
?>