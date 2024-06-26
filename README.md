# Laravel Socialite

This is a study project for authenticating with Google using the Socialite tool in Laravel, version 10. It allows users to log in and out using their Google accounts.

## Prerequisites

Before you begin, make sure you have the following software installed on your machine:


- PHP version 8.1 or higher
- Composer
- MySQL or another compatible database


## Environment variables

After the necessary installations, you need to define the environment variables. So create a '.env' file using '.env.example' as a reference. These are the fields that must be changed:


```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASE_NAME
DB_USERNAME=root
DB_PASSWORD=

GOOGLE_CLIENT_ID=YOUR_CLIENT_ID
GOOGLE_CLIENT_SECRET=YOUR_CLIENT_SECRET
GOOGLE_REDIRECT_URL=http://127.0.0.1:8000/auth/google/callback
```

After that, you need to install composer through the command 'composer install'.
To fill in the fields related to Google, you will have to create your own credentials within Google OAuth. There you'll get your CLIENT_ID and CLIENT_SECRET. The redirection URL will be defined by yourself in the credential settings.
If you are going to run the project with the 'php artisan serve' command, you must define the url as 'http://127.0.0.1:8000/auth/google/callback'. Otherwise, the URL may be different and you will need to define this in the '.env' file and Google credential.
