#!/bin/bash

mkdir -p /etc/puppet/modules

puppet module install puppetlabs/nodejs --force
puppet module install puppetlabs/stdlib --force
puppet module install puppetlabs/apt --force
puppet module install willdurand/composer --version 0.0.6 --force
puppet module install maestrodev/wget --version 1.2.3 --force
