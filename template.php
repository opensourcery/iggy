<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Iggy: the default Volunteer Rally theme.
 */


/**
 * Implementation of HOOK_theme().
 */
function iggy_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  return $hooks;
}

/**
 * In the context of the way action center is using events, the All
 * day appended to dates never makes sense. Here an empty string is
 * returned.
 */
function iggy_date_all_day_label() {
  return '';
}

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function iggy_preprocess_block(&$vars, $hook) {
  switch ($vars['block']->delta) {
    case 'ac_location-block_1':
      $vars['classes_array'][] = 'clearfix';
      break;
  }
}

/**
 * Override theme_jcalendar_view to get rid of the hard-coded 'more' link.
 */
function iggy_jcalendar_view($node) {
  $output = node_view($node, TRUE);
  return $output;
}

/**
 * Override theme_date_single_day_element() to change labels.
 */
function iggy_date_single_day_element($form) {
  // Cascade the required value down into the subcomponent for theme_form_element to find it.
  if ($form['#required']) {
    $form['value']['date']['#required'] = TRUE;
  }

  // Render the 'from' date
  // Set titles in the individual form elements.
  $form['value']['date']['#title'] = 'Date';
  $output = drupal_render($form['value']['date']);
  
  // Container to float the two times; though this doesn't work.
  // @todo: figure out how the CSS from date module works and whether it can
  // be repurposed here.
  $output .= '<div class="container-inline-date">';

  $form['value']['time']['#title'] = 'Start time';
  $output .= drupal_render($form['value']['time']);
  
  $output .= drupal_render($form['value2']['date']);
  
  $form['value2']['time']['#title'] = 'End time';
  $output .= drupal_render($form['value2']['time']);
  
  $output .= '</div>'; 
  
  return $output;
}
