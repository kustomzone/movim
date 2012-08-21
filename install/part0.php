<div id="left" style="width: 230px; padding-top: 10px;">
	<div class="warning">
		<p><?php echo t('Thank you for downloading Movim!');?></p>
		<p><?php echo t('Before you enjoy your social network, a few adjustements are required.'); ?></p>
		<p><?php echo t('Keep in mind that Movim is still under development and will handle many personal details. Its use can potentially endanger your data. Always pay attention to information that you submit.'); ?></p>
		<p><?php echo t('For help on installation see the').' <a href="http://wiki.movim.eu/install">wiki</a>.'?></p>
	</div>
</div>
<div id="center" style="padding: 20px;" >
	<h1><?php echo t('Welcome to Movim!'); ?></h1>
	<br>
	<p>
		<h2><?php echo t('You are about to install or change the configuration of the distributed XMPP-based opensource Social Network Movim.');?></h2><br><br>
		<?php echo ('This sign <img src="../themes/movim/img/icons/follow_icon.png"> indicates that there are additional help texts available, which will be displayed on the left.'); ?><br><br><br>
	</p>
	<p>
		<?php echo t('Movim requires certain external components. Please install them before you can succeed:');?>
			
			<div class="<?php is_valid((version_compare(PHP_VERSION, '5.3.0') >= 0)); ?>">
				<?php echo t('Your PHP-Version: %s <br>Required: 5.3.0', PHP_VERSION); ?>
			</div>
			<div class="<?php is_valid(extension_loaded('curl')); ?>">
				<?php echo t('CURL-Library'); ?>
			</div>
			<div class="<?php is_valid(extension_loaded('gd')); ?>">
				<?php echo t('GD'); ?>
			</div>
			<div class="<?php is_valid(extension_loaded('SimpleXml')); ?>">
				<?php echo t('SimpleXML'); ?>
			</div>
			<div class="<?php is_valid(test_dir('../')); ?>">
				<?php echo t('Read and write rights for the webserver in Movim\'s root directory') ?>
			</div>
			<div class="<?php is_valid((datajar_version() >= 0.01)); ?>">
				<?php echo t('<a href="http://datajar.movim.eu">Datajar</a> version: '.datajar_version().'<br> Required: 0.01') ?>
			</div>
			<div class="<?php is_valid(True); ?>">
				<?php echo t('<a href="https://launchpad.net/moxl">Moxl</a> version: asd<br> Required: asdasd') ?>
			</div>
	</p>
	<br><br>
	<?php if($errors){ ?><p class="error">Please make the required changes to continue.</p><?php } ?>
	<p>
		<form method="post" action="index.php">
			<input type="hidden" name="step" value="0" />
			<label for="send">&nbsp;</label>
			<?php if(!$errors){ ?><input type="submit" style="float: right" class="button icon next" id="send" name="send" value="<?php echo t('Next'); ?>" /><?php  } ?>
		</form>
	</p>
	
</div>
