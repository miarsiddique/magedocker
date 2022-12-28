FROM bitnami/php-fpm:8.1.9
WORKDIR "/application"

# Install selected extensions and other stuff
# RUN apt-get install -y curl wget gnupg2 ca-certificates lsb-release apt-transport-https \
#     software-properties-common \
#     apt-get clean; rm -rf /var/lib/apt/lists/ /tmp/ /var/tmp/ /usr/share/doc/

# RUN apt-add-repository ppa:ondrej/php \
#     apt-get update \
#     apt-get clean; rm -rf /var/lib/apt/lists/ /tmp/ /var/tmp/ /usr/share/doc/

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    git \ 
    #php8.1 libapache2-mod-php8.1 php8.1-curl php8.1-gmp php8.1-mbstring php8.1-phpdbg php8.1-sqlite3 php8.1-zip php8.1-bcmath php8.1-dba php8.1-imap php8.1-pspell php8.1-sybase php8.1-bz2 php8.1-dev php8.1-interbase php8.1-mysql php8.1-readline php8.1-tidy php8.1-cgi php8.1-enchant php8.1-intl php8.1-odbc php8.1-xml php8.1-cli php8.1-fpm php8.1-json php8.1-opcache php8.1-snmp php8.1-xmlrpc php8.1-common php8.1-gd php8.1-ldap php8.1-pgsql php8.1-soap php8.1-xsl php8.1-mongo php8.1-mysql \
    #php8.1-memcached \ 
    # php8.1-mysql \ 
    # php8.1-soap \ 
    # php8.1-bcmath \ 
    # php8.1-gd \ 
    # php8.1-intl \ 
    # php8.1-ctype \ 
    # php8.1-dom \ 
    # php8.1-fileinfo \ 
    # php8.1-hash \ 
    # php8.1-iconv \ 
    # php8.1-json \ 
    # php8.1-libxml \ 
    # php8.1-mbstring \ 
    # php8.1-openssl \ 
    # php8.1-pcre \ 
    # php8.1-pdo_mysql \ 
    # php8.1-simplexml \ 
    # php8.1-sockets \ 
    # php8.1-sodium \ 
    # php8.1-spl \ 
    # php8.1-tokenizer \ 
    # php8.1-xmlwriter \ 
    # php8.1-xsl \ 
    # php8.1-zip \ 
    # php8.1-libxml \ 
    # php8.1-openssl \ 
    #php8.1-redis; \
    apt-get clean; rm -rf /var/lib/apt/lists/ /tmp/ /var/tmp/ /usr/share/doc/


# RUN apt-get update \
#  && apt-get install -y git zlib1g-dev \
#  && docker-php-ext-install pdo pdo_mysql zip

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/ /tmp/ /var/tmp/ /usr/share/doc/

# Node.js
RUN mkdir /tmp && chmod -R 0777 /tmp
RUN curl -sL https://deb.nodesource.com/setup_12.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y
RUN npm install npm@6 -g
RUN command -v node
RUN command -v npm

# Other
RUN mkdir ~/.ssh
RUN touch ~/.ssh_config

# Display versions installed
RUN php -v
RUN composer --version
RUN node -v
RUN npm -v

#Install Cron
RUN apt-get update
RUN apt-get -y install cron

# Add the cron job
#RUN crontab -l | { cat; echo "* * * * * bash /root/get_date.sh"; } | crontab -

# Run the command on container startup
#CMD cron

#install vim
RUN apt-get update && apt-get install -y vim

# Install Nano
RUN apt-get update
RUN apt-get install nano