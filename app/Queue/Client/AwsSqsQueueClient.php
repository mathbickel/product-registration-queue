<?php

namespace App\Queue\Client;

use Aws\Sqs\SqsClient;
use App\Queue\Queue;
abstract class AwsSqsQueueClient implements Queue
{
    protected SqsClient $client; 
    public string $queueUrl;
    public function __construct()
    {
        $this->queueUrl = env('AWS_SQS_QUEUE_URL');
        $this->client = new SqsClient([
            'version' => 'latest',
            'region' => 'us-east-1',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ]
        ]);
    }
}