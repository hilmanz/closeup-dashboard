<?php
class home extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->run();
	}
	
	function run(){
		$_SESSION['country'] = 'Worldwide';
		$this->main();	
	}
	
	function main(){
		$this->open(0);
		$mvv = $this->fetch("SELECT * FROM youtube", 1);
		// $rss = $this->fetch("SELECT * FROM blogs WHERE 1 ORDER BY Dt DESC",1);
		$q = "SELECT * FROM twittertrends WHERE location = 'Worldwide' LIMIT 7";
		$country = "SELECT DISTINCT location FROM twittertrends";
		$twitter = $this->fetch($q, 1);
		$countries = $this->fetch($country, 1);
		$this->close();
		
		for($i=0;$i<20;$i++){
			$top10[$i] = $mvv[$i];
			$videoID[$i] = $mvv[$i]['VideoURL'];
			$videoTitle[$i] = $mvv[$i]['VideoTitle'];
			$videoViews[$i] = $mvv[$i]['Views'];
		}
		$page = "home";
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
		$j = 0;
		foreach ($countries as $head => $location){
			$cwT[$j] = $location['location'];
			$j++;
		}
		$t=0;
		$vid=0;
		 // print('<pre>');
		  // print_r($mvv);exit;
		  foreach($mvv as $key => $val){
			$arrBaru[$t][] = $val;
			if($t==2) $t=0;
			else $t++;
		  }
		
		  // print('<pre>');
		  // print_r($arrBaru);exit;
		$this->View->assign('countries',json_encode($cwT));
		$this->View->assign('top10Twitter', $twitter);
		$this->View->assign('idTwit', $index);
		$this->View->assign('arrVideoID', json_encode($videoID));
		$this->View->assign('arrVideoTitle', json_encode($videoTitle));
		$this->View->assign('arrVideoViews', json_encode($videoViews));
		$this->View->assign('top10Video', $top10);
		$this->View->assign('videoList', $arrBaru);
		
		return $this->contentString("/home.html",true);
	}
}