<?php
class rss extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->setVar();
	}
	
	function main(){
		$this->open(0);
		$mvv = $this->fetch("SELECT * FROM youtube WHERE Qrank = '1' LIMIT 1");
		$rss = $this->fetch("SELECT *FROM blogs",1);
		$this->close();
		
		for($i=0;$i<10;$i++){
			$top10[$i] = $rss[$i];
			$id[$i] = "id".$i;
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
		foreach ($data as $k => $v){
			if ($k == $page){
				$this->View->assign('page'.$v.'', "current");
			}
		}
	
		$this->View->assign('mostViewedVideo', $mvv);
		$this->View->assign('idRss', $id);
		$this->View->assign('top10RSS', $top10);
		
		return $this->contentString("/rss.html",true);
	}

}