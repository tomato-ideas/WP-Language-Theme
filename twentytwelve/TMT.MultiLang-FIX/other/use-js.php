<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jquery use json data</title>
        <style>
            body {
                font-family:sans-serif;
            }
            .bd {
                background-color:red;
                margin-bottom:2px;
            }
        </style>
        <script type="text/javascript" src="js/jquery-2.0.3.js"></script>
<!--        <script src="js/banner_slide_uploader.js"></script>-->
        <script src="js/aj.js"></script>
        <link rel="stylesheet" type="text/css" href="css/banner_slide_admin.css">
    </head>
    
    <body>
        <form action="" method="POST" onsubmit="this.submit(); this.reset(); return false">
            <input type="hidden" name="frmUniqid" value="<?php echo uniqid() ?>" />
            <div id="banner-slide-all">
                <div id="banner-slide-left">
                    <div id="topic-left">
                        <h3>Menu</h3>
                    </div>
                    <div class="add-image-holder">
                        <h3>Add Banner Images</h3>
                    </div>
                    <div id="detailMenu">
                        <div style="height:5px;"></div>
                        <!-- Size-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeW">
                                <h3>W :&nbsp;</h3>
                                <input placeholder="300" type="text" name="banners_slides[slide1][wid]" onkeypress="return chkNumber(this)" value="" />
                            </div>
                            <div id="detailMenu-sizeH">
                                <h3>H :&nbsp;</h3>
                                <input placeholder="600" type="text" name="banners_slides[slide1][hei]" onkeypress="return chkNumber(this)" value="" />
                            </div>
                        </div>
                        <!-- End Size-->
                        <!-- Animate Duration-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeAnimduration">
                                <h3>Animduration :&nbsp;</h3>
                                <input placeholder=" 2000" type="text" name="banners_slides[slide1][animd]" onkeypress="return chkNumber(this)" value="" />
                            </div>
                        </div>
                        <!-- End Animate Duration-->
                        <!-- Animate Speed-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeAnimspeed">
                                <h3>Animspeed :&nbsp;</h3>
                                <input placeholder=" 4000" type="text" name="banners_slides[slide1][anims]" onkeypress="return chkNumber(this)" value="" />
                            </div>
                        </div>
                        <!-- End Animate Speed-->
                        <!-- Show Show Navigation-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Navigation :&nbsp;</h3>
                                <select id="detailMenu-sizeNavi" name="banners_slides[slide1][navi]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Show Navigation-->
                        <!-- Show Bullet-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Bullet :&nbsp;</h3>
                                <select id="detailMenu-sizeBull" name="banners_slides[slide1][bull]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Show Bullet-->
                        <!-- Show Usecaptions-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Usecaptions :&nbsp;</h3>
                                <select id="detailMenu-sizeUsec" name="banners_slides[slide1][usec]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Show Usecaptions-->
                        <!-- Show HoverPause-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Hover Pause :&nbsp;</h3>
                                <select id="detailMenu-sizeHove" name="banners_slides[slide1][hove]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Show HoverPause-->
                        <!-- Random Start-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Random Start :&nbsp;</h3>
                                <select id="detailMenu-sizeRand" name="banners_slides[slide1][rand]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Random Start-->
                        <!-- Use Responsive-->
                        <div class="detailMenu-size">
                            <div id="detailMenu-sizeShownav">
                                <h3>Responsive :&nbsp;</h3>
                                <select id="detailMenu-sizeResp" name="banners_slides[slide1][resp]">
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Use Responsive-->
                        <div style="height:5px;"></div>
                    </div>
                    <div class="detailMenu-sizes">
                        <div id="shortcode">
                            <h3>Short Code :&nbsp;</h3>
                            <input placeholder="Copy Here !!" type="text" value="<?php echo('[banner_slide]') ?>" />
                        </div>
                    </div>
                    <div class="detailMenu-sizes">
                        <div id="fullcode">
                            <h3>Page Code :&nbsp;</h3>
                            <input placeholder="Copy Here !!" type="text" value="<?php echo('<?php echo banner_slide_slider(); ?>') ?>" />
                        </div>
                    </div>
                    <input class="save" type="submit" name='submit' class="button-primary" value="save" />
                </div>
                <div id="banner-slide-right">
                    <div id="topic-right">
                        <h3>Banner</h3>
                    </div>
                    <script>
                        var banner_slide_num = 0;
                    </script>
                    <div>
                        <div id="banner-all"></div>
                    </div>
                    <script>
                        var banner_slide_image_placeholder = 'images/upload_placeholder.jpg';
                    </script>
                </div>
            </div>
        </form>
    </body>

</html>