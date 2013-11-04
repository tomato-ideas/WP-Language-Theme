/*
 * banner-slide plugin (Page admin)
 *
 */

/* SELECT SQL */       
jQuery().ready(function() {



	jQuery('.add-image-holder').click(function(){
		//console.log('new slide num ='+banner_slide_num);
		banner_slide_num++;
		jQuery('#banner-all').before('<div class="image-holder"><h3>New Banner</h3><div><h5>Image</h5><a href="media-upload.php?type=image&amp;TB_iframe=true" class="thickbox" onclick="current_banner_slide=\''+banner_slide_num+'\';"> <img  id="img_preview_slide'+banner_slide_num+'" class="img-preview" src="'+banner_slide_image_placeholder+'" /></a><h5>Website URL</h5><input type="hidden" id="img_slide'+banner_slide_num+'"  name="banners_slides[slide'+banner_slide_num+'][img]"  ><input type="hidden"  name="banners_slides[slide'+banner_slide_num+'][id]" value="0" /><input type="text"  name="banners_slides[slide'+banner_slide_num+'][url]"  /><input type="hidden" value="0" id="chk_slide'+banner_slide_num+'" name="banners_slides[slide'+banner_slide_num+'][chk]" /><a href="#" class="remove">Remove</a></div></div>');
	});
	//console.log('2 : add banner success !!');
	

	
	jQuery.getJSON("../wp-content/plugins/banner-slide/service/service_sql_select.php", function(data) {
	//console.log('4 : getJSON  success !!');
	
		total = data;
        for (var i = 1; i < total.length; i++) {
            jQuery("#banner-all").after('<div class="image-holder" id="image-holder' + data[i].id + '"><h3>Banner</h3><div><h5>Image</h5><a href="media-upload.php?type=image&amp;TB_iframe=true" class="thickbox" onclick="current_banner_slide=' + data[i].id + '"><img id="img_preview_slide' + data[i].id + '" class="img-preview" src="' + data[i].img + '" /></a><input type="hidden" id="img_slide' + data[i].id + '" name="banners_slides[slide' + data[i].id + '][img]" value="' + data[i].img + '"><input type="hidden" name="banners_slides[slide' + data[i].id + '][id]" value="' + data[i].id + '" /><input type="hidden" name="banners_slides[slide' + data[i].id + '][chk]" value="0" autocomplete="off" /><h5>Website URL</h5><input type="text" name="banners_slides[slide' + data[i].id + '][url]" value="' + data[i].url + '" /><a href="admin.php?page=banner_slide&rm=' + data[i].id + '" class="remove">Remove</a></div></div><script>banner_slide_num = ' + data[i].id + ';</script>');
        }
        //console.log('5 : loop banner  success !!');

        jQuery("#detailMenu-sizeW").find('input').attr('value', data[0].wid);	
		jQuery("#detailMenu-sizeH").find('input').attr('value', data[0].hei);
        jQuery("#detailMenu-sizeAnimduration").find('input').attr('value', data[0].animd);
        jQuery("#detailMenu-sizeAnimspeed").find('input').attr('value', data[0].anims);
        jQuery("#detailMenu-sizeNavi").val(data[0].navi);
        jQuery("#detailMenu-sizeBull").val(data[0].bull);
        jQuery("#detailMenu-sizeUsec").val(data[0].usec);
        jQuery("#detailMenu-sizeHove").val(data[0].hove);
        jQuery("#detailMenu-sizeRand").val(data[0].rand);
        jQuery("#detailMenu-sizeResp").val(data[0].resp);  
        
        
        
        	jQuery('.image-holder h3').click(function(){
				jQuery(this).next('div').slideToggle();
			});
			//console.log('6 : slide toggle success !!');
        
        
        
		});
		//console.log('3 : value admin success !!');
		
});
//console.log('1 : bs-ui_admin ready !!');




var current_banner_slide = '';
	
function send_to_editor(html) {
	var source = html.match(/src=\".*\" alt/);
	source = source[0].replace(/^src=\"/, "").replace(/" alt$/, "");
	jQuery('#img_preview_slide'+current_banner_slide).attr('src', source).css('background', 'none');
	jQuery('#chk_slide'+current_banner_slide).val('1');
	jQuery('#img_slide'+current_banner_slide).val(source);
	tb_remove();
}





function chkNumber(ele) {
	var vchar = String.fromCharCode(event.keyCode);
    
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
    ele.onKeyPress = vchar;
}