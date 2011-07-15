<?php

// Include the definition of zen_settings() and zen_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'zen') . '/theme-settings.php';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @return
 *   A form array.
 */
function iggy_settings($saved_settings) {
  // Get the default values from the .info file.
  $defaults = zen_theme_get_default_settings('iggy');

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);


  // Add a place to upload a background image, file path, or background color, etc.
  file_check_directory(file_directory_path(), FILE_CREATE_DIRECTORY, 'file_directory_path');

  // Check for a new uploaded logo, and use that instead.
  if ($file = file_save_upload('background_file', array('file_validate_is_image' => array()))) {
    $parts = pathinfo($file->filename);
    $filename = 'singular_background.'. $parts['extension'];
    if (file_copy($file, $filename, FILE_EXISTS_REPLACE)) {
      $settings['background_path'] = $file->filepath;
    }
  }

/*
 * Create the form using Forms API: http://api.drupal.org/api/6
 */
  $form = array();

  $form['custom'] = array(
    '#tree' => FALSE,
    '#type' => 'fieldset',
    '#title' => t('Site Background Settings'),
  );
  $form['custom']['background_file'] = array(
    '#type' => 'file',
    '#title' => t('Background image'),
    '#maxlength' => 40,
  );
  if (!empty($settings['background_path'])) {
    $form['custom']['background_preview'] = array(
      '#type' => 'markup',
      '#value' => !empty($settings['background_path']) ? theme('image', $settings['background_path'], NULL, NULL, array('width' => '100'), FALSE) : '',
    );
  }
  $form['custom']['background_path'] = array(
    '#type' => 'value',
    '#value' => !empty($settings['background_path']) ? $settings['background_path'] : '',
  );
  $form['custom']['background_repeat'] = array(
    '#title' => t('Tile'),
    '#type' => 'select',
    '#options' => array(
      'no-repeat' => t('Don\'t tile'),
      'repeat-x' => t('Horizontal'),
      'repeat-y' => t('Vertical'),
      'repeat' => t('Both'),
    ),
    '#default_value' => !empty($settings['background_repeat']) ? $settings['background_repeat'] : 'no-repeat',
  );

  // Add the base theme's settings.
  $form += zen_settings($saved_settings, $defaults);

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_layout']); // We don't need to select the base stylesheet.

  // Return the form
  return $form;
}
