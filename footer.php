
    </div><!-- .site-content -->

    <footer>
        <p>Grant Whiting - <?php echo date("Y"); ?></p>
    </footer>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>

<?php get_template_part('includes/_mobile-nav'); ?>

<div id="modal" class="modal-overlay">
    <div class="modal">
        <h2 class="modal__title"></h2>
        <img class="modal__img" src="" alt="" />
        <p class="modal__blurb"></p>
        <a class="modal__url" href="" target="_blank">View Site</a>
        <span class="modal__close">Close</span>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>