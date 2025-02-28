<?php
class Bot {
    private $token;
    private $api_url;

    public function __construct($token) {
        $this->token = $token;
        $this->api_url = "https://api.telegram.org/bot$token/";
    }

    public function getUpdates() {
        $content = file_get_contents("php://input");
        return json_decode($content, true);
    }

    public function sendMessage($chat_id, $text) {
        $params = [
            'chat_id' => $chat_id,
            'text' => $text
        ];
        
        file_get_contents($this->api_url . "sendMessage?" . http_build_query($params));
    }

    public function printContent() {
        $content = $this->getUpdates();
        echo "<pre>";
        print_r($content);
        echo "</pre>";
    }

       

}



?>