<?php 
 
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.16',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'latest_supported_version' => '6.5.24',
  'readme' => 'README.md',
  'key' => 'suitecrm-beanbuilder',
  'author' => 'Antonio Jedvaj <antonio_vrb@hotmail.com>',
  'description' => 'Set of utility classes for SuiteCRM which contain constants for dropdown values and which use builder patter to create SugarBean objects',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'SuiteCRM Bean Builder',
  'published_date' => '2018-09-01 15:19:36',
  'type' => 'module',
  'version' => '0.0.1',
  'remove_tables' => 'prompt',
); 
 
 $installdefs = array (
  'id' => 'suitecrm-beanbuilder',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/src/plugin',
      'to' => 'custom/include/beanbuilder/',
    ),
    1 => 
    array (
      'from' => '<basepath>/src/suitecrm',
      'to' => 'custom/',
    ),
  ),
);
