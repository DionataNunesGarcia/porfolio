<?php

$databases = [];

# $settings['config_sync_directory'] = '/directory/outside/webroot';


$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;

$settings['config_sync_directory'] = '../config/default';
$settings['config_vcs_directory'] = '../config/default';

$settings['hash_salt'] = '0285f5eec9627d684cff26854db7fff7df8431uwCW8kReQVKDUEcaKbXYsU4XgYduM8AXNNM-jGGdhunFw';

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
