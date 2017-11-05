# RogoBot

An SMS service that provides short textual answers, quickly giving the main result for a query from Wolfram|Alpha. Suitable for developing countries with limited access to internet as it provides rapid responses via SMS.

## Deploying

* Install the [Heroku Toolbelt](https://toolbelt.heroku.com/).
* Push and deploy this code to your Heroku account.
* Create an account at [Twilio](https://www.twilio.com/).
* Point your Twilio number to your URL at Heroku.
* Test sending a question to your Twilio number. 

## Running a test

1. Send a SMS to the number +1(917)267-7334. (e.g.: Population of New York?)
2. Get an answer from Wolfram|Alpha.

This app was configured with a twilio number

## Documentation

For more information about using PHP on Heroku, see these Dev Center articles:

- [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php)
- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
- [How to link Twilio with Heroku] (https://www.twilio.com/blog/2016/08/receive-sms-php-twilio.html)
