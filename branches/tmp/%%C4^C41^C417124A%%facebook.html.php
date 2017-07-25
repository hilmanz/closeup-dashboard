<?php /* Smarty version 2.6.13, created on 2012-07-19 15:34:18
         compiled from closeup//facebook.html */ ?>
<script language="javascript" type="text/javascript">
var fbURL = <?php echo $this->_tpl_vars['fbURL']; ?>
;
var indexURL = 0;
var facebookInterval;
<?php echo '
var newwindow;
//if (indexURL == 0){
//	newwindow=window.open(fbURL[indexURL],\'name\',\'height=1024,width=960\');
//	if (window.focus) {newwindow.focus()}
//	setTimeout("newwindow.close();", 90000);
//}

//facebookInterval = setInterval(rotateFB, 30000);

//function rotateFB(){
//	indexURL++;
//	if (indexURL == fbURL.length){
//		clearInterval(facebookInterval);
//	}else{
//		newwindow=window.open(fbURL[indexURL],\'name\',\'height=1024,width=960\');
//		if (window.focus) {newwindow.focus()}
//		setTimeout("newwindow.close();", 90000);
//	}
			
//}
<!--
// popup facebook start

function closeWindow(){ setTimeout("newwindow.close();", 90000);}

function popitup(url) {
	window.focus();
	newwindow=window.open(url,\'name\',\'height=1024,width=960\');
	if (window.focus) {newwindow.focus()}
	closeWindow();
	return false;
}
$("a.tesppop").live("click", function(){
	url = ""+$(this).attr(\'href\')+"";
	popitup(url.substring(1));
});

// -->
</script>
'; ?>

<div class="half">
    <div id="contentLeft" class="fromRight">
        <a class="logo" href="index.html">&nbsp;</a>
        <div class="imgHolder bgred"><img src="images/bgred.png"/></div>
        <div class="entry" style="width:80%; left:8%;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                    <div id="listFacebook">
						<span class="clearBlock"><a class="facebooks" style="float: none;margin: 0 auto;"><img src="images/facebooks.png" /></a></span>
						<span><a id="CloseUp" href="#" class="facebooks flag current"><img src="images/closeup.png" /><span class="title">CLOSEUP</span></a></span>
                        <span><a id="FMCG" href="#" class="cart flag"><img src="images/cart.png" /><span class="title">FMCG</span></a></span>
                        <span><a id="Technology" href="#" class="gear flag"><img src="images/gear.png" /><span class="title">Technology</span></a></span>
                        <span><a id="Music" href="#" class="guitar flag"><img src="images/guitar.png" /><span class="title">Music</span></a></span>
                        <span class="clearBlock"><a id="Sports" href="#" class="soccer flag"><img src="images/soccer.png" /><span class="title">SPORTS</span></a></span>
                    </div>
                </td>
              </tr>
            </table>
        </div><!-- end #entry -->
    </div><!-- end #contentLeft -->
</div><!-- end .half -->
<div class="half last">
    <div id="contentRight" class="fromRight delay">
        <div class="imgHolder bgblue"><img src="images/bgblue.png" /></div>
     	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "closeup/menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="entry">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                    <h1>TOP FACEBOOK PAGES</h1>
					<div id="fbCategory" style="height:275px;">
						<h2 class="<?php echo $this->_tpl_vars['top10VFBFans'][0]['category']; ?>
"><?php echo $this->_tpl_vars['top10VFBFans'][0]['category']; ?>
</h2>
						<div class="tall twit_container">	
							<ol class="twit_update">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['top10VFBFans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
								<li><div class="thumbs"><img src="images/thumb_facebook.jpg" /></div><div class="caption"><a href="#<?php echo $this->_tpl_vars['top10VFBFans'][$this->_sections['i']['index']]['fb_url']; ?>
" class="tesppop"><?php echo $this->_tpl_vars['top10VFBFans'][$this->_sections['i']['index']]['pages']; ?>
</a></div></li>
								<?php endfor; endif; ?>
							</ol>
						</div>
					</div>
                </td>
              </tr>
            </table>
        </div><!-- end #entry -->
    </div><!-- end #contentRight -->
</div><!-- end .half -->

<script type="text/javascript">
	var categoryN="";
	var interval;
	var mainInterval;
	var category = <?php echo $this->_tpl_vars['fbCategory']; ?>
;
	var jmlData = <?php echo $this->_tpl_vars['sizeoffbCategory']; ?>

	var data;
	var index = 1;
	var hideTwit;
<?php echo '		
	$(document).ready(function(){	
		$("#listFacebook a.flag").click(function(){
			clearInterval(mainInterval);
			clearInterval(interval);
			$(".flag").each(function(){
				$(this).removeClass("current");
			})
			$(this).addClass("current");
			categoryN = $(this).attr(\'id\');
			var url = "index.php?page=facebook&act=category&category="+categoryN+"";
			
			$.ajax({
				type:\'POST\',
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#fbCategory").fadeOut();
				},
				success: function(response) {
					var html = trending(categoryN, response);
					$("#fbCategory").html(html);
					$("#fbCategory").fadeIn();
				}
			});
			
			for(var x in category){
				if (category[x] == categoryN){
					index = x;
				}
			}
			interval = setInterval(fbLoop, 5000);
			mainInterval = setInterval(fbRotation, 15000);
		});
			
		interval = setInterval(fbLoop, 5000);
		mainInterval = setInterval(fbRotation, 15000);
		
		function fbRotation(){
			clearInterval(interval);
			$("ol").css({top: \'0\'});
			$(".flag").each(function(){
				$(this).removeClass("current");
			})
			$("#"+category[index]+"").addClass("current");
			var url = "index.php?page=facebook&act=category&category="+category[index]+"";
			$.ajax({
				type:\'POST\',
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#fbCategory").hide();
				},
				success: function(response) {
					var html = trending(category[index], response);
					$("#fbCategory").html(html);
					$("#fbCategory").fadeIn();
					
					interval = setInterval(fbLoop, 5000);
				}
			});
		};
		
		
		function fbLoop(){
			var totalShowTwit = parseInt($("li").length);
			var lastTwit = totalShowTwit;
			console.log(totalShowTwit);
			if(totalShowTwit >= 4){
				hideTwit = totalShowTwit - 4;
			}
			var twit_update = "index.php?page=facebook&act=loop&fb="+lastTwit+"";
			
			$.ajax({
			type:\'POST\',
			url: twit_update,
			dataType: \'json\',
			beforeSend: function(){
				
			},
			
			success: function(response) {
					if (response == false && totalShowTwit < 4){
						//no data available
					}else if (response == false && totalShowTwit >= 4){
						
					}else{
						if (hideTwit >= 0){
							$("ol").prepend(\'<li style="display: none;"><div class="thumbs"><img src="images/thumb_facebook.jpg" /></div><div class="caption"><a href="#\'+response.fb_url+\'" class="tesppop">\'+response.pages+\'</a></li></div>\');
							$(\'li:eq(0)\').slideDown(\'slow\');
							$(\'li:eq(4)\').fadeOut(\'slow\');
						}
					}
				}
			});
		}
		
		function trending(country, data){
			var str=\'<h2 class="\'+country+\'">\'+country+\'</h2>\';
			str+=\'<div class="tall twit_container">\';
			str+=\'<ol class="twit_update">\';
			if (data !== null){
				for(var x in data){
					str+=\'<li><div class="thumbs"><img src="images/thumb_facebook.jpg" /></div><div class="caption"><a href="#\'+data[x].fb_url+\'" class="tesppop">\'+data[x].pages+\'</a></div></li>\';
				}
			}else{
					str+=\'<span>Not Avalable</span>\';
			}
			str+=\'</ol>\';
			str+=\'</div>\';
			if (index == (jmlData-1)){
				index = 0
			}else{
				index++;
			}
			return str;
		}
		
	});
</script>
'; ?>