# Docker container for ZendTo

[![docker]][dockerhub] ![os] ![php] ![app]

## Zendto: container file sharing platform

dockerfile use `ubuntu:20.04` base image with complete setup of php7.4 and apache2. \
Zendto package is downloaded from original zendto deb repository <https://zend.to/files/zendto_6.03-5.deb>

*For any question about the app itself, please refer to original zendto developer website documentation at <https://zend.to> it's very well done (app and doc 😉 )* \
*eveything is realy well explained*

_Based on works from [ubellavance](https://github.com/ubellavance/zendtodocker) and [Jules Field](https://zend.to), thanks guys for the good work !_

---

- volume mounts:

```dockerfile
  volumes:
      - ./config:/opt/zendto/config/
      - ./data:/var/zendto/
````

---

### config files for container apache/php

> [000-default.conf](./000-default.conf) => vhost apache2 (*/etc/apache2/sites-available*) \
> [php.ini](./php.ini) => php config file (*/etc/php/7.4/*) \
> [opcache.ini](./opcache.ini) => zend opcache config file (*/etc/php/7.4/cli/conf.d*)

---

### config files for zendTo application

- volume config

> [internaldomains.conf](./config/internaldomains.conf) => set up for domain config (*yourdomain.com*)\
> [preferences.php](./config/preferences.php) => full application set-up \
> [zendto.conf](./config/zendto.conf) => basic set-up for zendto

- volume data

data storage volume. contains among other things `incoming` and `droppoffs` directories for files upload.
SQLite db is stored in that place, you can change it in [preferences.php](./config/preferences.php) at line 67:

```php
  'SQLiteDatabase'       => NSSDROPBOX_DATA_DIR."zendto.sqlite",
```

or change it for `MySQL` external database (lines 58 to 73 of [preferences.php](./config/preferences.php))

---

## Use

For desktop/dev environement, better use with traefik local set-up such as [fle108/traefik-desktop](https://github.com/fle108/traefik-desktop) in order to use `https-redirect` labels.

> In apache2 site 000-default conf , `https-redirect` is disabled because of "too many redirect errors with `kubernetes/nginx-ingress` "

Start container from `fle108/zendto:build-0.1` image:

```sh
docker-compose up
```

Build your own image:

```sh
docker build --tag your-repo/appname:version .
```

Create 1st admin user in database from container shell:

```sh
usage:
  
    /opt/zendto/bin/adduser <ZendTo preferences.php file> '<username>' '<email>' '<realname>' '<organization>'
```

check full [preferences.php](./config/preferences.php) and especially `smtp` set-up:
> lines 624 to 657

```php
'SMTPserver'   => '<your-smtp-server',
'SMTPport'     => 587,
'SMTPsecure'   => 'tls',
'SMTPusername' => '<smtp-user',
'SMTPpassword' => 'password',
'SMTPcharset'  => 'UTF-8',
'SMTPdebug'    => false,
'SMTPsetFromToSender' => FALSE,
```

[docker]:https://img.shields.io/badge/dockerfile-build--0.1-blue?logo=docker

[php]:https://img.shields.io/badge/php-7.4-blueviolet?logo=php

[os]:https://img.shields.io/badge/base--image-ubuntu--20.04-orange?logo=ubuntu

[status]:https://img.shields.io/badge/status-build-blue?logo=github

[app]:https://img.shields.io/badge/zendto-6.03--5-green

[dockerhub]:https://hub.docker.com/r/fle108/zendto
