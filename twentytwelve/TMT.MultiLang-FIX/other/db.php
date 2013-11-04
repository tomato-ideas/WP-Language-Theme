<?php
//require_once('../../../wp-config.php');
//require_once('../../../wp-includes/wp-db.php');

$sql = 'SELECT * FROM '.BANNERSLIDE_DB_TABLE;
    $qr=mysql_query($sql);
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


    global $wpdb;
        $uniq = get_option('banner_slide_uniqid');
    
    if ($_POST['frmUniqid'] !=  $uniq  ) {
        update_option( 'banner_slide_uniqid', $_POST['frmUniqid']);
        
        if( $_POST['banners_slides'] ) {
            foreach($_POST['banners_slides'] as $slidekey=>$slide)  {
                
                if($slide['id'] == 0 ) {
                    
                    if($slide['chk'] != 0) {
                        $wpdb->insert(BANNERSLIDE_DB_TABLE, array('idx'=>$slide['id'], 'imgurl'=>$slide['img'], 'linkurl'=>$slide['url'], 'width'=>$slide['wid'], 'height'=>$slide['hei'], 'animduration'=>$slide['animd'], 'animspeed'=>$slide['anims'], 'navigation'=>$slide['navi'], 'bullet'=>$slide['bull'], 'usecaptions'=>$slide['usec'], 'hoverpause'=>$slide['hove'], 'randomstart'=>$slide['rand'], 'responsive'=>$slide['resp'] )); 
                    } 
                }else {
                    $updatesql = 'UPDATE  '.BANNERSLIDE_DB_TABLE.' set wp_banner.imgurl = "'.$slide['img'].'" ,wp_banner.linkurl = "'.$slide['url'].'" ,wp_banner.width = "'.$slide['wid'].'" ,wp_banner.height = "'.$slide['hei'].'" ,wp_banner.animduration = "'.$slide['animd'].'" ,wp_banner.animspeed = "'.$slide['anims'].'" ,wp_banner.navigation = "'.$slide['navi'].'" ,wp_banner.bullet = "'.$slide['bull'].'" ,wp_banner.usecaptions = "'.$slide['usec'].'" ,wp_banner.hoverpause = "'.$slide['hove'].'" ,wp_banner.randomstart = "'.$slide['rand'].'" ,wp_banner.responsive = "'.$slide['resp'].'" WHERE wp_banner.idx = "'.$slide['id'].'"';
                    $updated = $wpdb->query($updatesql);
                }
            }
        }
    }
    
    if( $_GET['rm']) {
        $delsql = 'DELETE from wp_banner WHERE idx = '.$_GET['rm'].';';
        $deled = $wpdb->query($delsql);
    }
    
    $banners = $wpdb->get_results( ' SELECT wp_banner.idx, wp_banner.imgurl, wp_banner.linkurl, wp_banner.width, wp_banner.height, wp_banner.animduration, wp_banner.animspeed, wp_banner.navigation, wp_banner.bullet, wp_banner.usecaptions, wp_banner.hoverpause, wp_banner.randomstart, wp_banner.responsive FROM `wp_banner`');
    ?>