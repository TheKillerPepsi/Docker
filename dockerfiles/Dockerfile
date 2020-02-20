#https://www.ab-heute-programmieren.de/docker-teil-4-das-dockerfile/
#welches Image die Grundlage für mein Image ist
FROM ubuntu:latest
MAINTAINER NAME EMAIL
#bei Run wird der Parameter als Shell Befehl ausgeführt
RUN apt-get update && upgrade
RUN apt-get install apache2
#mit Expose definiert man einen Port, der freigegeben wird
EXPOSE 80
#docker build -t ftiersch/mein-php-server .