class mysql {
  package { 'mysql-server': }
  package { 'libapache2-mod-auth-mysql': }
  package { 'php5-mysql': }

  service { 'mysql':
    ensure  => running,
    enable  => true,
    require => Package['mysql-server'],
  }

  exec { 'mysqlpassword':
    command     => "mysqladmin -u root password ${password}",
    unless      => "mysqladmin -uroot -p${password} status",
    subscribe   => Package['mysql-server'],
    refreshonly => true,
  }
}

