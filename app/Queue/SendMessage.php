<?php

namespace App\Queue;

use App\Queue\Client\AwsSqsQueueClient;
class SendMessage extends AwsSqsQueueClient
{
    public function sendMessage($message): void
    {   
        $this->client->sendMessage([
            'QueueUrl' => $this->queueUrl,
            'MessageBody' => $message
        ]);
    }
}