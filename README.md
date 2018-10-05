# pusher-php-server
You can also take it through composer by run this command
```
composer require pusher/pusher-php-server
```

## Usage
```
<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'YOUR APP CLUSTER',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'YOUR APP KEY',
    'YOUR APP SECRET',
    'YOUR APP ID',
    $options
  );

  // Send a message
  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
```
