<?php
/**
 * @file
 * feature_careers_new_content_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_careers_new_content_type_node_info() {
  $items = array(
    'carrers_new' => array(
      'name' => t('Carrers - New'),
      'base' => 'node_content',
      'description' => t('New Job Offer Template to include Kevin Curran\'s requests.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
