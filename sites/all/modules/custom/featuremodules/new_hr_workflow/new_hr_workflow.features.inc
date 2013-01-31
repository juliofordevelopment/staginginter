<?php
/**
 * @file
 * new_hr_workflow.features.inc
 */

/**
 * Implements hook_workflow_features_default_workflow().
 */
function new_hr_workflow_workflow_features_default_workflow() {
  return array(
    'New HR Workflow' => array(
      'name' => 'New HR Workflow',
      'tab_roles' => '8,3',
      'options' => 'a:3:{s:16:"comment_log_node";i:0;s:15:"comment_log_tab";i:0;s:13:"name_as_title";i:0;}',
      'states' => array(
        0 => array(
          'state' => '(creation)',
          'weight' => '-50',
          'sysid' => '1',
          'status' => '1',
        ),
        1 => array(
          'state' => 'review',
          'weight' => '0',
          'sysid' => '0',
          'status' => '1',
        ),
        2 => array(
          'state' => 'publish',
          'weight' => '0',
          'sysid' => '0',
          'status' => '1',
        ),
      ),
      'transitions' => array(
        0 => array(
          'sid' => '(creation)',
          'target_sid' => 'review',
          'roles' => 'author,5,8,3',
        ),
        1 => array(
          'sid' => '(creation)',
          'target_sid' => 'publish',
          'roles' => '8,3',
        ),
        2 => array(
          'sid' => 'review',
          'target_sid' => 'publish',
          'roles' => '8,3',
        ),
        3 => array(
          'sid' => 'publish',
          'target_sid' => 'review',
          'roles' => '8,3',
        ),
      ),
      'node_types' => array(
        0 => array(
          'type' => 'carrers_new',
          'wid' => '4',
        ),
      ),
    ),
  );
}
