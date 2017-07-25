<?php
class twitter extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->run();
	}
	
	function run(){
		if($this->Request->getParam('act') == 'country'){
			$country = $this->Request->getParam('country');
			$_SESSION['country'] = $country;
			$this->country_ajax($country);
		}else if($this->Request->getParam('act') == 'loop'){
			$twit = $this->Request->getParam('twit');
			$this->twit_update_ajax($twit, $_SESSION['country']);
		}else{
			$_SESSION['country'] = 'Worldwide';
			$this->home();
		}
	}
	
	function home(){
		$this->open(0);
		$q = "SELECT * FROM twittertrends WHERE location = 'Worldwide' LIMIT 7";
		$country = "SELECT DISTINCT location FROM twittertrends";
		$twitter = $this->fetch($q, 1);
		$countries = $this->fetch($country, 1);
		$this->close();
		$page = "twitter";
		$data  = array(
				'home' => '1',
				'youtube' => '2',
				'facebook' => '3',
				'twitFeel' => '4',
				'twitter' => '5',
				'addict' => '6',
				'rss' => '7');
		$i = 0;
		foreach ($data as $k => $v){
			if ($k == $page){
				$this->View->assign('page'.$v.'', "current");
			}
			$index[$i] = "twit".$i;
			$i++;
		}
		foreach ($twitter as $key => $value){
			$twURL[$key] = $value['url'];
		}
		$j = 0;
		foreach ($countries as $head => $location){
			$cwT[$j] = $location['location'];
			$j++;
		}
		  // var_dump(json_encode($cwT));exit;
		$this->View->assign('countries',json_encode($cwT));
		$this->View->assign('twURL',json_encode($twURL));
		$this->View->assign('top10Twitter', $twitter);
		$this->View->assign('idTwit', $index);
		
		return $this->contentString("/twitter.html",true);
	}
	
	function country_ajax($country){
		$this->open(0);
		$q = "SELECT * FROM twittertrends WHERE location = '".$country."' LIMIT 7";
		$twitter = $this->fetch($q, 1);
		$this->close();
		
		echo json_encode($twitter);exit;
	}
	function twit_update_ajax($twit, $country){
		$this->open(0);
		$q = "SELECT * FROM twittertrends WHERE location = '".$country."' AND Qrank = '".$twit."'";
		$twit_update = $this->fetch($q);
		$this->close();
		
		echo json_encode($twit_update);exit;
	}

}