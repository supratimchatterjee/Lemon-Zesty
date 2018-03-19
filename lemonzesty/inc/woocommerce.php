<?php
add_theme_support('woocommerce');
//Remove Action //
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);


// Woocommerce Wraper Start
function my_theme_wrapper_start() {
?>
	<?php if(is_product()): ?>
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-1-1">
		<?php else: ?>
			<div class="uk-container uk-container-center">
			    <div class="uk-grid">
			      	<div class="uk-width-medium-2-10">
			         <?php dynamic_sidebar('sidebar-shop');?>
			      	</div>
			      <div class="uk-width-medium-8-10">
	<?php endif; ?>

<?php
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);

function my_theme_wrapper_end() {
?>
 </div></div></div>
<?php
}
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);


// Reorder hooks //

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 21);

// Product Gallery //
