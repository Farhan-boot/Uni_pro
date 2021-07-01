<div class="footer">
		<?php get_template_part( "components/custom", $name = "footer" ) ?>
</div>

<a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery-2.0.3.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery.cycle2.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/cycle2carousel.js"></script>
<!--<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/jquery.lazy.min.js"></script>-->
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/general.js"></script>
<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-65602095-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>