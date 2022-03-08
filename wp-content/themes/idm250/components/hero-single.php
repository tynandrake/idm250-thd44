<div class="single-header-container" style="background-color:<?php the_field('teaser-color'); ?>">
    <div class="single-inside-container">
        <div class="single-grid-wrapper">
            <div class="single-grid-40">
                <div class="single-grid-40-wrapper">
                    <div>
                        <h1 class="single-header-h1"><?php the_title() ?></h1>
                        <div class="single-grid-wrapper">
                            <div class="single-grid-20">
                                <p><?php the_field('single-tag-1') ?></p>
                            </div>
                            <div class="single-grid-50">
                                <p><?php the_field('single-tag-2') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-grid-60">
                <?php if (get_field('header-image')); ?>
                <div class="single-grid-60-image" style="background-image: url('<?php the_field('header-image'); ?>');"></div>
            </div>
        </div>
    </div>
</div>