--TEST--
Test HttpKernelInterface
--INI--
display_errors=1
--FILE--
<?php

$_SERVER['SCRIPT_FILENAME'] = null;

require __DIR__.'/kernel-loop.php';

?>
--EXPECTF--
OK Kernel (env=dev) foo_bar
OK Kernel (env=dev) foo_bar
0
