<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

$modversion['dirname'] = basename(__DIR__);
$modversion['name'] = ucfirst(basename(__DIR__));
$modversion['version'] = '1.0';
$modversion['description'] = 'This is a dummy module.';
$modversion['author'] = 'No One';
$modversion['credits'] = 'nobody@localhost';
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2 or later';
$modversion['license_url'] = 'http://www.gnu.org/licenses/old-licenses/gpl-2.0.html';
$modversion['official'] = 0;
$modversion['image'] = 'icons/dummy.png';

$modversion['hasMain'] = false;

$modversion['onInstall'] = "include/install.inc.php";

// Admin things
$modversion['hasAdmin']   = true;
$modversion['system_menu'] = true;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Manage extension
$modversion['extension'] = true;
$modversion['extension_module'][] = 'system';

// About stuff
$modversion['module_status'] = 'Alpha';
$modversion['status'] = 'Alpha';
$modversion['release_date'] = '08/28/2013';

$modversion['min_xoops'] = '2.6.0';
$modversion['min_php'] = '5.3.7';

// configuration
$modversion['config'][] = array(
    'name' => 'config1',
    'title' => '_MI_DUMMY_CONFIG1',
    'description' => '_MI_DUMMY_CONFIG2_DSC',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => 'this is my test config1 value',
);

$modversion['config'][] = array(
    'name' => 'config2',
    'title' => '_MI_DUMMY_CONFIG2',
    'description' => '_MI_DUMMY_CONFIG2_DSC',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => 'this is my test config2 value',
);
