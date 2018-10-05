<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'YOUR CLUSTER',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'YOUR API KEY',
    'YOUR API SECRET',
    'YOUR APP ID',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
