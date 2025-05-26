<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <style>
 .text-title-single {
    display: flex;
    justify-content: center; /* وسط چین افقی */
    align-items: center;    /* وسط چین عمودی (اگه ارتفاع داشت) */
    margin-bottom: 1rem;
    background-color: #f8f9fa;
    padding: 1rem;
    box-sizing: border-box;
    overflow-wrap: break-word;
}

.content-single {
    direction: ltr;
    text-align: left;       /* چپ‌چین کردن متن */
    justify-content: center; /* وسط چین افقی محتوا */
    flex-direction: column;  /* چیدمان عمودی محتوا */
    align-items:flex-start;
    max-width: 75%;
    margin: 0 auto;
    background-color: #f8f9fa;
    padding: 1rem;
    box-sizing: border-box;
    overflow-wrap: break-word;
    white-space: normal;
}

    </style>

    <section class="container text-center">
        <div>
            <div class="text-title-single">
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            </div>
            <div class="content-single">
                <?php the_content() ?>
            </div>
        </div>
    </section>

    <hr>
<?php }
get_footer();
?>
