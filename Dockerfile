FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql

RUN mkdir /app \
 && mkdir /app/web-developer-blog-mysql-lessons/

COPY . /app/web-developer-blog-mysql-lessons/

RUN cp -r /app/web-developer-blog-mysql-lessons/ /var/www/html/.

RUN ln -s /etc/apache2/mods-available/headers.load /etc/apache2/mods-enabled/

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

# Apache conf
# allow .htaccess with RewriteEngine
RUN a2enmod rewrite
# to see live logs we do : docker logs -f [CONTAINER ID]
# without the following line we get "AH00558: apache2: Could not reliably determine the server's fully qualified domain name"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# autorise .htaccess files
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
# for production :
# RUN echo "ServerTokens Prod\n" >> /etc/apache2/apache2.conf
# RUN echo "ServerSignature Off\n" >> /etc/apache2/apache2.conf

#RUN chown -R www-data:www-data /var/www
#RUN chmod 755 -R /var/www
RUN chgrp -R www-data /var/www
RUN find /var/www -type d -exec chmod 775 {} +
RUN find /var/www -type f -exec chmod 664 {} +

EXPOSE 80

# start Apache2 on image start
CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]