<?php

class Namecheap {

  private $username;
  private $apiKey;
  private $clientIp;

  public function __construct($username, $apiKey, $clientIp) {
    $this->username = $username;
    $this->apiKey = $apiKey;
    $this->clientIp = $clientIp;
  }

  public function request($postData) {
      $url = 'https://api.sandbox.namecheap.com/xml.response';
      $postData['ApiUser'] = $this->username;
      $postData['UserName'] = $this->username;
      $postData['ApiKey'] = $this->apiKey;
      $postData['ClientIp'] = $this->clientIp;
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($postData)
          )
      );
      $context  = stream_context_create($options);
      $apiData = file_get_contents($url, false, $context);
      return $apiData;
  }
}

?>
