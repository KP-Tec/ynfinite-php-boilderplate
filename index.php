<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Ypsolution\YnfinitePhpClient\YnfiniteClient;
//use Ypsolution\YnfinitePhpClient\StaticPageCache;
/*
if($_SERVER['REQUEST_METHOD'] === 'GET' && YN_STATIC_PAGES) {
    $cachedPage = StaticPageCache::getCachedPage();
    if ($cachedPage) {
        echo $cachedPage;
        exit;
    }
}
*/
$app = YnfiniteClient::create('web/templates');
$app->run();