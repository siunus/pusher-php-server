<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '3b6f84a37f1ee2e48c7a',
    '0f9db8f8f007b83d43b4',
    '611552',
    $options
  );

  $data['status'] = 'sukses';
  $data['username'][1] = 'siunus';
  $data['username'][2] = 'nendah';
  $pusher->trigger('my-channel', 'my-event', $data);
?>