# LEAMPPER

Is a basic LEAMPPER stack environment using docker compose, It consists of the following:
- Nginx
- Apache
- PHP
- MySQL
- PhpMyAdmin
- Elastic Search
- Redis


### Implementation Plan
- [x] Apache 2.4.25 PHP 7.3.x
- [x] Nginx 1.17.10 as reverse proxy
- [x] only Nginx proxy in frontend access, isolated apache 
- [ ] Nginx SSL with certbot/letsencrypt, ps : sayangnya gak bisa di localhost
- [x] MySQL 5.7.30
- [x] PhpMyAdmin 5.0.2-fpm-alpine
- [ ] Redis 6.0.5 Alpine
- [ ] Elastic Search (possibly)

### Compose by

[mochammad c. chuluq](https://github.com/mchuluq)
