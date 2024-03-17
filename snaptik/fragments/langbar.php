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
<ul class="dropdown-menu dropdown-lang">
    <li class="lang-item" data-id="en"><a class="dropdown-item" href="<?php echo $basepath; ?>/en/">English</a></li>
    <li class="lang-item" data-id="id"><a class="dropdown-item" href="<?php echo $basepath; ?>/id/">Bahasa Indonesia</a></li>
    <li class="lang-item" data-id="vn"><a class="dropdown-item" href="<?php echo $basepath; ?>/vn/">Ting Việt</a></li>
    <li class="lang-item" data-id="ms"><a class="dropdown-item" href="<?php echo $basepath; ?>/ms/">Bahasa Malaysia</a></li>
    <li class="lang-item" data-id="tr"><a class="dropdown-item" href="<?php echo $basepath; ?>/tr/">Turkish (Turkey)</a></li>
    <li class="lang-item" data-id="jv"><a class="dropdown-item" href="<?php echo $basepath; ?>/jv/">Basa Jawa</a></li>
    <li class="lang-item" data-id="es"><a class="dropdown-item" href="<?php echo $basepath; ?>/es/">Español</a></li>
    <li class="lang-item" data-id="fr"><a class="dropdown-item" href="<?php echo $basepath; ?>/fr/">Français</a></li>
    <li class="lang-item" data-id="de"><a class="dropdown-item" href="<?php echo $basepath; ?>/de/">German</a></li>
    <li class="lang-item" data-id="it"><a class="dropdown-item" href="<?php echo $basepath; ?>/it/">Italian</a></li>
    <li class="lang-item" data-id="pt"><a class="dropdown-item" href="<?php echo $basepath; ?>/pt/">Português</a></li>
    <li class="lang-item" data-id="th"><a class="dropdown-item" href="<?php echo $basepath; ?>/th/">Thailand</a></li>
    <li class="lang-item" data-id="ar"><a class="dropdown-item" href="<?php echo $basepath; ?>/ar/">عَرَبِّ</a></li>
    <li class="lang-item" data-id="ko"><a class="dropdown-item" href="<?php echo $basepath; ?>/ko/">한국어</a></li>
    <li class="lang-item" data-id="ja"><a class="dropdown-item" href="<?php echo $basepath; ?>/ja/">本語</a></li>
    <li class="lang-item" data-id="in"><a class="dropdown-item" href="<?php echo $basepath; ?>/in/">भारतीय भाषाएँ</a></li>
</ul>