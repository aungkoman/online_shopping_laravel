### Online Shoppping Solution

composer install လုပ်ဖို့ လိုမယ်။ ဒါမှ မဟုတ် git ignore မှာ composer ကိုဖယ်ပေး ထားရမယ်




ParseError
syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)
https://mmsoftware100.com/shop/public/goods


You need to install PHP version 7.1

```
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
```

https://websiteforstudents.com/apache2-with-php-7-1-support-on-ubuntu-18-04-lts-beta-server/


sudo apt-get purge php7.*
sudo apt-get autoclean
sudo apt-get autoremove

PHP Version MisMatch
sudo a2dismod php7.0

sudo a2enmod php7.2

sudo service apache2 restart

sudo apt install php7.2-common php7.2-mysql php7.2-xml php7.2-xmlrpc php7.2-curl php7.2-gd php7.2-imagick php7.2-cli php7.2-dev php7.2-imap php7.2-mbstring php7.2-opcache php7.2-soap php7.2-zip php7.2-intl -y

in terminal : php --version show 8.0
in phpinfo.php : php version show 7.1


sudo apt-get remove composer
