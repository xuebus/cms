<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/29
 * Time: 11:21
 */

require substr(dirname(__FILE__),0,-6).'/ini.inc.php';
global $_tpl;
Validate::checkSession();
$_tpl->display('main.tpl');
