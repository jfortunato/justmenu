class justmenu {
  package { 'make': }

  file { '/var/www':
    ensure  => 'link',
    target  => '/vagrant/public',
    force   => true,
    require => Package['apache2'],
  }
}
