<?
$title='404 Not Found!';foreach (cfg::$menu as $m){if($m[1]==PAGE['view']){$title = $m[0];}}
?>
<meta charset="utf-8">
<noscript>&lt;meta http-equiv="refresh" content="0; URL=/noscript/" /&gt;</noscript>
<title><?echo cfg::$site_name?> | <?echo $title?> </title>
<base href="#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="<?echo cfg::$seo_description?>">
<meta name="keywords" content="<?echo cfg::$seo_keywords?>">
<meta name="author" content="<?echo cfg::$seo_author?>">
<meta name="generator" content="aaoztoprak">
<!-- Styles -->
<link href="<?php echo cfg::$subdir;?>/css/default.css" rel="stylesheet">
<link href="<?php echo cfg::$subdir;?>/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo cfg::$subdir;?>/css/font-awesome.min.css">
<link href="<?php echo cfg::$subdir;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Scripts -->
<script src="<?php echo  cfg::$subdir;?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo  cfg::$subdir;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo cfg::$subdir;?>/js/custom.js" ></script>