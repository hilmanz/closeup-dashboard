<?php
class tweetfeel extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->setVar();
	}
	
	function home(){
		$page = "twitFeel";
		$data  = array(
				'home' => '1',
				'youtube' => '2',
				'facebook' => '3',
				'twitFeel' => '4',
				'twitter' => '5',
				'addict' => '6',
				'rss' => '7');
		foreach ($data as $k => $v){
			if ($k == $page){
				$this->View->assign('page'.$v.'', "current");
			}
		}
		return $this->contentString("/tweetfeel.html",true);
	}
}