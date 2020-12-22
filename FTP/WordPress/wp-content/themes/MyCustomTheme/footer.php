
<footer class="site-footer" style="width: 100%; margin-left: auto; margin-right: auto">
    <div id="sidebar-one" class="column" style="float:left; margin:0; width:15%;">
		<?php if ( is_active_sidebar( 'one' ) ) : ?>
			<?php dynamic_sidebar( 'one' ); ?>
		<?php else : ?>
		<?php endif; ?>
    </div>

    <div class="middle" style="float:left; margin:auto; width: 70%; text-align: center">
	    <?php posts_nav_link(); ?>
        <p> </p>
	    <?php echo get_search_form(); ?>
        <p><?php bloginfo( 'name' ) ?> By Eoghan Spillane (R00175214)</p>
    </div>

    <div id="sidebar-two" class="column" style="float:left; margin:0; width:15%;">
		<?php if ( is_active_sidebar( 'two' ) ) : ?>
			<?php dynamic_sidebar( 'two' ); ?>
		<?php else : ?>
		<?php endif; ?>
    </div>
</footer>





</div>

</div> <!-- closes the containter div in the header -->

<?php wp_footer() ?>

</body>
</html>