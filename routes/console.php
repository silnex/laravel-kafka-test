<?php

use Illuminate\Support\Facades\Artisan;
use Junges\Kafka\Facades\Kafka;
use Junges\Kafka\Message\Message;

Artisan::command('kafka:publish', function () {
    $message = new Message(
        headers: ['header-key' => 'header-value'],
        body: ['key' => 'value'],
        key: 'kafka key here'
    );

    /** @var \Junges\Kafka\Producers\ProducerBuilder $producer */
    $producer = Kafka::publishOn('laravel-kafka-topic')->withMessage($message);

    $producer->send();
});

Artisan::command('kafka:consume', function () {
    $consumer = Kafka::createConsumer(['laravel-kafka-topic'])
        ->withHandler(function ($message) {
            dump($message);
        })->build();

    $consumer->consume();
});
