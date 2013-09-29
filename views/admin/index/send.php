<?php
    echo head(array('title' => 'Xml Import', 'bodyclass' => 'primary', 'content_class' => 'horizontal-nav'));
?>
<div id="primary">
    <?php echo flash(); ?>
    <?php if (!empty($err)) {
        echo '<p class="error">' . html_escape($err) . '</p>';
    } ?>
    <p><a href="../upload/"><?php echo __('Return to form'); ?></a>.</p>
</div>
<?php
    echo foot();
?>