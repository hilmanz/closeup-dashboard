<?php /* Smarty version 2.6.13, created on 2012-06-26 14:57:16
         compiled from closeup//home.html */ ?>
<div class="half">
	<div id="contentLeft" class="fromLeft">
		<a class="logo fadein" href="index.php">&nbsp;</a>
		<div class="imgHolder bgred"><img src="images/bgred.png"/></div>
		<div class="entry">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td>
					<h1><?php echo $this->_tpl_vars['VideoTitle']; ?>
</h1>
					<div id="player" style="position: relative; width: 100%; height: 75%;">
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
					<h1>What's trending on twitter</h1>
                    <div id="twitCountry" style="height:275px;">
						<h2><?php echo $this->_tpl_vars['top10Twitter'][0]['location']; ?>
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
							<li><a href="<?php echo $this->_tpl_vars['top10Twitter'][$this->_sections['i']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['top10Twitter'][$this->_sections['i']['index']]['name']; ?>
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
<div id="newsTicker">
	<div class="wrapper">
        <ul class="newsTicker"> 					
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/25/1211235t.JPG" /></a>
                <div class="entryNews">
                	<h3><a href="#">Si Cantik Alinka Terkesan dengan Keunikan Trek Lampung</a></h3>
                    <p>Peslalom wanita tim Toyota GT Radial Team...</p>
                </div>
            </li>			
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/23/4783283t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Kido/Hendra Kejar Peringkat Satu</a></h3>
                    <p>Ganda putra veteran, Markis Kido-Hendra Setiawan...</p>
                </div>
            </li>		
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2011/11/15/0018453t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Sirnas Diikuti 1.554 Peserta</a></h3>
                    <p>Sebanyak 1.554 peserta dari berbagai klub di Indonesia...</p>
                </div>
            </li>			
        </ul><!-- end .newsTicker -->
        <ul class="newsTicker">					
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/25/1255334t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Ekstradisi Bekas PM Libya Ilegal</a></h3>
                    <p>Presiden Tunisia Moncef Marzouki mengatakan ekstradisi...</p>
                </div>
            </li>			
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/05/0951331t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Tunisia Serahkan Mantan PM Libya Zaman Khadafy</a></h3>
                    <p>Perdana penteri terakhir Libya di bawah rezim...</p>
                </div>
            </li>		
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2011/08/20/1545043t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Korut Marah Benderanya Dijadikan Sasaran Tembak AS-Korsel</a></h3>
                    <p>Selain menganggap hal itu sebagai penghinaang...</p>
                </div>
            </li>			
        </ul><!-- end .newsTicker -->
        <ul class="newsTicker"> 					
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/25/1211235t.JPG" /></a>
                <div class="entryNews">
                	<h3><a href="#">Si Cantik Alinka Terkesan dengan Keunikan Trek Lampung</a></h3>
                    <p>Peslalom wanita tim Toyota GT Radial Team...</p>
                </div>
            </li>			
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2012/06/23/4783283t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Kido/Hendra Kejar Peringkat Satu</a></h3>
                    <p>Ganda putra veteran, Markis Kido-Hendra Setiawan...</p>
                </div>
            </li>		
            <li>
                <a class="thumbnail" href="#"><img src="http://assets.kompas.com/data/photo/2011/11/15/0018453t.jpg" /></a>
                <div class="entryNews">
                	<h3><a href="#">Sirnas Diikuti 1.554 Peserta</a></h3>
                    <p>Sebanyak 1.554 peserta dari berbagai klub di Indonesia...</p>
                </div>
            </li>			
        </ul><!-- end .newsTicker -->
    </div><!-- end .wrapper -->
</div><!-- end #newsTicker -->
<script type="text/javascript">
	var url = "<?php echo $this->_tpl_vars['mostViewedVideo']; ?>
";
<?php echo '
	 var tag = document.createElement(\'script\');
      tag.src = "http://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName(\'script\')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player(\'player\', {
          height: \'100%\',
          width: \'100%\',
          videoId: youtube_parser(url),
          events: {
            \'onReady\': onPlayerReady,
            \'onStateChange\': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player\'s state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
	  ////////////////////////////////////////////
	  function youtube_parser(url){
		var regExp = /^.*((youtu.be\\/)|(v\\/)|(\\/u\\/\\w\\/)|(embed\\/)|(watch\\?))\\??v?=?([^#\\&\\?]*).*/;
		var match = url.match(regExp);
		if (match&&match[7].length==11){
			return match[7];
		}else{
			alert("URL Incorrect");
		}
	}
'; ?>

</script>
<?php echo '
<script type="text/javascript">
	
	$(document).ready(function(){
		var country = [\'Indonesia\',\'Malaysia\',\'Singapore\',\'Thailand\',\'Philippines\',\'Vietnam\',\'Worldwide\'];
		var data;
		var index = 0;
		var interval = setInterval(twitLoop, 5000);
		var mainInterval = setInterval(twitRotaion, 15000);
		
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
			if(totalShowTwit >= 10){
				hideTwit = totalShowTwit - 10;
			}
			var twit_update = "index.php?page=twitter&act=loop&twit="+lastTwit+"";
			
			$.ajax({
			type:\'POST\',
			url: twit_update,
			dataType: \'json\',
			beforeSend: function(){
				
			},
			success: function(response) {
					if (response == false && totalShowTwit < 10){
						//no data available
					}else if (response == false && totalShowTwit >= 10){
						var checkTop = $("ol").css(\'top\');
						var top = Math.abs(checkTop.substring(0,3))/25;
						if (hideTwit == top || totalShowTwit == 10){
							$("ol").animate({top: \'0\'});
						}else{
							$("ol").animate({top: \'-=25\'});
						}
					}else{
						if (hideTwit >= 0){
							$("ol").animate({top: \'-=25\'});
							$("ol").append(\'<li><a id="twit\'+lastTwit+\'" href="\'+response.url+\'" target="_blank">\'+response.name+\'</a></li>\');
						}
					}
				}
			});
		}
		
		function trending(country, data){
			var str=\'<h2>\'+country+\'</h2>\';
			str+=\'<div class="tall twit_container">\';
			str+=\'<ol class="twit_update">\';
			if (data !== null){
				for(var x in data){
					str+=\'<li><a id="twit\'+x+\'" href="\'+data[x].url+\'" target="_blank">\'+data[x].name+\'</a></li>\';
				}
			}else{
					str+=\'<span>Data is Not Avalable</span>\';
			}
			str+=\'</ol>\';
			str+=\'</div>\';
			if (index == \'6\'){
				index = 0
			}else{
				index++;
			}
			return str;
		}
		
	});
</script>
'; ?>
