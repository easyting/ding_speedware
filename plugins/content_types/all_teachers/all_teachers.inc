<?php
/**
 * @file
 * Ctools plugin definition file.
 */

/**
 * General ctools plugin settings.
 */
$plugin = array(
  'title' => t('All teachers'),
  'category' => t('Speedware'),
  'description' => t('Display list of all teachers'),
  'single' => TRUE,
  'render callback' => 'speedware_all_teachers_render',
  'admin title' => 'ding_speedware_content_type_admin_title',
);

function speedware_all_teachers_render() {
  $block = new stdClass();
  $items = array();
  foreach (_speedware_get_all_teachers() as $teacher) {
    $items[] = get_object_vars($teacher);
  }

  $block->content = theme('speedware_teachers', array('items' => $items));

  return $block;
}
