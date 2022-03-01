<footer>
    <img class="footer-img" src="<?php echo get_template_directory_uri() ?>/dist/images/instagram.svg" alt="instagram logo">
    <img class="footer-img" src="<?php echo get_template_directory_uri() ?>/dist/images/linkedin.svg" alt="linkedin logo">
    <?php
    wp_nav_menu(
        [
            'theme_location' => 'footer_menu'
        ]
    );
    ?>
</footer>

<?php
wp_footer();
?>

</body>

</html>