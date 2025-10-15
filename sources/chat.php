<?php
if (!defined('SOURCES')) die("Error");

require VENDOR.'autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $users;
    protected $d;

    public function __construct($d) {
        $this->clients = new \SplObjectStorage;
        $this->users = [];
        $this->d = $d;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $data = json_decode($msg, true);

        // Lưu user_id để định danh
        if ($data['type'] === 'init') {
            $this->users[$from->resourceId] = $data['user_id'];
            return;
        }
 
        // Chat message
        // if ($data['type'] === 'chat') {
        //     $sender_id = $data['sender_id'];
        //     $receiver_id = $data['receiver_id'];
        //     $message = $data['message'];

        //     // // Lưu vào DB
        //     // $connDB = new mysqli('localhost', 'root', '', 'chat_realtime');
        //     // $stmt = $connDB->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
        //     // $stmt->bind_param('iis', $sender_id, $receiver_id, $message);
        //     // $stmt->execute();

        //     $data['sender_id'] = $sender_id;
		// 	$data['receiver_id'] = $receiver_id;
        //     $data['message'] = $message;
		// 	$this->d->insert('messages', $data);

        //     // Gửi lại cho người nhận
        //     foreach ($this->clients as $client) {
        //         if ($client !== $from && isset($this->users[$client->resourceId]) && $this->users[$client->resourceId] == $receiver_id) {
        //             $client->send(json_encode([
        //                 'type' => 'chat',
        //                 'sender_id' => $sender_id,
        //                 'message' => $message,
        //                 'time' => date('H:i:s')
        //             ]));
        //         }
        //     }
        // }
    }

    public function onClose(ConnectionInterface $conn) {
        unset($this->users[$conn->resourceId]);
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Error: {$e->getMessage()}\n";
        $conn->close();
    }
}

$server = Ratchet\App::factory('0.0.0.0', 8080);
$server->route('/chat', new Chat, ['*']);
$server->run();
