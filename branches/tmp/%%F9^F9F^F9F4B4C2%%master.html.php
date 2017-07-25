<?php /* Smarty version 2.6.13, created on 2012-07-19 15:38:32
         compiled from closeup/master.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "closeup/meta.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body>
		<div id="water" class="fadein delay3"><img src="images/water.png"/></div>
	<div id="pagewidth">
		<div id="content">
			<section>
				<div class="center">
					<div class="columns">
                       <?php echo $this->_tpl_vars['mainContent']; ?>

                        
                        
						<div class="popupContainer2">
							<div id="popupContent">
								<a class="closePopup" href="#">&nbsp;</a>
								<div class="poupContent">
								  <iframe id="iframe" src=""></iframe> 
								</div><!-- end .poupContent -->
							</div><!-- end #poupContent -->
						</div><!-- end .popupContainer -->
                        <div id="bgPopup"></div>
					</div><!-- end .columns -->
				</div><!-- end .center -->
			</section>
		</div><!-- end #content -->
	</div><!-- end #pagewidth -->
</body>
</html>