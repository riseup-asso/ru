FROM drupal:10.2-php8.3
RUN rm -Rf /opt/drupal && mkdir /opt/drupal
WORKDIR /opt/drupal
RUN set -eux; \
	apt-get update; \
	apt-get install -y --no-install-recommends unzip; \
  apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false; \
	rm -rf /var/lib/apt/lists/*
COPY php-conf.d/* /usr/local/etc/php/conf.d/
COPY composer.json composer.lock /opt/drupal/
RUN set -eux; \
	export COMPOSER_HOME="$(mktemp -d)"; \
	composer install --no-interaction; \
	chown -R www-data:www-data web/sites web/modules web/themes; \
	touch /var/www/html && rm -Rf /var/www/html; \
	ln -sf /opt/drupal/web /var/www/html; \
	# delete composer cache
	rm -rf "$COMPOSER_HOME"

