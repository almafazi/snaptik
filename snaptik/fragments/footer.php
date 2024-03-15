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
<footer>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="z-menu">
    <div>
    <h3>Company</h3>
    <ul>
    <li><a href="<?php echo $basepath ?>/about-us">About Us</a></li>
    <li><a href="<?php echo $basepath ?>/contact">Contact</a></li>
    </ul>
    </div>
    <div>
    <h3>Legal</h3>
    <ul>
    <li><a href="<?php echo $basepath ?>/tos">Terms of Service</a></li>
    <li><a href="<?php echo $basepath ?>/privacy-policy">Privacy Policy</a></li>
    </ul>
    </div>
    <div>
    <h3>Tools</h3>
    <ul>
    <li><a href="<?php echo $basepath ?>/download-tiktok-slideshow">Download TikTok Video</a></li>
    <li><a href="<?php echo $basepath ?>/download-tiktok-story">Download TikTok Story</a></li>
    <li><a href="<?php echo $basepath ?>/download-tiktok-mp3">Download TikTok MP3</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="copyright">
    <div class="container footer-copyright">
    <div>&copy; 2024 (v1.1) <a href="." title="SnapTik">SnapTik</a>. All rights reserved.</div>
    </div>
    </div>
</footer>