class apache2 {
  package { 'apache2': }

  file { '/etc/apache2/apache2.conf':
    ensure  => present,
    notify  => Service['apache2'],
    require => Package['apache2'],
  }

  service { 'apache2':
    ensure => running,
    enable => true,
  }

  exec { 'mod_rewrite':
    command => 'a2enmod rewrite',
    unless  => 'ls /etc/apache2/mods-enabled | grep rewrite 2>/dev/null',
    require => Package['apache2'],
    notify  => Service['apache2'],
  }

  exec { 'append-phpmyadmin':
    command => 'echo "Include /etc/phpmyadmin/apache.conf" >> /etc/apache2/apache2.conf',
    unless  => 'grep phpmyadmin /etc/apache2/apache2.conf 2>/dev/null',
    require => File['/etc/apache2/apache2.conf'],
  }

  file { "/var/lock/apache2":
    ensure => directory,
    owner  => vagrant
  }

  exec { "ApacheUserChange" :
    command => "sed -i 's/export APACHE_RUN_USER=.*/export APACHE_RUN_USER=vagrant/ ; s/export APACHE_RUN_GROUP=.*/export APACHE_RUN_GROUP=vagrant/' /etc/apache2/envvars",
    require => [ Package["apache2"], File["/var/lock/apache2"] ],
    notify  => Service['apache2'],
  }
}

