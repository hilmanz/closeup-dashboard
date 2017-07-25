<?php
class blog extends App{
	var $Request;
	var $View;
	function __construct($req){
		$this->Request = $req;
		$this->View = new BasicView();
		$this->run();
	}
	
	function run(){
		if($this->Request->getParam('act') == 'blog'){
			$blog = html_entity_decode($_POST['blog']);
			//var_dump($blog);
			$_SESSION['blog'] = $blog;
			$this->blog_name_ajax($blog);
		}else if($this->Request->getParam('act') == 'loop'){
			$blogLoop = $this->Request->getParam('blogLoop');
			// var_dump($_SESSION['blog']);exit;
			$this->blog_update_ajax($blogLoop, $_SESSION['blog']);
		}else{
			$this->home();
		}
	}
	
	function home(){
		$this->open(0);
		$rss = $this->fetch("SELECT *, date_format(Dt, '%Y.%m.%d') as tgl FROM blogs WHERE 1 ORDER BY blog,Dt LIMIT 5",1);
		$blogName = $this->fetch("SELECT distinct blog FROM `blogs` WHERE 1",1);
		$this->close();
		$_SESSION['blog'] = $rss[0]['blog'];
		// var_dump($rss[0]['blog']);exit;
		for($i=0;$i<5;$i++){
			$top10[$i] = $rss[$i];
			$blogURL[$i] = $rss[$i]['posturl'];
			$id[$i] = "id".$i;
		}
		$page = "rss";
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
		$j=0;
		foreach ($blogName as $key => $value){
			$arr=htmlentities($value['blog']);
			$bName[$j] = $arr;
			$j++;
		}
		
		// print_r(json_encode($bName));exit;
		$this->View->assign('idRss', $id);
		$this->View->assign('blogName', json_encode($bName));
		$this->View->assign('blogURL', json_encode($blogURL));
		$this->View->assign('top10RSS', $top10);
		
		return $this->contentString("/blog.html",true);
	}
	function blog_name_ajax($blog){
		$this->open(0);
		$q = "SELECT *, date_format(Dt, '%Y.%m.%d') as tgl FROM blogs WHERE blog = '".$blog."' ORDER BY blog,Dt  LIMIT 5";
		$blog_name_update = $this->fetch($q,1);
		$this->close();
		
		echo json_encode($blog_name_update);exit;
	}
	function blog_update_ajax($blogLoop, $blog){
		// var_dump(html_entity_decode($blog));exit;
		$this->open(0);
		$q = "SELECT *, date_format(Dt, '%Y.%m.%d') as tgl FROM blogs WHERE blog = '".html_entity_decode($blog)."' ORDER BY blog,Dt LIMIT ".$blogLoop.",1";
		$blog_loop = $this->fetch($q);
		$this->close();
		
		echo json_encode($blog_loop);exit;
	}
}