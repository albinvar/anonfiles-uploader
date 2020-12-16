<?php

namespace App;

class Uploader
{
	
	protected $url;
	protected $json;
	
	public function __construct($api)
	{
		$this->setApi($api);
	}
	
	protected function setApi($token)
	{
		$this->url = sprintf('https://anonfiles.com/api/upload?token=%s', $token);
		$this->curlInit();
	}
	
	protected function curlInit()
	{
		$this->ch = curl_init($this->url);
	    curl_setopt($this->ch, CURLOPT_POST, 1);
	    curl_setopt($this->ch, CURLOPT_POSTFIELDS, [
        'file' => curl_file_create(
            $_FILES['file']['tmp_name'],
            $_FILES['file']['type'],
            $_FILES['file']['name']
        ),
    ]);

    curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
    $this->createJson();
	}
	
	protected function createJson()
	{
		$this->json = curl_exec($this->ch);
		$this->closeCurl();
		return $this->json;
	}
	
	protected function closeCurl()
	{
		curl_close($this->ch);
	}
	
	public function decodeJson()
	{
		$result = json_decode($this->createJson());
		return $result;
	}
}