<?php /* Smarty version 2.6.13, created on 2012-07-19 15:38:32
         compiled from closeup//youtube.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'closeup//youtube.html', 24, false),array('modifier', 'number_format', 'closeup//youtube.html', 27, false),array('modifier', 'escape', 'closeup//youtube.html', 49, false),)), $this); ?>
<?php echo '
<script src="js/jquery-latest.pack.js" type="text/javascript"></script>
<script src="js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".youtube10").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 5,
		auto:2500,
		speed:1000,
	});
});
</script>
'; ?>

<div class="half youtubePage">
    <div id="contentLeft" class="fromRight">
        <a class="logo" href="index.html">&nbsp;</a>
        <div class="imgHolder bgred"><img src="images/bgred.png"/></div>
        <div class="entry" style="left: 14%;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top">
                    <h1 id="judulVid" style="text-align:center; width:100%;"><?php echo ((is_array($_tmp=$this->_tpl_vars['top10Video'][0]['VideoTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</h1>
					<div id="player" style="position: relative; width: 110%;">
					</div>
                    <h2 class="totalView" style="text-align:center;"><?php echo ((is_array($_tmp=$this->_tpl_vars['top10Video'][0]['Views'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 views</h2>
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
        <div class="entry" >
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top">
                    <h1 style="text-align:left;">Most Viewed Video</h1>
                    <div class="tall twit_container">	
                    	<div class="youtube10">
                        <ul class="youtubeList">
							<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['top10Video']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<div class="thumbYoutube"><img src="<?php echo $this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['thumbnail_url']; ?>
" width="50" height="50" /></div>
								<a id="link<?php echo $this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['Qrank']; ?>
" class="vid" href="javascript:void(0);" onclick="directClick(<?php echo $this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['Qrank']; ?>
, '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['VideoTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
', '<?php echo $this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['Views']; ?>
' );"><?php echo ((is_array($_tmp=$this->_tpl_vars['top10Video'][$this->_sections['i']['index']]['VideoTitle'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120) : smarty_modifier_truncate($_tmp, 120)); ?>
</a>
							</li>
							<?php endfor; endif; ?>
                        </ul>
                        </div>
                    </div>
                </td>
              </tr>
            </table>
        </div><!-- end #entry -->
    </div><!-- end #contentRight -->
</div><!-- end .half -->

<script type="text/javascript">
	var url = <?php echo $this->_tpl_vars['arrVideoID']; ?>
;
	var titleVid = <?php echo $this->_tpl_vars['arrVideoTitle']; ?>
;
	var viewsVid = <?php echo $this->_tpl_vars['arrVideoViews']; ?>
;
	var i = 0;
	var j;
	var checkVideo = 0;
	var timeout;
	var interval;
	var fullVideo = false;
<?php echo '
		interval = setInterval(onPlayerStateChange, 15000);
	  var tag = document.createElement(\'script\');
      tag.src = "http://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName(\'script\')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubePlayerAPIReady() {
		$("a#link1").css(\'color\',\'#ffff00\').css(\'text-decoration\',\'underline\');
        player = new YT.Player(\'player\', {
          height: \'100%\',
          width: \'100%\',
          videoId: youtube_parser(url[0]),
		  playerVars: { \'autoplay\': 1, \'controls\': 1 },
          events: {
			\'onReady\': onPlayerReady,
            \'onStateChange\': onPlayerStateChange
          }
        });
      }
		function addCommas(str) {
			var amount = new String(str);
			amount = amount.split("").reverse();

			var output = "";
			for ( var i = 0; i <= amount.length-1; i++ ){
				output = amount[i] + output;
				if ((i+1) % 3 == 0 && (amount.length-1) !== i)output = \',\' + output;
			}
			return output;
		}
		function thirtySeconds(){
			if ( i == 0){
					i = 1;
					j=i+1;
				}
				if(i == titleVid.length){
					i = 0;
					j=i+1;
				}
				var totViews = addCommas(viewsVid[i]);
				$("#judulVid").html(titleVid[i]);
				$(".totalView").html(totViews+" views");
				$(".youtubeList li a").each(function(){
					$(this).removeAttr("style");
				});
				$("a#link"+j).css(\'color\',\'#ffff00\').css(\'text-decoration\',\'underline\');
				vidID = youtube_parser(url[i]);
				player.loadVideoById(vidID, \'0\');
				i++;
				j++;
		}
      function onPlayerStateChange(event) {
        if(event.data == YT.PlayerState.ENDED){
				fullVideo = false;
				if ( i == 0){
					i = 1;
					j=i+1;
				}
				if(i == titleVid.length){
					i = 0;
					j=i+1;
				}
				var totViews = addCommas(viewsVid[i]);
				$("#judulVid").html(titleVid[i]);
				$(".totalView").html(totViews+" views");
				$(".youtubeList li a").each(function(){
					$(this).removeAttr("style");
				});
				$("a#link"+j).css(\'color\',\'#ffff00\').css(\'text-decoration\',\'underline\');
				vidID = youtube_parser(url[i]);
				if(vidID == false){
					clearTimeout(timeout);
					timeout = setTimeout(thirtySeconds,1000);
				}
				
				player.loadVideoById(vidID, \'0\');
				i++;
				j++;
				
		}else if(event.data == YT.PlayerState.PLAYING){
			clearTimeout(timeout);
			if(fullVideo == false){
				timeout = setTimeout(thirtySeconds,30000);
			}
			
		}
      }
	  function onPlayerReady(event) {
        event.target.playVideo();
      }
	  function directClick(id,title, views){
		fullVideo = true;
		clearTimeout(timeout);
		var totViews = addCommas(views);
		i = id-1;
		j = id;
		$("#judulVid").html(title);
		$(".totalView").html(totViews+" views");
		$(".youtubeList li a").each(function(){
			$(this).removeAttr("style");
		});
		$("a#link"+j).css(\'color\',\'#ffff00\').css(\'text-decoration\',\'underline\');
		vidID = youtube_parser(url[i]);
		if(vidID == false){
			clearTimeout(timeout);
			//timeout = setTimeout(thirtySeconds,1000);
		}
		player.loadVideoById(vidID, \'0\');
		if (checkVideo == 1){
				$("a#link"+j).html("");
				$("a#link"+j).html(titleVid[i]);
				$("a#link"+j).append("<br><span style=\'color: red;\'>This video is not available</span>");
				checkVideo = 0;
			}
		i++;
		j++;
		}
	
	//////////////////////////////////////
	function youtube_parser(url){
		var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#\\&\\?]*).*/;
		var match = url.match(regExp);
		if (match&&match[7].length==11){
			return match[7];
		}else{
			return false;
		}
	}

'; ?>

</script>