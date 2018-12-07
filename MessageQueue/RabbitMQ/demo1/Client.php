<?php
    $connection=new AMQPConnection(
        array(
            'host' => '127.0.0.1',  
            'port' => '5672',  
            'login' => 'guest',  
            'password' => 'guest', 
            'vhost'=>'/' 
        )
    );

    if (!$connection->connect()) {   
        die("Cannot connect to the broker!\n");   
    }   

    $connection->connect();

    $channelObj=new AMQPChannel($connection);
    $exchangeObj=new AMQPExchange($channelObj);
    $exchangeObj->setName('first');
    $exchangeObj->setType(AMQP_EX_TYPE_DIRECT);
    $messageBody='Welcome to RabbitMQ';
    $exchangeObj->publish($messageBody,'queue_route');
    $connection->disconnect();