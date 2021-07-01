<?php
    global $uni_pro;
    $social_facebook = $uni_pro['opt-social-text-facebook'];
    $social_youtube = $uni_pro['opt-social-text-youtube'];
    $social_twitter = $uni_pro['opt-social-text-twitter'];
    $social_gplus = $uni_pro['opt-social-text-gplus'];
    $social_skype = $uni_pro['opt-social-text-skype'];
    $social_flickr = $uni_pro['opt-social-text-flickr'];
    $social_linkedin = $uni_pro['opt-social-text-linkedin'];
    $social_wordpress = $uni_pro['opt-social-text-wordpress'];
    $social_vimeo = $uni_pro['opt-social-text-vimeo'];
    $footer_text_section1_title = $uni_pro['opt-footer-text-section1-title'];
    $footer_text_section1_desc = $uni_pro['opt-footer-text-section1-desc'];
    $footer_text_section2_title = $uni_pro['opt-footer-text-section2-title'];
    $footer_text_section2_desc = $uni_pro['opt-footer-text-section2-desc'];
    $footer_text_section3_title = $uni_pro['opt-footer-text-section3-title'];
    $footer_text_section3_desc = $uni_pro['opt-footer-text-section3-desc'];
    $footer_text = $uni_pro['opt-footer-text'];
?>
<div class="container">
	<div class="row">
		<div class="col-footer col-sm-12 col-md-4">
			<h3><?php echo $footer_text_section1_title; ?></h3>
			<?php echo $footer_text_section1_desc; ?>
		</div>				
		<div class="col-footer col-sm-12 col-md-4">
			<?php if ( is_active_sidebar( 'footer_1' ) ) : dynamic_sidebar( 'footer_1' ); else: ?>
			<h3><?php echo $footer_text_section2_title; ?></h3>
			<p>MIST newsletters are issued regularly to keep you up to date on the latest information, notice, news and events, results, awards, and many interesting topical issues. </p>
            <form class="form-horizontal text-center">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="Your Email Address" style="height: 40px;">
                  <span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-envelope-o fa-1x"></i> Subscribe!</button></span>
                </div>
              </div>
            </form>
            <?php endif; ?>
            <div class="social-links text-center">
				<a target="_blank" href="https://www.facebook.com/mist.ac.bd"><i class="fa fa-facebook-official fa-2x"></i></a>
				<a target="_blank" href="https://www.twitter.com/mistacbd"><i class="fa fa-twitter fa-2x"></i></a>
				<a target="_blank" href="https://plus.google.com/+MistAcBd"><i class="fa fa-google-plus-square fa-2x"></i></a>
				<a target="_blank" href="https://www.youtube.com/+MistAcBd"><i class="fa fa-youtube-square fa-2x"></i></a>
				<a target="_blank" href="https://bd.linkedin.com/in/military-institute-of-science-and-technology-051826117/"><i class="fa fa-linkedin-square fa-2x"></i></a>
			</div>
		</div>
		<div class="col-footer col-sm-12 col-md-4">
			<h3><?php echo $footer_text_section3_title; ?></h3>
			<?php echo $footer_text_section3_desc; ?>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="footer-copyright">
				<?php echo date("Y"); ?> &copy; <?php echo $footer_text; ?> <a href="#top" title="Jump back to top">&#8593;</a>
			</div>
		</div>
	</div>
</div>
<style>

</style>