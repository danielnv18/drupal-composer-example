<?php

$config_directories = array();

$settings['hash_salt'] = 'Igv_dxsgO4Rv-lq7r6LkaFYyHqMWsSfehG8IKqSQzDY0YxRUPOBdDzozJcnRipvozirFy3Bv3w';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['install_profile'] = 'standard';
$config_directories['sync'] = '../sites/default/files/config_2zodz6sQRIXS5aHULlz9LuNFadfbzKfzwh3nDL8t9NAR3dhH3WlQtm9I0AG8ebIcHtWyEma08g/sync';

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
