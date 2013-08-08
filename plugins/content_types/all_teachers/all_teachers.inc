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
function speedware_all_teachers_render() {
  $block = new stdClass();
  $items = array();
  foreach (_speedware_get_all_teachers() as $teacher) {
    $items[] = get_object_vars($teacher);
  }

  $block->content = theme('speedware_teachers', array('items' => $items));

  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_all_teachers_plugin_edit_form($form, &$form_state) {
  // Use specific title handling - hide pane title if no content is present.
  // Standard pane title handling does not provide such functionality,
  // so use custom title field and hide the standard ones.
  unset($form['override_title']);
  unset($form['override_title_text']);
  unset($form['override_title_markup']);

  $form['all_teachers_custom_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Pane title'),
    '#default_value' => t(!empty($form_state['conf']['all_teachers_custom_title']) ? $form_state['conf']['all_teachers_custom_title'] : t('Teachers')),
  );

  return $form;
}

/**
 * Plugin edit form submit handler.
 * Saves the data from the form.
 */
function ding_speedware_all_teachers_plugin_edit_form_submit($form, &$form_state) {
  $form_state['conf']['all_teachers_custom_title'] = $form_state['values']['all_teachers_custom_title'];
}
