<?php
 
    set_time_limit(0);
    $connection=new AMQPConnection(
        array(
            'host' => '127.0.0.1',  
            'port' => '5672',  
            'login' => 'guest',  
            'password' => 'guest', 
            'vhost'=>'/' 
        )
    );

    $connection->connect();

    $channelObj=new AMQPChannel($connection);
    $exchangeObj=new AMQPExchange($channelObj);
    $exchangeObj->setName('first');
    $exchangeObj->setType(AMQP_EX_TYPE_DIRECT);
    $queueObj=new AMQPQueue($channelObj);
    $queueObj->setName('firstqueue');
    $queueObj->bind('first','queue_route');
    while(true){
        
        $queueObj->consume(function(AMQPEnvelope $envelope,AMQPQueue $queue){
            $msg=$envelope->getBody();
            echo $msg;
            //处理消息
            Log::info($msg);
            //手动发送ACK应答
            $queue->ack($envelope->getDeliveryTag());
        });
    }
 
