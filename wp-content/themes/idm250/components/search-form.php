<?php 
?>

<form class="search-form" action="<?php echo home_url(); ?>/search" method="get">
    <input type="text" name="s" value="">
    <input type="hidden" name="post_type[]" value="thd_projects">
    <button>Submit</button>
</form>