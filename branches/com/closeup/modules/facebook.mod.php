<?php
class facebook extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->run();
	}
	
	function run(){
		if($this->Request->getParam('act') == 'category'){
			$category = $this->Request->getParam('category');
			$_SESSION['category'] = $category;
			$this->category_ajax($category);
		}else if($this->Request->getParam('act') == 'loop'){
			$fb = $this->Request->getParam('fb');
			$this->fb_update_ajax($fb, $_SESSION['category']);
		}else{
			$_SESSION['category'] = 'CloseUp';
			$this->home();
		}
	}
	
	function home(){
		$this->open(0);
		$q = "SELECT *
				FROM facebookfans WHERE category = 'CloseUp'
				ORDER BY fans DESC LIMIT 4";
		$facebookfans = $this->fetch($q, 1);
		$ql = "SELECT distinct category
				FROM facebookfans";
		$categoryCount = $this->fetch($ql, 1);
		
		$this->close();
		
		foreach ($facebookfans as $key => $value){
			$fbURL[$key] = $value['fb_url'];
		}
		// var_dump($fbURL);exit;
		$page = "facebook";
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
		foreach ($categoryCount as $key => $value){
			$categoryValue[$key] = $value['category'];
		}
		
		$this->View->assign('fbURL', json_encode($fbURL));
		$this->View->assign('top10VFBFans', $facebookfans);
		$this->View->assign('fbCategory', json_encode($categoryValue));
		$this->View->assign('sizeoffbCategory', sizeof($categoryCount));
		
		return $this->contentString("/facebook.html",true);
	}

	function category_ajax($category){
		$this->open(0);
		$q = "SELECT *
				FROM facebookfans WHERE category = '".$category."'
				ORDER BY fans DESC LIMIT 4";
		$fbPerCategory = $this->fetch($q, 1);
		$this->close();
		
		echo json_encode($fbPerCategory);exit;
	}
	
	function fb_update_ajax($fb, $category){
		$this->open(0);
		$q = "SELECT *
				FROM facebookfans WHERE category = '".$category."'
				ORDER BY fans DESC LIMIT ".$fb.",1";
		$fb_update = $this->fetch($q);
		$this->close();
		
		echo json_encode($fb_update);exit;
	}
}