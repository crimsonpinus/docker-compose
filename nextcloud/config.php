<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oc91vsj2gboc',
  'passwordsalt' => 'JFpq+2b4M1s45heDW6FMvgsHa+1l44',
  'secret' => 'H7VdAkwehyStyu8O+Y3gHQw8UAP+FyjVyEz9RAfqS9OQHNFT',
  'trusted_domains' => 
  array (
    0 => '10.10.10.10:8585',
	1 => 'cloud.r2m.kr',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '25.0.4.1',
  'overwrite.cli.url' => 'http://10.10.10.10:8585',
  0 => 'https://cloud.r2m.kr',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud_mariadb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'Nextcloud!mariadb',
  'installed' => true,
);
