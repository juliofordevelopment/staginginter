<?php
/**
 * @file
 * feature_view_new_careers_page.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function feature_view_new_careers_page_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'current_openings';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Current Openings';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Current Openings';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '0';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<h2>You Want to be Part of Something Big. You Want to be Innovative and Creative.</h2>

<strong>At Accellion, you can be part of the team enabling millions of users to share files and collaborate, simply and securely, every day.</strong>

<h3>About Accellion</h3>
Accellion is growing and we are looking for talented people to join our team.  Be part of an innovative startup with a difference.

Accellion’s headquarters are located in Palo Alto, California, with a technology office in Singapore.  Our offices offer a light, airy office environment with free food and drinks.  You can take advantage of the free Palo Alto shuttle which stops right outside our door for easy connection with Caltrain.  You can go for a run or walk along miles of Palo Alto Baylands trails adjacent to the office.  Across the street is the Palo Alto golf course and for those who like thrills the Palo Alto airport is also next door.

Our team includes great minds from leading universities around the globe including Oxford, Berkeley, Stanford, Harvard, University of Chicago, Tufts University, Whitman College, Boston College, Royal Institute of Technology Stockholm, and the Indian Institute of Technology (IIT).  We also have lots of locally grown talent from SJSU, UC Davis, and UCSB.  We encourage you to add your talent to the mix.

<h3>Current Openings</h3>
We are currently hiring for the positions listed below.  If you are interested in joining a talented team and continuing to help build a successful company with innovative products, please send your resume to hr@accellion.com and include the job title in the subject line.';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  /* Footer: Global: Text area */
  $handler->display->display_options['footer']['area']['id'] = 'area';
  $handler->display->display_options['footer']['area']['table'] = 'views';
  $handler->display->display_options['footer']['area']['field'] = 'area';
  $handler->display->display_options['footer']['area']['content'] = '<h3>Seven Reasons to Join</h3>
You will fit right in at Accellion if you like:

<ol>
	<li>Bayside trails</li>
    <li>Great weather</li>
    <li>Chocolate</li>
    <li>Fun Friday lunches</li>
    <li>15 days of PTO your first year</li>
    <li>Chair massages</li>
    <li>A bucket of balls for the driving range</li>
</ol>

<strong>We hope to hear from you soon!</strong>';
  $handler->display->display_options['footer']['area']['format'] = 'full_html';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title_1']['id'] = 'title_1';
  $handler->display->display_options['fields']['title_1']['table'] = 'node';
  $handler->display->display_options['fields']['title_1']['field'] = 'title';
  $handler->display->display_options['fields']['title_1']['label'] = '';
  $handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title_1']['element_default_classes'] = FALSE;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['field_case_study_description']['id'] = 'field_case_study_description';
  $handler->display->display_options['fields']['field_case_study_description']['table'] = 'field_data_field_case_study_description';
  $handler->display->display_options['fields']['field_case_study_description']['field'] = 'field_case_study_description';
  $handler->display->display_options['fields']['field_case_study_description']['label'] = '';
  $handler->display->display_options['fields']['field_case_study_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_case_study_description']['element_default_classes'] = FALSE;
  /* Sort criterion: Content: Title */
  $handler->display->display_options['sorts']['title']['id'] = 'title';
  $handler->display->display_options['sorts']['title']['table'] = 'node';
  $handler->display->display_options['sorts']['title']['field'] = 'title';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'careers' => 'careers',
  );
  $handler->display->display_options['filters']['type']['group'] = '0';

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['empty'] = TRUE;
  $handler->display->display_options['header']['area']['content'] = 'We are currently hiring for the positions listed below. If you are interested in joining a talented team and continuing to help build a successful company with innovative products, please send your resume to <a href="mailto:jobs@accellion.com">jobs@accellion.com</a> and include the job title in the subject line.';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['footer'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = 'company/careers/[title]';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'careers' => 'careers',
    'carrers_new' => 'carrers_new',
  );
  $handler->display->display_options['filters']['type']['group'] = '0';
  $export['current_openings'] = $view;

  return $export;
}
