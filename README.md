# Sample Webhook using Spatie Webhook Client Package

After running ```composer install``` do the following steps:

1. Update .env (add: ```WEBHOOK_SIMPLE_EXAMPLE_1_SECRET=<your_key>```)
2. Run ```php artisan migrate```
2. Run ```php artisan serve```
3. Send a post notification to http://localhost:8000/webhook/simple-example-1. If the response message were ok, it means it's working.

# Important notes 

1. This simple project intends to show a possibile implementation of https://github.com/spatie/laravel-webhook-client. All the credits to spatie. 

2. Be aware that you might need to update the file app/Http/Middleware/VerifyCsrfToken.php, as I did in this sample.

3. Checkout app/Webhook/SimpleExample1 to see the implemented code and test it.
