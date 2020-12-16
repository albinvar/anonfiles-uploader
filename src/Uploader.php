<?php

namespace App;

class Uploader
{
	
	public function __construct($api)
	{
		$this->setApi($api);
	}
	
	protected function setApi($token)
	{
		$this->url = sprintf('https://anonfiles.com/api/upload?token=%s', $token);
		$this->curlInit();
	}
	
	
}