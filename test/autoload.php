<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/12/26
 * Time: 13:51
 */
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once '../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
return $loader;