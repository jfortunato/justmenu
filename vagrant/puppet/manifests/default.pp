Exec {
    path => [
        '/usr/local/bin',
        '/opt/local/bin',
        '/usr/bin', 
        '/usr/sbin', 
        '/bin',
        '/sbin'
    ],
    logoutput => true,
}

Package {
    ensure => latest,
    require => Exec['apt-get update'],
}

exec {'apt-get update':}
package { 'phpmyadmin': }

# mysql root password
$password = "rootpass"

include apache2
include mysql
include php5
include justmenu
include devtools
