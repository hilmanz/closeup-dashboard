<?php
global $ENGINE_PATH;
include_once $ENGINE_PATH."Utility/Paginate.php";
class home extends SQLData{
	
	function __construct($req){
		parent::SQLData();
		$this->Request = $req;
		$this->View = new BasicView();
	}
	
	function admin(){
		$act = $this->Request->getParam('act');
		if( $act == 'edit' ){
			return $this->edit();
		}elseif( $act == 'save' ){
			return $this->save();
		}else{
			return $this->show();
		}
	}
	
	function show(){
	
		$rs = $this->fetch('SELECT * FROM kana_home');
		
		$this->View->assign('title',$this->showTinyEditor($rs['title']));
		$this->View->assign('text',$this->showTinyEditor($rs['text']));
		
		return $this->View->toString(APPLICATION . "/admin/home.html");
		
	}
	
	function edit(){
	
		$rs = $this->fetch('SELECT * FROM kana_home');
		
		$this->View->assign('text',$this->showTinyEditor($rs['text']));
		
		return $this->View->toString(APPLICATION . "/admin/home-edit.html");
	
	}
	
	function save(){
	
		//$text = strip_tags($this->Request->getPost('txt'), '<p><a><br><hr><table><h1>h2><h3><h4><b><u><i><strong><span><em><div><style>');
		$text = $this->fixTinyEditor($this->Request->getPost('txt'));
		$qry = "UPDATE kana_home SET text='".$text."'";
		
		if($this->query($qry)){
			return $this->View->showMessage("Berhasil","index.php?s=beranda");
		}else{
			return $this->View->showMessage("Gagal","index.php?s=beranda&act=edit");
		}
	
	}
	
	function fixTinyEditor($content){
		global $CONFIG;
		$content = str_replace("\\r\\n","",$content);
		$content = htmlspecialchars(stripslashes($content), ENT_QUOTES);
		$content = str_replace("../contents", "contents", $content);
		//$content = htmlspecialchars( stripslashes($content) );
		$content = str_replace("&lt;", "<", $content);
		$content = str_replace("&gt;", ">", $content);
		return $content;
	}
	
	function showTinyEditor($content){
		global $CONFIG;
		$content = str_replace("contents/", "../contents/", $content);
		return $content;
	}
	
}