<?php
define('APPROOT','D:/development/www/vhosts/ahad-bio.pk/app/');
$classes = [
    'pageHeader.cls.php',
    'topHeader.cls.php',
    'pageNav.cls.php',
    'aboutSection.cls.php',
    'bannerSection.cls.php',
    'gallerySection.cls.php',
    'testinomialSection.cls.php',
    'serviceSection.cls.php',
    'contactSection.cls.php',
    'page.cls.php',
    'pageFooter.cls.php',
];

foreach ($classes as $class) {
    require_once APPROOT . $class;
}

$page = new Page;
$html='';
$html.= $page->renderPageHeader();
$html.= $page->renderPageBody();
 echo $html;
?>