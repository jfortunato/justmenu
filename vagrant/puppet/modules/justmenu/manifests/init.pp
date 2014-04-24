class justmenu {
  package { 'make': }

  file { '/var/www':
    ensure  => 'link',
    target  => '/vagrant/public',
    force   => true,
    require => Package['apache2'],
  }

  exec { 'create-justmenu-db':
    command     => "mysql -uroot -p${password} -e \"create database justmenu; grant all on justmenu.* to root@localhost identified by '${password}';\"",
    subscribe   => Exec['mysqlpassword'],
    refreshonly => true,
  }
}
