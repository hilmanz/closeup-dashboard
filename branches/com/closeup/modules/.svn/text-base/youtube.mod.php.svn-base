<?php
class youtube extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->setVar();
	}
	
	function home(){
		$this->open(0);
		$mvv = $this->fetch("SELECT * FROM youtube", 1);
		$this->close();
		// var_dump($mvv);exit;
		for($i=0;$i<20;$i++){
			$top10[$i] = $mvv[$i];
			$videoID[$i] = $mvv[$i]['VideoURL'];
			$videoTitle[$i] = $mvv[$i]['VideoTitle'];
			$videoViews[$i] = $mvv[$i]['Views'];
		}
		$page = "youtube";
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
		$this->View->assign('arrVideoID', json_encode($videoID));
		$this->View->assign('arrVideoTitle', json_encode($videoTitle));
		$this->View->assign('arrVideoViews', json_encode($videoViews));
		$this->View->assign('top10Video', $top10);
		
		return $this->contentString("/youtube.html",true);
	}

}