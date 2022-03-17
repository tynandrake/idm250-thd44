<div class="search-teaser-container">
    <div class="search-image-container">
        <a href="<?php the_permalink(); ?>">
            <div><?php the_post_thumbnail() ?></div>
        </a>
    </div>
    <div class="search-text-container">
        <div class="search-tag-container">
            <p><?php the_field('single-tag-1') ?></p>
            <p><?php the_field('single-tag-2') ?></p>
        </div>
        <div>
            <h3 class="search-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>