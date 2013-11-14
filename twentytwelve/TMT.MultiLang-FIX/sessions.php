<?php
/*
$sitename = "http://" .$_SERVER["SERVER_NAME"];
echo '1. '.$sitename;
$pagename = $_SERVER["PHP_SELF"]."this/is/a/test";
echo '<br/>2. '.$pagename;
$language = reset( explode('/', substr($_SERVER["REQUEST_URI"],1) ) );
echo '<br/>3. '.$language;
$language1 = preg_replace("/$language/", "$1", "$pagename");
echo '<br/>4 .'.$language1;
*/

?>
<a href="http://localhost/wp2" class="foo">link here</a>
<script src="http://localhost/wp2/wp-content/themes/twentytwelve/TMT.MultiLang-FIX/js/jquery-2.0.3.js"></script>
<script>
$().ready(function(){
	
$('.foo').click(function(e)
{
 	//alert('aaa');
    e.preventDefault();
    window.location = $(this).attr('href') + '?EN';
})
})
</script>
<?php
?>
