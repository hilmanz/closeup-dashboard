<?php /* Smarty version 2.6.13, created on 2012-07-19 15:34:17
         compiled from closeup//twitter.html */ ?>
<script language="javascript" type="text/javascript">
var twURL = <?php echo $this->_tpl_vars['twURL']; ?>
;
var indexURL = 0;
var twitterInterval;
<?php echo '
//if (indexURL == 0){
//	newwindow=window.open(twURL[indexURL],\'name\',\'height=1024,width=960\');
//	if (window.focus) {newwindow.focus()}
//	setTimeout("newwindow.close();", 90000);
//}
//twitterInterval = setInterval(rotateFB, 30000);

//function rotateFB(){
//	indexURL++;
//	if (indexURL == twURL.length){
//		clearInterval(twitterInterval);
//	}else{
//		newwindow=window.open(twURL[indexURL],\'name\',\'height=1024,width=960\');
//		if (window.focus) {newwindow.focus()}
//		setTimeout("newwindow.close();", 90000);
//	}
//}
<!--
// popup facebook start
var newwindow;
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
    <div id="contentLeft" class="fromLeft">
        <a class="logo" href="index.php">&nbsp;</a>
        <div class="imgHolder bgred"><img src="images/bgred.png"/></div>
        <div class="entry" style="width:80%; left:8%;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                    <div id="listCountry">
                        <span class="clearBlock"><a id="Worldwide" href="#" class="worldwide flag current"><img src="images/worldwide.png" /></a></span>
                        <span><a id="Singapore" href="#" class="singapore flag"><img src="images/singapore.png" /></a></span>
                        <span><a id="Indonesia" href="#" class="indonesia flag"><img src="images/indonesia.png" /></a></span>
                        <span><a id="Philippines" href="#" class="philipine flag"><img src="images/philipine.png" /></a></span>
                        <span><a id="India" href="#" class="india flag"><img src="images/india.png" /></a></span>
                        <span><a id="Brazil" href="#" class="brazil flag"><img src="images/brazil.png" /></a></span>
                        <span><a id="Nigeria" href="#" class="nigeria flag"><img src="images/nigeria.png" /></a></span>
                        <span><a id="UAE" href="#" class="us flag"><img src="images/uae.png" /></a></span>
                        <span><a id="UK" href="#" class="uk flag"><img src="images/uk.png" /></a></span>
                        <span class="clearBlock"><a id="US" href="#" class="us flag"><img src="images/us.png" /></a></span>
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
                    <h1>What's trending on twitter</h1>
                    <div id="twitCountry" style="height:275px;">
						<h2 class="<?php echo $this->_tpl_vars['top10Twitter'][0]['location']; ?>
" style="margin-bottom:24px;"><?php echo $this->_tpl_vars['top10Twitter'][0]['location']; ?>
</h2>
						<div class="tall twit_container">
						<ol class="twit_update">
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['top10Twitter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li><a href="#<?php echo $this->_tpl_vars['top10Twitter'][$this->_sections['i']['index']]['url']; ?>
" class="tesppop"><?php echo $this->_tpl_vars['top10Twitter'][$this->_sections['i']['index']]['name']; ?>
</a></li>
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



<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>

<script type="text/javascript">
	var countryN = "";
	var data;
	var interval;
	var mainInterval;

	var country = <?php echo $this->_tpl_vars['countries']; ?>
;
	var countryLength = country.length - 1;

	//var country = ['Brazil','Indonesia','Philippines','US','UAE','Singapore','Singapore','India','UK','Nigeria'];

	var data;
	var index = 1;
	var hideTwit;
	<?php echo '	
	$(document).ready(function(){
		$("#listCountry a").click(function(){
			$(".flag").each(function(){
				$(this).removeClass("current");
			})
			$(this).addClass("current");
			countryN = $(this).attr(\'id\');
			var url = "index.php?page=twitter&act=country&country="+countryN+"";
			
			$.ajax({
				type:\'POST\',
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#twitCountry").fadeOut();
				},
				success: function(response) {
					var html = trending(countryN, response);
					$("#twitCountry").html(html);
					$("#twitCountry").fadeIn();
					
				}
			});
			clearInterval(mainInterval);
			clearInterval(interval);
			for(var x in country){
				if (country[x] == countryN){
					index = x;
				}
			}
			interval = setInterval(twitLoop, 5000);
			mainInterval = setInterval(twitRotaion, 15000);
		});
		
		
		
		interval = setInterval(twitLoop, 5000);
		mainInterval = setInterval(twitRotaion, 15000);
		
		function twitRotaion(){
			clearInterval(interval);
			$("ol").css({top: \'0\'});
			$(".flag").each(function(){
				$(this).removeClass("current");
			})
			$("#"+country[index]+"").addClass("current");
			var url = "index.php?page=twitter&act=country&country="+country[index]+"";
			$.ajax({
				type:\'POST\',
				url: url,
				dataType: \'json\',
				beforeSend: function(){
					$("#twitCountry").hide();
				},
				success: function(response) {
					var html = trending(country[index], response);
					$("#twitCountry").html(html);
					$("#twitCountry").fadeIn();
					
					interval = setInterval(twitLoop, 5000);
				}
			});
		};
		
		
		function twitLoop(){
			var totalShowTwit = parseInt($("li").length);
			var lastTwit = totalShowTwit + 1;
			console.log(totalShowTwit);
			if(totalShowTwit >= 7){
				hideTwit = totalShowTwit - 7;
			}
			var twit_update = "index.php?page=twitter&act=loop&twit="+lastTwit+"";
			
			$.ajax({
			type:\'POST\',
			url: twit_update,
			dataType: \'json\',
			beforeSend: function(){
				
			},
			success: function(response) {
					if (response == false && totalShowTwit < 7){
						//no data available
					}else if (response == false && totalShowTwit >= 7){
						
					}else{
						if (hideTwit >= 0){
							$("ol").prepend(\'<li style="display: none;"><a href="#\'+response.url+\'" class="tesppop" >\'+response.name+\'</a></li>\');
							$(\'li:eq(0)\').slideDown(\'slow\');
							$(\'li:eq(10)\').fadeOut(\'slow\');
						}
					}
				}
			});
		}
		
		function trending(country, data){
			var str=\'<h2 class="\'+country+\'" style="margin-bottom:24px;">\'+country+\'</h2>\';
			str+=\'<div class="tall twit_container">\';
			str+=\'<ol class="twit_update">\';
			if (data !== null){
				for(var x in data){
					str+=\'<li><a href="#\'+data[x].url+\'" class="tesppop">\'+data[x].name+\'</a></li>\';
				}
			}else{
					str+=\'<span>Not Avalable</span>\';
			}
			str+=\'</ol>\';
			str+=\'</div>\';
			if (index == countryLength){
				index = 0
			}else{
				index++;
			}
			return str;
		}
		
	});
</script>
'; ?>