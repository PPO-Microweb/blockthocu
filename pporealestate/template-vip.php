<?php
$args = array(
    'post_type' => 'product',
    'meta_query' => array(
        array(
            'key' => 'not_in_vip',
            'value' => '1',
            'compare' => '='
        ),
    ),
    'posts_per_page' => -1
);
$query = new WP_Query($args);
?>
<div class="title-pro">
    <h3>
        <span>Bất động sản VIP</span>
    </h3>
</div>
<div class="clearfix"></div>
<div class="list_product">
<?php 
while ($query->have_posts()) : $query->the_post();
get_template_part('template', 'product_item');
endwhile;
wp_reset_query();
?>
</div>
