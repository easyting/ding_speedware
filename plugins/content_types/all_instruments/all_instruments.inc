<?php
/**
 * @file
 * Ctools plugin definition file.
 */

/**
 * General ctools plugin settings.
 */
$plugin = array(
  'title' => t('All instruments'),
  'category' => t('Speedware'),
  'description' => t('Display list of all instruments'),
  'single' => TRUE,
  'render callback' => 'ding_speedware_all_instruments_render',
  'admin title' => 'ding_speedware_content_type_admin_title',
  'edit form' => 'ding_speedware_all_instruments_plugin_edit_form',
);

/**
 * Plugin rendering.
 */
function ding_speedware_all_instruments_render() {
  $block = new stdClass();

  $items = array();
  foreach (_speedware_get_all_instruments() as $instrument) {
    $details = get_object_vars($instrument);
    // Always empty.
    unset($details['UnderKategoriList']);
    $items[] = $details;
  }

  $block->content = theme('speedware_instruments', array('items' => $items));
  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_all_instruments_plugin_edit_form($form, &$form_state) {
  // Use specific title handling - hide pane title if no content is present.
  // Standard pane title handling does not provide such functionality,
  // so use custom title field and hide the standard ones.
  unset($form['override_title']);
  unset($form['override_title_text']);
  unset($form['override_title_markup']);

  $form['all_instruments_custom_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Pane title'),
    '#default_value' => t(!empty($form_state['conf']['all_instruments_custom_title']) ? $form_state['conf']['all_instruments_custom_title'] : t('Concerts')),
  );

  return $form;
}

/**
 * Plugin edit form submit handler.
 * Saves the data from the form.
 */
function ding_speedware_all_instruments_plugin_edit_form_submit($form, &$form_state) {
  $form_state['conf']['all_instruments_custom_title'] = $form_state['values']['all_instruments_custom_title'];
}
