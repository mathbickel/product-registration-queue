<?php

namespace App\Queue;

use App\Queue\Client\AwsSqsQueueClient;
class ProductQueue extends AwsSqsQueueClient 
{
    public function sendToQueue($message): \Aws\Result
    {
        return $this->sendMessage($message);
    }
}