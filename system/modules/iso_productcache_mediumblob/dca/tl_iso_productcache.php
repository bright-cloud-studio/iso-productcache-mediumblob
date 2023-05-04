<?php

/**
 * Bright Cloud Studio's Add User Fields
 *
 * Copyright (C) 2021 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/add-user-fields
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

$GLOBALS['TL_DCA']['tl_iso_productcache']['fields']['products'] = array
(
  'foreignKey'            => 'tl_iso_product.name',
  'eval'                  => array('csv'=>','),
  'sql'                   =>  "mediumblob NULL",
  'relation'              => array('type'=>'hasMany', 'load'=>'lazy'),
);
