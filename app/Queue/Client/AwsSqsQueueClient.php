<?php

namespace App\Queue;

use App\Queue\Queue;
use Aws\Sqs\SqsClient;
abstract class AwsSqsQueueClient implements Queue
{
    protected SqsClient $client; 
    protected string $queueUrl;
    public function __construct()
    {
        $this->queueUrl = env('AWS_SQS_QUEUE_URL');
        $this->client = new SqsClient([
            'version' => 'latest',
            'region' => 'us-east-1'
        ]);
    }
    public function sendMessage($message): \Aws\Result
    {
        return $this->client->sendMessage([
            'QueueUrl' => $this->queueUrl,
            'MessageBody' => $message
        ]);
    }
}