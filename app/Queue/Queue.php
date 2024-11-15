<?php

namespace App\Queue;
interface Queue {
    public function sendMessage($message): \Aws\Result;
}