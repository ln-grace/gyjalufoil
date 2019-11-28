<?php
if ( in_category(9 )) {
    get_template_part('category-case');
} elseif ( in_category(array( 36,37,38 ))) {
        get_template_part('category-news' );
} else {
    get_template_part('category-product' );
}
?>