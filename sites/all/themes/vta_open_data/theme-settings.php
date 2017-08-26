<?php
/**
 * @file
 * Theme settings.
 */

/**
 * Implements theme_settings().
 */
function vta_open_data_form_system_theme_settings_alter(&$form, &$form_state) {
  global $theme;
  // Ensure this include file is loaded when the form is rebuilt from the cache.
  $form_state['build_info']['files']['form'] = drupal_get_path('theme', 'vta_open_data') . '/theme-settings.php';

  //Additional theme settings.
  $form['copyright'] = array(
    '#title' => t('Copyright'),
    '#type' => 'fieldset',
  );
  $copyright = theme_get_setting('copyright', 'vta_open_data');
  $form['copyright']['copyright'] = array(
    '#title' => t('Footer text'),
    '#type' => 'text_format',
    '#format' => 'html',
    '#default_value' => isset($copyright['value']) ? $copyright['value'] : t('&copy; Santa Clara Valley Transportation Authority<br /><span stule="font-size:.6em;"Powered by <a href="http://github.com/vta/dkan">DKAN</a></span>'),
  );
  // Log In Display.
  $display_login_menu = (theme_get_setting('display_login_menu', 'vta_open_data') === NULL) ? 1 : theme_get_setting('display_login_menu', 'vta_open_data');

  $form['theme_settings']['display_login_menu'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display login menu'),
    '#default_value' => $display_login_menu,
  );
  // Hero fieldset.
  $form['hero'] = array(
    '#type' => 'fieldset',
    '#title' => t('Hero Unit'),
    '#group' => 'general',
  );
  // Upload field.
  $hero = theme_get_setting('hero_file', 'vta_open_data');
  $form['hero']['hero_file'] = array(
    '#type' => 'managed_file',
    '#title' => t('Upload a new photo for the hero section background'),
    '#description' => t('<p>The hero unit is the large featured area located on the front page. 
      This theme supplies a default background image for this area. You may upload a different 
      photo here and it will replace the default background image.</p><p>Max. file size: 2 MB
      <br>Recommended pixel size: 1920 x 400<br>Allowed extensions: .png .jpg .jpeg</p>'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/',
    '#default_value' => !empty($hero) ? $hero : NULL,
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Solid color background.
  $form['hero']['background_option'] = array(
    '#type' => 'textfield',
    '#title' => t('Solid color option'),
    '#description' => t('<p>Enter a hex value here to use a solid background color rather than an image in the hero unit. Make sure the image field above is empty.'),
    '#required' => FALSE,
    '#default_value' => theme_get_setting('background_option', 'vta_open_data'),
    '#element_validate' => array('_vta_open_data_background_option_setting'),
  );

  // Add svg logo option.
  $form['logo']['settings']['svg_logo'] = array(
    '#type' => 'managed_file',
    '#title' => t('Upload an .svg version of your logo'),
    '#description' => t('<p>Be sure to also add a .png version of your logo with the <em>Upload logo image</em> field above for older browsers that do not support .svg files. Both files should have the same name, only the suffix should change (i.e. logo.png & logo.svg).</p>'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/',
    '#default_value' => theme_get_setting('svg_logo', 'nuboot_radix'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('svg'),
    ),
  );

  $form['#submit'][] =  $theme . '_hero_system_theme_settings_form_submit';

  // Return the additional form widgets.
  return $form;
}
/**
 * Helper function to validate background color field
 */
function _vta_open_data_background_option_setting($element, &$form, &$form_state) {
  if(!empty($element['#value'])) {
    $hex = $element['#value'];
    // Must be a string.
    $valid = is_string($hex);
    // Hash prefix is optional.
    $hex = ltrim($hex, '#');
    // Must be either RGB or RRGGBB.
    $length = strlen($hex);
    $valid = $valid && ($length === 3 || $length === 6);
    // Must be a valid hex value.
    $valid = $valid && ctype_xdigit($hex);
    if ($valid) {
      return;
    }
    else {
      form_error($element, t('Must be a valid hexadecimal CSS color value.'));
    }
  }
}

/**
 * Submit function for theme settings form information.
 */
function vta_open_data_site_information_theme_settings_form_submit(&$form, &$form_state) {
  variable_set('site_name', $form_state['values']['site_name']);
  variable_set('site_slogan', $form_state['values']['site_slogan']);
  variable_set('site_mail', $form_state['values']['site_mail']);
}

/**
 * Submit function for theme settings form.
 */
function vta_open_data_hero_system_theme_settings_form_submit(&$form, &$form_state) {
  if ($form_state['values']['hero_file']) {
    $fid = $form_state['values']['hero_file'];
    vta_open_data_file_set_permanent($fid);
  }
  if ($form_state['values']['svg_logo']) {
    $fid = $form_state['values']['svg_logo'];
    vta_open_data_file_set_permanent($fid);
  }
}

/**
 *  Sets file to FILE_STATUS_PERMANENT so it won't be erased by cron.
 */
function vta_open_data_file_set_permanent($fid) {
  $file = file_load($fid);
  $file->status = FILE_STATUS_PERMANENT;
  file_save($file);
  file_usage_add($file, 'theme', 'file', $fid);
  vta_open_data_file_insert($file);
}

/**
* Implements hook_file_insert().
*/
function vta_open_data_file_insert($file) {
  $file->filename = str_replace(' ', '-', $file->filename);
  $file->filename = preg_replace("/[^\-.a-zA-Z0-9]/", "", $file->filename);
  $name = 'public://' . $file->filename;
  file_move($file, $name, 'FILE_EXIST_REPLACE');
}