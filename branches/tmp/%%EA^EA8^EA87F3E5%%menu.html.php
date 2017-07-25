<?php /* Smarty version 2.6.13, created on 2012-07-19 15:38:32
         compiled from closeup/menu.html */ ?>
<div id="navigation" class="fadein delay2s">
	<span id="1" class="<?php echo $this->_tpl_vars['page1']; ?>
"><a href="index.php" class="home">&nbsp;</a></span>
	<span id="2" class="<?php echo $this->_tpl_vars['page2']; ?>
"><a href="index.php?page=youtube" class="youtube">&nbsp;</a></span>
	<span id="3" class="<?php echo $this->_tpl_vars['page3']; ?>
"><a href="index.php?page=facebook" class="facebook">&nbsp;</a></span>
	<span id="4" class="<?php echo $this->_tpl_vars['page4']; ?>
"><a href="index.php?page=tweetfeel" class="twitfeel">&nbsp;</a></span>
	<span id="5" class="<?php echo $this->_tpl_vars['page5']; ?>
"><a href="index.php?page=twitter" class="twitter">&nbsp;</a></span>
	<span id="6" class="<?php echo $this->_tpl_vars['page6']; ?>
"><a href="index.php?page=addict" class="addict">&nbsp;</a></span>
	<span id="7" class="<?php echo $this->_tpl_vars['page7']; ?>
"><a href="index.php?page=blog" class="rss">&nbsp;</a></span>
	</div>
<script>
<?php echo '
$(document).ready(function(){
	function rotationPage(){
		var nextIdPage = $("#navigation span.current").attr("id");
		
		
		if ($("#navigation span.current").next().length == 0){
			nextIdPage = 0;
			var nextLinkPage = $("#navigation span:eq("+nextIdPage+") a").attr("href");
			window.location.replace(nextLinkPage);
		}else{
			var nextLinkPage = $("#navigation span:eq("+nextIdPage+") a").attr("href");
			window.location.replace(nextLinkPage);
		}
		
	}
	setInterval(rotationPage, 300000);
});
'; ?>

</script>