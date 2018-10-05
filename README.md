# pusher-php-server
Vendor source for Pusher PHP Server

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

  // Send some message
  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
```
