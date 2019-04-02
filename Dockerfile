FROM ubuntu:latest
LABEL maintener="mateus"

ENV TZ=America/Los_Angeles
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install apache2 -y && apt-get clean
#php libapache2-mod-php php-mbstring php-mysql php-cli php-dom -y && apt-get clean

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_RUN_DIR   /var/run/apache2
ENV APACHE_PID_FILE $APACHE_RUN_DIR/apache2.pid
ENV LANG C

RUN mkdir -p $APACHE_RUN_DIR
RUN mkdir -p $APACHE_LOCK_DIR
RUN mkdir -p $APACHE_LOG_DIR
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80
ENTRYPOINT ["/usr/sbin/apache2"]
CMD [ "-D", "FOREGROUND"]
