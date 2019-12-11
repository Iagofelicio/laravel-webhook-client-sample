<?php

namespace App\Webhook\SimpleExample1;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\Models\WebhookCall;

class SimpleExample1WebhookCall extends WebhookCall
{
    public $guarded = [];

    protected $casts = [
        'payload' => 'array',
        'exception' => 'array',
    ];

    public static function storeWebhook(WebhookConfig $config, Request $request): WebhookCall
    {
        $request_array = [];
        foreach($request->input() as $key => $value){
            $value = preg_replace('/\\\\u([\da-fA-F]{4})/', '&#x\1;', $value);
            $request_array[$key] = str_replace("\\","",html_entity_decode($value));
        }
        return WebhookCall::create([
            'name' => $config->name,
            'payload' => $request_array,
        ]);
    }

    public function saveException(Exception $exception)
    {
        $this->exception = [
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ];

        $this->save();

        return $this;
    }

    public function clearException()
    {
        $this->exception = null;

        $this->save();

        return $this;
    }
}
