<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo("name") ?></title>
<meta name="description" content="">
<!-- <meta name="viewport" content="width=640, initial-scale=1"> -->
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="viewport" content="width=640, initial-scale=0.5, user-scalable=no">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css.map">
<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/sweetalert.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/sweetalert.css">
<script type="text/javascript">
function popthisUp(str){
	var share_url        =    "<?php the_permalink(); ?>" ;
	var share_image      =    "";
	var title            =    "<?php wp_title(); ?>";
	var description      =    str;
	var FB_url           =    "http://www.facebook.com/sharer.php?s=100&p[title]="+(title)+"&p[summary]="+description+"&p[url]="+encodeURIComponent(share_url)+"&p[images][0]="+(share_image);
	var GP_url           =    "https://plus.google.com/share?url="+encodeURIComponent(share_url);
	var TW_url           =    "http://twitter.com/home?status="+escape(title)+"+"+encodeURIComponent(share_url);
	var Pt_url           =    "http://pinterest.com/pin/create/bookmarklet/?media="+encodeURIComponent(share_image)+"&url="+encodeURIComponent(share_url)+"& is_video=false&description="+description+"";
	var TB_url           =    "http://www.tumblr.com/share/photo?source="+encodeURIComponent(share_image)+"&caption="+(description)+"&clickthru="+encodeURIComponent(share_url);
	var LK_url           =    "http://www.linkedin.com/shareArticle?mini=true&url="+encodeURIComponent(share_url)+"&title="+(title)+"&source="+encodeURIComponent(share_url);
	
	
	var socialtext = '<a style="color:#F8BB86;cursor:pointer;margin-right:10px;" target="_blank" href="'+LK_url+'"><img src="http://qa-thepartnership.inkriti.net/wp-content/themes/partnership/assets/img/social-linkedin.png" /><a>';
	var socialtext2 = '<a style="color:#F8BB86;cursor:pointer;margin-right:10px;" target="_blank" href="'+FB_url+'"><img src="http://qa-thepartnership.inkriti.net/wp-content/themes/partnership/assets/img/social-fb.png" /><a>';
	var socialtext3 = '<a style="color:#F8BB86;cursor:pointer;margin-right:10px;" target="_blank" href="'+TW_url+'"><img src="http://qa-thepartnership.inkriti.net/wp-content/themes/partnership/assets/img/social-twitter.png" /><a>';
	var socialtext4 = '<a style="color:#F8BB86;cursor:pointer;margin-right:10px;" target="_blank" href=""><img src="http://qa-thepartnership.inkriti.net/wp-content/themes/partnership/assets/img/social-youtube_active.png" /><a>';
	var socialtext5 = '<a style="color:#F8BB86;cursor:pointer;margin-right:10px;" target="_blank" href="'+GP_url+'"><img src="http://qa-thepartnership.inkriti.net/wp-content/themes/partnership/assets/img/social-google.png" /><a>';

	swal({   title: "Social Share!",   text: socialtext+socialtext2+socialtext3+socialtext4+socialtext5,   html: true , showConfirmButton: true });
}
function redirectme(){
	window.location = "www.google.com";
}
</script>
<?php wp_head(); ?>
</head>
<body>

<!-- Content -->
<div class="container" style="padding-bottom: 0px;">
  <?php include ("includes/mainnav.php"); ?>