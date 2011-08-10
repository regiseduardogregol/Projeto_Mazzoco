<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title><?php echo $title ?></title>
    <link href="<?php echo base_url(); ?>stylesheet/stylesheet.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>stylesheet/reset.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>stylesheet/typography.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>stylesheet/prettyPhoto.css" rel="Stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>stylesheet/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" type="text/css" />	
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />
    <script src="<?php echo base_url(); ?>javascript/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>tinymce/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>javascript/jquery-ui-1.8.2.custom.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>javascript/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>javascript/tools.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>javascript/tools-form.js" type="text/javascript" charset="utf-8"></script>	
    <script src="<?php echo base_url(); ?>javascript/tools-photos.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>javascript/tools-results.js" type="text/javascript" charset="utf-8"></script>    
    <script src="<?php echo base_url(); ?>javascript/tools-dashboard.js" type="text/javascript" charset="utf-8"></script>  	    
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="author" content="Leandro Augusto de Carvalho & Régis Eduardo Weizenmann Gregol" />
    <meta name="description" content="Site Mazzoco" />
    <meta name="keywords" content="" />
    <meta name="reply-to" content="" />
</head>
<body>
	<?php $this->load->view($content)?>
</body>
</html>

