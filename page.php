<?php
get_header();
while (have_posts()) {
    the_post() ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

    <p><?php the_content() ?></p>



<?php


$parentId = wp_get_post_parent_id(get_the_ID());
?>
<?php if($parentId): ?>
    <li class="breadcumb-item"> 
        <a href="<?php echo esc_url(get_the_permalink($parentId)) ?>"><?php echo get_the_title($parentId); ?></a>
    </li>
<?php endif; 





wp_list_pages(array(
    "title_li" => NULL,
    "child_of" => get_the_ID()
));



?>





<div class="bg-success">
    <div>child one</div>
    <div>child two</div>
</div>
    <hr>
<?php }

get_footer();

?>