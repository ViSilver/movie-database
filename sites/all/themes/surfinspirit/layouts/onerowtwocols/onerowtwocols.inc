<?php

// Plugin definition
$plugin = array(
  'title' => t('One row, two columns'),
  'category' => t('Custom layouts'),
  'icon' => 'onerowtwocols.png',
  'theme' => 'onerowtwocols',
  'css' => 'onerowtwocols.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
