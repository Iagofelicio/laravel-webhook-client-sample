<?php

return [
    'configs' => [
        [
            'name' => 'simple-example-1',
            'signing_secret' => env('WEBHOOK_SIMPLE_EXAMPLE_1_SECRET'), //Make sure it exists in .env
            'signature_header_name' => 'Authorization', //It could be: Signature, Authentication, etc
            'signature_validator' => \App\Webhook\GeneralSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_model' => \App\Webhook\SimpleExample1\SimpleExample1WebhookCall::class,
            'process_webhook_job' => \App\Webhook\SimpleExample1\SimpleExample1WebhookJob::class,
        ],
        /* Add different webhooks here
            [
                'name' => 'simple-example-1',
                'signing_secret' => env('WEBHOOK_SIMPLE_EXAMPLE_1_SECRET'),
                'signature_header_name' => 'Authorization', //It could be: Signature, Authentication, etc
                'signature_validator' => \App\Webhook\GeneralSignatureValidator::class,
                'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
                'webhook_model' => \App\Webhook\SimpleExample1\SimpleExample1WebhookCall::class,
                'process_webhook_job' => \App\Webhook\SimpleExample1\SimpleExample1WebhookJob::class,
            ],
        */
    ],
];
