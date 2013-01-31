<?php
/**
 * @file
 * new_hr_workflow.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function new_hr_workflow_default_rules_configuration() {
  $items = array();
  $items['rules_new_hr_publish'] = entity_import('rules_config', '{ "rules_new_hr_publish" : {
      "LABEL" : "New HR Publish",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "workflow_rules", "rules" ],
      "ON" : [ "workflow_state_changed" ],
      "IF" : [
        { "workflow_check_state" : { "node" : [ "node" ], "workflow_state" : { "value" : { "15" : "15" } } } }
      ],
      "DO" : [ { "node_publish" : { "node" : [ "node" ] } } ]
    }
  }');
  $items['rules_send_a_notification_email'] = entity_import('rules_config', '{ "rules_send_a_notification_email" : {
      "LABEL" : "Send email when New Careers Review",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "workflow_rules", "rules" ],
      "ON" : [ "workflow_state_changed" ],
      "IF" : [
        { "workflow_check_state" : { "node" : [ "node" ], "workflow_state" : { "value" : { "14" : "14" } } } }
      ],
      "DO" : [
        { "mail" : {
            "to" : "julio.colomer@accellion.com",
            "subject" : "Content posted for review - [node:content-type] - [node:title]",
            "message" : "The following new HR content has been posted for review on [site:url]:\\r\\n\\r\\nTitle: [node:title]\\r\\nContent type: [node:content-type]\\r\\nDate posted: [node:changed]\\r\\nAuthor: [node:author]\\r\\nContent URL: [node:edit-url]",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
