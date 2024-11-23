<?php

namespace App\Queue;

use App\Queue\SendMessage;

class ProductQueue extends SendMessage 
{
    public function sendToQueue($message): \Aws\Result
    {

        return $this->sendMessage($message);
    }

    public static function getInstance()
    {
        return new ProductQueue();
    }
}