**UNDER DEVELOPMENT**

# LEAMPPER 

### ABOUT

Is a basic LEAMPPER stack development/production environment using docker-compose, It consists of the following : 
- Nginx as reverse proxy to handle all public access.
- Letsencrypt certbot to handle auto renew SSL cert. 
- Apache use as PHP handler and isolated from direct public access. 
- Isolated MySQL 5.7.30 (posibly upgrade to 8.x).
- Optional PhpMyadmin, for development purpose, disable on production. 
- Isolated Redis 6.0.5. 
- posibly use Elastic Search Service.


### Implementation Plan
- [x] Apache 2.4.25 PHP 7.3.x
- [x] Nginx 1.17.10 as reverse proxy
- [x] only Nginx proxy in frontend access, isolated apache 
- [ ] Nginx SSL with certbot/letsencrypt, unfortunately not possible on localhost
- [ ] Optional manual SSL cert for localhost
- [ ] use HTTP/2 protocol
- [x] MySQL 5.7.30
- [x] PhpMyAdmin 5.0.2-fpm-alpine
- [x] Redis 6.0.5 Alpine
- [ ] Elastic Search (possibly)
- [ ] upgrade to MySQL 8.x
- [ ] Multiple container service, independent container for different app

### Compose by

[mochammad c. chuluq](https://github.com/mchuluq)
