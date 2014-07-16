<?php

// Plugin definition
$plugin = array(
  'title' => t('3 Rows 2/3/1'),
  'category' => t('Custom layouts'),
  'icon' => 'customlayout1.png',
  'theme' => 'customlayout1',
  'css' => 'customlayout1.css',
  'regions' => array(
  	'top_left' => t('Top Left'),
    'top_right' => t('Top Right'),
    'middle_left' => t('Middle Left'),
    'middle_center' => t('Middle Center'),
    'middle_right' => t('Middle Right'),
    'bottom' => t('Bottom'),
  ),
);
