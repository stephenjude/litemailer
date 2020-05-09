## About LiteMailer

LiteMailer is an email sending application where user can add email address and send out mass emails.

You can check how we built this by following this [blog series](http://stephenjude.me/series/laravel-lessons). 

### Installation
```
git clone https://github.com/stephenjude/litemailer.git

cd litemailer

composer install

cp .env.example .env

php artisan key:generate
```

Add your your database credentials
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=litemailer
DB_USERNAME=root
DB_PASSWORD="your_database_password"
```

Add your SMTP credetials (use [mailtrap.io](https:\\mailtrap.io))
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=xxxxxxxxxxxxxx
MAIL_PASSWORD=xxxxxxxxxxxxxx
MAIL_FROM_ADDRESS=hello@litemailer.test
MAIL_FROM_NAME=LiteMailer
```

### Features
- Add email address.
- Send mass emails.


