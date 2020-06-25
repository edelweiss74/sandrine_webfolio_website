<?php

// @codingStandardsIgnoreFile

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/dev.services.yml';

$config['system.logging']['er$settings[\'cache\'][\'bins\'][\'render\']ror_level'] = 'verbose';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['cache']['bins']['render'] = 'cache.backend.null';

$settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';

$settings['cache']['bins']['page'] = 'cache.backend.null';

$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

# $settings['extension_discovery_scan_tests'] = TRUE;

$settings['rebuild_access'] = TRUE;

$settings['skip_permissions_hardening'] = TRUE;

# $settings['config_exclude_modules'] = ['devel', 'stage_file_proxy'];
