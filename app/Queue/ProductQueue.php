<?php

namespace App\Queue;

class ProductQueue extends AwsSqsQueueClient {
    public function sendToQueue($message): \Aws\Result
    {
        return $this->sendMessage($message);
    }
}