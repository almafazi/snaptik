<?php
if (isset($_SERVER['HTTPS']) &&
($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
$protocol = 'https://';
}
else {
$protocol = 'http://';
}

$baseurl = '/snaptik';
$basepath = $protocol . $_SERVER['HTTP_HOST'].$baseurl; 
?>
<link rel="alternate" hreflang="x-default" href="<?php echo $basepath; ?>">
<link rel="alternate" hreflang="en" href="<?php echo $basepath; ?>/en/">
<link rel="alternate" hreflang="id" href="<?php echo $basepath; ?>/id/">
<link rel="alternate" hreflang="vi" href="<?php echo $basepath; ?>/vn/">
<link rel="alternate" hreflang="ms" href="<?php echo $basepath; ?>/ms/">
<link rel="alternate" hreflang="tr" href="<?php echo $basepath; ?>/tr/">
<link rel="alternate" hreflang="jv" href="<?php echo $basepath; ?>/jv/">
<link rel="alternate" hreflang="es" href="<?php echo $basepath; ?>/es/">
<link rel="alternate" hreflang="fr" href="<?php echo $basepath; ?>/fr/">
<link rel="alternate" hreflang="de" href="<?php echo $basepath; ?>/de/">
<link rel="alternate" hreflang="it" href="<?php echo $basepath; ?>/it/">
<link rel="alternate" hreflang="pt" href="<?php echo $basepath; ?>/pt/">
<link rel="alternate" hreflang="th" href="<?php echo $basepath; ?>/th/">
<link rel="alternate" hreflang="ar" href="<?php echo $basepath; ?>/ar/">
<link rel="alternate" hreflang="ko" href="<?php echo $basepath; ?>/ko/">
<link rel="alternate" hreflang="ja" href="<?php echo $basepath; ?>/ja/">
<link rel="alternate" hreflang="in" href="<?php echo $basepath; ?>/in/">
