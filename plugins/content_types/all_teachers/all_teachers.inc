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
  'edit form' => 'ding_speedware_all_teachers_plugin_edit_form',
);

/**
 * Plugin rendering.
 */
function speedware_all_teachers_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();
  $items = array();
  foreach (_speedware_get_all_teachers() as $teacher) {
    $items[] = get_object_vars($teacher);
  }

  $block->title = t($conf['override_title'] ? $conf['override_title_text'] : 'Teachers');
  $block->content = theme('speedware_teachers', array('items' => $items));

  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_all_teachers_plugin_edit_form($form, &$form_state) {
  return $form;
}
