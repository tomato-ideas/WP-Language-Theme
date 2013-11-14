jQuery(function () {
jQuery.getJSON("../wp-content/plugins/banner-slide/db.php", function (data){
console.log(data[0].wid);
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
            
        })
})

function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
    ele.onKeyPress = vchar;
}

//function addNewImageHolder() {
//    console.log('new slide num =' + banner_slide_num);
//    banner_slide_num++;
//    jQuery('#banner-all').before('<div class="image-holder"><h3>New Banner</h3><div><h5>Image</h5><a href="media-upload.php?type=image&amp;TB_iframe=true" class="thickbox" onclick="current_banner_slide=\'' + banner_slide_num + '\';"> <img  id="img_preview_slide' + banner_slide_num + '" class="img-preview" src="' + banner_slide_image_placeholder + '" /></a><h5>Website URL</h5><input type="hidden" id="img_slide' + banner_slide_num + '"  name="banners_slides[slide' + banner_slide_num + '][img]"  ><input type="hidden"  name="banners_slides[slide' + banner_slide_num + '][id]" value="0" /><input type="text"  name="banners_slides[slide' + banner_slide_num + '][url]"  /><input type="hidden" value="0" id="chk_slide' + banner_slide_num + '" name="banners_slides[slide' + banner_slide_num + '][chk]" /><a href="#" class="remove">Remove</a></div></div>');
//}

function toggleImageHolder() {
    jQuery(this).next('div').slideToggle();   
}

//         $.each(data,function(i,k){

//             console.log('i:'+i+' k:'+JSON.stringify(k)+'  data:'+data[i].province_id);
//        $("#detailMenu-sizeW").find('input').val(data[0].wid);


//        $("#data1").append(data[1].id);
//        $('#data2').append(data[1].img);
//        $("#data2").attr('id', 'data' + data[1].img);
//        $("#data3").find('b').append(data[1].img);
//	 });
jQuery(document).ready(function () {
//    jQuery('.image-holder h3').click(toggleImageHolder);
    //jQuery('.add-image-holder').click(addNewImageHolder);
})