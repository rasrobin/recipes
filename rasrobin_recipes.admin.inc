<?php
/**
 * The form - admin e-mail form
 */
function rasrobin_recipes_set_default_mail_form($form, &$form_state) {
  $form = [];
  
  $form['rasrobin_recipes_default_mail'] = [
    '#type' => 'emailfield', 
    '#title' => t('Default e-mail for current language'), 
    '#default_value' => variable_get('rasrobin_recipes_default_mail'),     
    '#required' => TRUE,
  ];

  return system_settings_form($form);
}