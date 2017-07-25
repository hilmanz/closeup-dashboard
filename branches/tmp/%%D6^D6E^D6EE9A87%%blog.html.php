<?php /* Smarty version 2.6.13, created on 2012-07-03 18:23:18
         compiled from closeup//blog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'substr', 'closeup//blog.html', 32, false),)), $this); ?>
<div class="half">
	<div id="contentLeft" class="fromLeft">
		<a class="logo fadein" href="index.php">&nbsp;</a>
		<div class="imgHolder bgred"><img src="images/bgred.png"/></div>
        <div class="entry" style="width:80%; left:8%;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                    <div id="listBlog">
                        <span class="clearBlock"><a class="rssweb" style="float: none;margin: 0 auto;"><img src="images/rssweb.png" /></a></span>
                        <span><a id="Mash" href="#" class="mashable flag"><img src="images/mashable.png" /></a></span>
                        <span><a id="Tech" href="#" class="techcrunch flag"><img src="images/techcrunch.png" /></a></span>
                        <span><a id="Bell" href="#" class="bellasugar flag"><img src="images/bellasugar.png" /></a></span>
                        <span><a id="Scou" href="#" class="culturevulture flag"><img src="images/culturevulture.png" /></a></span>
                    </div>
                </td>
              </tr>
            </table>
        </div><!-- end #entry -->
	</div><!-- end #contentLeft -->
</div><!-- end .half -->
<div class="half last">
	<div id="contentRight" class="fromLeft delay">
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
					<h1>RSS News and Blog Articles</h1>
					<div id="scrollBlog" class="tall twit_container" style="height: 350px;">
						<h2 class="<?php echo ((is_array($_tmp=$this->_tpl_vars['top10RSS'][0]['blog'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4)); ?>
" style="overflow:hidden;"><?php echo $this->_tpl_vars['top10RSS'][0]['blog']; ?>
</h2>
						<div class="tall twit_container">
							<ol class="twit_update">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['top10RSS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<li>
									<span class="blogPublishDate"><?php echo $this->_tpl_vars['top10RSS'][$this->_sections['i']['index']]['tgl']; ?>
</span>
									<a href="#<?php echo $this->_tpl_vars['idRss'][$this->_sections['i']['index']]; ?>
" class="popup2" no="<?php echo $this->_tpl_vars['top10RSS'][$this->_sections['i']['index']]['posturl']; ?>
"><?php echo $this->_tpl_vars['top10RSS'][$this->_sections['i']['index']]['posttitle']; ?>
</a>
								</li>
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
	var interval;
	var hideTwit;
	var firstData = "<?php echo $this->_tpl_vars['top10RSS'][0]['blog']; ?>
";
	var blogURL = <?php echo $this->_tpl_vars['blogURL']; ?>
;
	var blogName = <?php echo $this->_tpl_vars['blogName']; ?>
;
	var nameLength = blogName.length - 1; 
	var indexURL = 0;
	var index = 1;
	var blogN;
	var data;
	var blogInterval;
<?php echo '		
	$(document).ready(function(){
		$(".flag").each(function(){
			$(this).removeClass("current");
		})
		$("#"+firstData.substring(0,4)+"").addClass("current");
		//if (indexURL == 0){
		//	$("#iframe").attr(\'src\',blogURL[indexURL]);
		//	$(".popupContainer2").delay(5000).fadeIn();
		//}
		//blogInterval = setInterval(rotateFB, 60000);

		//function rotateFB(){
		//	indexURL++;
		//	if (indexURL == blogURL.length){
		//		clearInterval(blogInterval);
		//	}else{
		//		$(".popupContainer2").fadeOut();
		//		$("#iframe").attr(\'src\',blogURL[indexURL]);
		//		$(".popupContainer2").delay(5000).fadeIn();
		//	}
		//}
	
		$("a.popup2").live("click", function(){
			var targetID = $(this).attr(\'href\');
			var url = $(this).attr(\'no\');
			$(".popupContainer2").fadeIn();
			$("#iframe").attr(\'src\',url);
		});
		$("a.closePopup").click(function(){
			$(".popupContainer2").fadeOut();
		});
	
		$("#listBlog a.flag").click(function(){
			
			clearInterval(blogInterval);
			clearInterval(interval);
			
			$(".flag").each(function(){
				$(this).removeClass("current");
			});
			$(this).addClass("current");
			
			for(var x in blogName){
				if ($(this).attr(\'id\') == blogName[x].substring(0,4)){
					index = x;
					break;
				}else{
					index = null;
				}
			}
			
			var url = "index.php?page=blog&act=blog";
			
			$.ajax({
				type:\'POST\',
				data : {blog: blogName[index]},
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#scrollBlog").hide();
				},
				success: function(response) {
					var html = blogTemplate(blogName[index], response);
					
					$("#scrollBlog").html(html);
					$("#scrollBlog").fadeIn();
					
				}
			});
			
			interval = setInterval(blogLoop, 5000);
			blogInterval = setInterval(blogRotation, 15000);
		});
	
		interval = setInterval(blogLoop, 5000);
		blogInterval = setInterval(blogRotation, 15000);
		
		function blogRotation(){
			clearInterval(interval);
			$("ol").css({top: \'0\'});
			$(".flag").each(function(){
				$(this).removeClass("current");
			})
			$("#"+blogName[index].substring(0,4)+"").addClass("current");
			var url = "index.php?page=blog&act=blog";
			$.ajax({
				type:\'POST\',
				data : {blog: blogName[index]},
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#scrollBlog").hide();
				},
				success: function(response) {
					var html = blogTemplate(blogName[index], response);
					
					$("#scrollBlog").html(html);
					$("#scrollBlog").fadeIn();
					
					interval = setInterval(blogLoop, 5000);
				}
			});
		};
		
		function blogLoop(){
			var totalShowTwit = parseInt($("li").length);
			var lastTwit = totalShowTwit;
			var topTwit = totalShowTwit - 4;

			if(totalShowTwit >= 5){
				hideTwit = totalShowTwit - 5;
			}
			var twit_update = "index.php?page=blog&act=loop&blogLoop="+lastTwit+"";
			
			$.ajax({
			type:\'POST\',
			url: twit_update,
			dataType: \'json\',
			beforeSend: function(){
				
			},
			
			success: function(response) {
					if (response == false && totalShowTwit < 5){
						//no data available
					}else if (response == false && totalShowTwit >= 5){
						
					}else{
						if (hideTwit >= 0){
							$("ol").prepend(\'<li style="display: none;"><span class="blogPublishDate">\'+response.tgl+\'</span><a href="#id\'+lastTwit+\'"  no="\'+response.posturl+\'" class="popup2">\'+response.posttitle+\'</a></li>\');
							$(\'li:eq(0)\').slideDown(\'slow\');
							$(\'li:eq(5)\').fadeOut(\'slow\');
						}
					}
				}
			});
		}
		
		function blogTemplate(blogN, data){
			var str="";
			if (data !== null){
				str+=\'<h2 class="\'+blogN.substring(0,4)+\'" style="overflow:hidden;">\'+blogN+\'</h2>\';
			}else{
				str+=\'<h2 class="nodata"></h2>\';
			}
			str+=\'<div class="tall twit_container">\';
			str+=\'<ol class="twit_update">\';
			if (data !== null){
				for(var x in data){
					str+=\'<li>\';
					str+=\'<span class="blogPublishDate">\'+data[x].tgl+\'</span>\';
					str+=\'<a href="#id\'+index+\'" class="popup2" no="\'+data[x].posturl+\'">\'+data[x].posttitle+\'</a>\';
					str+=\'</li>\';
				}
			}else{
					str+=\'<span>Not Avalable</span>\';
			}
			
			if (index == nameLength){
				index = 0
			}else{
				index++;
			}
			
			str+=\'</ol>\';
			str+=\'</div>\';
			return str;
		}
		
	});
</script>
'; ?>