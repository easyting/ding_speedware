<?php
/**
 * @file
 * Ctools plugin definition file.
 */

module_load_include('inc', 'ding_speedware', 'ding_speedware.service');

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
function ding_speedware_all_instruments_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();

  $items = array();
  foreach (_speedware_get_all_instruments() as $instrument) {
    $details = get_object_vars($instrument);
    // Always empty.
    unset($details['UnderKategoriList']);
    $items[] = $details;
  }

  $block->title = t($conf['override_title'] ? $conf['override_title_text'] : 'Instruments');
  $block->content = theme('speedware_instruments', array('items' => $items));
  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_all_instruments_plugin_edit_form($form, &$form_state) {
  return $form;
}
