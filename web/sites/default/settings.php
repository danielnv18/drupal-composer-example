<?php

$config_directories = array();

$settings['hash_salt'] = 'gSbJHYv2h_daNWck8U5d2xzmW8XIn6BFi-075eRHl0a73GPYXDCEQp1Tp-5kX6YbAcM4pMIoUA';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['install_profile'] = 'standard';
$config_directories['sync'] = '../config';

/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
