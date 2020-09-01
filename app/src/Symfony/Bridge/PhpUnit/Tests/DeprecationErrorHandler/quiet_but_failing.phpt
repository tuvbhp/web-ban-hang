--TEST--
Test DeprecationErrorHandler when failing and not verbose
--FILE--
<?php

$k = 'SYMFONY_DEPRECATIONS_HELPER';
putenv($k.'='.$_SERVER[$k] = $_ENV[$k] = 'max[total]=0&verbose=0');
putenv('ANSICON');
putenv('ConEmuANSI');
putenv('TERM');

$vendor = __DIR__;
while (!file_exists($vendor.'/vendor')) {
    $vendor = dirname($vendor);
}
define('PHPUNIT_COMPOSER_INSTALL', $vendor.'/vendor/autoload.php');
require PHPUNIT_COMPOSER_INSTALL;
require_once __DIR__.'/../../bootstrap.php';
eval(<<<'EOPHP'
namespace PHPUnit\Util;

class Test
{
    public static function getGroups()
    {
        return array();
    }
}
EOPHP
);
require __DIR__.'/fake_vendor/autoload.php';
require __DIR__.'/fake_vendor/acme/outdated-lib/outdated_file.php';

?>
--EXPECTF--
Remaining indirect deprecation notices (1)

  1x: deprecatedApi is deprecated! You should stop relying on it!
    1x in SomeService::deprecatedApi from acme\lib
