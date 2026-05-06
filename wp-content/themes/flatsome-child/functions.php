<?php
// Add custom Theme Functions here
//code lấy lượt xem
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "01 lượt xem";
	}
	return $count.' lượt xem';
}

// code đếm lượt xem
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

// code hiển thị số lượt xem trong dashboard
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
	$defaults['post_views'] = __('Views');
	return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
		echo getPostViews(get_the_ID());
	}
}
// Code đếm số dòng trong văn bản
function count_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {
		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}
		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}

	return implode( '', $paragraphs );
}

// Change text
function my_custom_translations( $strings ) {
	$text = array(
	'Lựa chọn các tùy chọn' => 'Tùy chọn',
	'Thêm vào giỏ hàng' => 'Thêm vào giỏ',
	'Mô tả' => 'Thông tin chi tiết',
	'Tổng số phụ:' => 'Tổng tiền:',
	'Trả lời' => 'Viết bình luận của bạn',
	'Mã:' => 'Mã sản phẩm:',
	);
	$strings = str_ireplace( array_keys( $text ), $text, $strings );
	return $strings;
	}
	add_filter( 'gettext', 'my_custom_translations', 20 );

/**
* WooCommerce Replace “Free!” by a custom string
**/
function custom_call_for_price() {
	return 'Liên hệ';
	}
	
	add_filter('woocommerce_empty_price_html', 'custom_call_for_price');

// Show min price for Woo products
function custom_variation_price( $price, $product ) { 
	$price = '';
	$price .= wc_price($product->get_price()); 
	return $price;
}

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

//
add_action( 'woocommerce_before_single_product', 'move_variations_single_price', 1 );
function move_variations_single_price(){
  global $product, $post;
  if ( $product->is_type( 'variable' ) ) {
    add_action( 'woocommerce_single_product_summary', 'replace_variation_single_price', 10 );
  }
}

function replace_variation_single_price() {
  ?>
    <style>
      .woocommerce-variation-price {
        display: none;
      }
    </style>
    <script>
      jQuery(document).ready(function($) {
        var priceselector = '.product p.price';
        var originalprice = $(priceselector).html();

        $( document ).on('show_variation', function(data) {
          $(priceselector).html($('.single_variation .woocommerce-variation-price').html());
        });
        $( document ).on('hide_variation', function(data) {
          $(priceselector).html(originalprice);
        });
      });
    </script>
  <?php
}
	
//* Remove URL field from comments
function remove_url_comments($fields) {
	unset($fields['url']);
	return $fields;
	}
	add_filter('comment_form_default_fields','remove_url_comments');

// Remove vote tab in product detail page
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_additional_information_tab', 98 );

function wcs_woo_remove_additional_information_tab( $tabs ) {
	unset( $tabs['additional_information'] ); // Remove the additional_information

	return $tabs;
}



// Custom field
add_action( 'flatsome_custom_single_product_2', 'thong_tin_them_2', 16  );
function thongtin_them_sidebar2(){?>
    <?php
    $ma_san_pham=get_field('ma_san_pham');
    $tac_gia=get_field('tac_gia');
	$tinh_trang=get_field('tinh_trang');?>
	<?php if($ma_san_pham != "" && $tac_gia !="" && $tinh_trang != "") {?>
		<div class="thong-tin-san-pham">
			<div class="tt-product"><span>Mã sản phẩm: </span><?php echo $ma_san_pham ?></div>
			<div class="tt-product"><span>Tác giả: </span><?php echo $tac_gia ?></div>
			<div class="tt-product"><span>Tình trạng: </span><?php echo $tinh_trang ?></div>
		</div>
	<?php }?>
<?php  } ?>