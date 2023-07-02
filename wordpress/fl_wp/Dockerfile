FROM wordpress:6.2-php8.2

WORKDIR /var/www/html/wordpress

RUN apt-get update

# Install WP-CLI
RUN curl -s https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > /tmp/wp-cli.phar \
    && chmod +x /tmp/wp-cli.phar \
    && mv /tmp/wp-cli.phar /usr/local/bin/wp
RUN wp --allow-root

# Set locales
RUN apt-get clean && apt-get update && apt-get install -y locales

# Set the locale
RUN locale-gen nl_NL.UTF-8
ENV LANG nl_NL.UTF-8
ENV LANGUAGE nl_NL:nl
ENV LC_ALL nl_NL.UTF-8