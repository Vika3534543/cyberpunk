<?php
$crb_footer_company = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_footer_company'), 'full');
$crb_footer_second_company = wp_get_attachment_image_url(carbon_get_post_meta(get_the_ID(), 'crb_footer_second_company'), 'full');
$crb_footer_documents = carbon_get_post_meta(get_the_ID(),  'crb_footer_documents');
$crb_footer_second_document = carbon_get_post_meta(get_the_ID(), 'crb_footer_second_document');
$crb_footer_nda = carbon_get_post_meta(get_the_ID(), 'crb_footer_nda');
?>

<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="footer-first flex">
            <div class="company-image">
                <img src="<?php echo $crb_footer_company; ?>" alt="logo">
                <img src="<?php echo $crb_footer_second_company; ?>" alt="logo">
            </div>
            <div class="footer-item">
                <a href="#">
                   <?php echo $crb_footer_documents; ?>
                </a>
                <a href="#">
                    <?php echo $crb_footer_second_document; ?>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-second">
        <div class="text">
            <?php echo $crb_footer_nda; ?>
        </div>
    </div>
</footer>
</body>
</html>