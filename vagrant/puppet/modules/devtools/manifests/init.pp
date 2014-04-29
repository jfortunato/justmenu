class devtools {
    include nodejs
    include apt

    package { 'make': }
    package { 'git': }
    package { 'ruby1.9.3': }

    apt::ppa{ 'ppa:chris-lea/node.js': before => Package['nodejs']}

    exec { 'npm install':
        command => 'npm install',
        cwd     => '/vagrant',
        require => Package['nodejs'],
    }

    file { '/vagrant/public/assets/compiled':
      ensure => 'directory',
      before => Exec['make'],
    }

    exec { 'make':
      command => "make",
      cwd     => "/vagrant",
      require => [Package['make'], Exec['npm install']],
    }
}
