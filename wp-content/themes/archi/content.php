<?php global $archi_option;  ?>
<li id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?>>
    <div class="post-content">        
        <div class="post-image">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                </a>
            <?php endif; ?>
        </div>        
        <div class="date-box">
            <div class="day"><?php the_time('d'); ?></div>
            <div class="month"><?php the_time('M'); ?></div>
        </div>
        <div class="post-text">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo archi_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn-more">
            <?php if ($archi_option['blog_btntext'] != ''){ echo esc_attr($archi_option['blog_btntext']); }else{ esc_html_e('Read More', 'archi'); } ?>
        </a>
    </div>
</li>