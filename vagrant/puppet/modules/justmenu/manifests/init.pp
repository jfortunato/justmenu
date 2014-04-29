class justmenu {
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

  exec { 'create-sqlite-db':
    command     => "php vendor/bin/doctrine orm:schema-tool:create",
    cwd         => "/vagrant",
    creates     => "/vagrant/database/db.sqlite",
    require   => Exec['composer install'],
  }

  exec { 'seed-db':
    command     => "php vendor/bin/doctrine justmenu:seed",
    cwd         => "/vagrant",
    subscribe   => Exec['create-sqlite-db'],
    refreshonly => true,
  }

  file { '/tmp':
    ensure => 'directory',
    owner  => 'vagrant',
  }

  class { 'composer':
    command_name => 'composer',
    target_dir   => '/usr/local/bin',
    auto_update  => true,
    require      => Package['php5', 'php5-curl'],
  }

  exec { 'composer install':
    command => 'composer install',
    cwd     => '/vagrant',
    creates => '/vagrant/vendor',
    require => Class['composer'],
  }
}
