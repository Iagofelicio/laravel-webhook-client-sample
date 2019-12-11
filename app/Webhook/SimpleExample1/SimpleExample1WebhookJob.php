<?php

namespace App\Webhook\SimpleExample1;
use DateTime;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use \Spatie\WebhookClient\ProcessWebhookJob;

class SimpleExample1WebhookJob extends ProcessWebhookJob
{
    public function handle()
    {
        $this->webhookCall; // contains an instance of `WebhookCall`

        // perform the work here
    }
}
