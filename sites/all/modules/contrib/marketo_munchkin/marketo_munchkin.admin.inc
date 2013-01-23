<?php
/**
 * @file
 * Admin settings page for the Marketo Munchkin module.
 */

/**
 * drupal_get_form() form array.
 */
function marketo_munchkin_admin_settings_form($form, &$form_state) {
  $form = array();

  $form['munchkin_code'] = array(
    '#type' => 'textfield',
    '#title' => 'Munchkin code',
    '#maxlength' => 255,
    '#description' => t("The code provided by Marketo.com for the Munchkin tracking service.  Should be something like '123-ABC-123'.  Only paste in the bare code with the dashes."),
    '#default_value' => variable_get('munchkin_code', ''),
  );

  $form['munchkin_url'] = array(
    '#type' => 'textfield',
    '#title' => 'Munchkin URL',
    '#maxlength' => 255,
    '#description' => t("The full URL to the JS file necessary for the Marketo.com tracking service.  The default should suffice.  The leading 'http://' or 'https://' should be removed."),
    '#default_value' => variable_get('munchkin_url', 'munchkin.marketo.net/munchkin.js'),
  );
  
  $form['munchkin_secret_key'] = array(
      '#type' => 'textfield',
      '#title' => 'Munchkin Secret Key',
      '#maxlength' => 255,
      '#description' => t("The secret private key you selected when enabling API tracking at Marketo.com for the Munchkin tracking service.  Should be a string with no spaces.  Only paste in the bare text."),
      '#default_value' => variable_get('munchkin_secret_key', ''),
      '#required' => 0,
  );

  return system_settings_form($form);
}
