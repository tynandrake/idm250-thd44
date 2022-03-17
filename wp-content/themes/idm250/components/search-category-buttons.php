<?php $terms = get_terms([
    'taxonomy' => 'thd-project-categories',
    'hide_empty' => true,
]); ?>
<div class="project-teaser-button-container">
    <?php if ($terms) {
        // Get total items count
        $total = count($terms) - 1;
        // Loop through this post's categories and spit them out
        foreach ($terms as $key => $category) {
            $category_link = get_term_link($category->term_id);
            echo "<span class='project-teaser-button'><a href='$category_link'>$category->name</a></span>";
        }
    }
    ?>
</div>


