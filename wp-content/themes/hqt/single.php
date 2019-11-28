<?php
if ( in_category(9 )) {
    get_template_part('single-case' );
} elseif ( in_category(array( 36,37,38 ))) {
    get_template_part('single-news' );
} else {
    get_template_part('single-product' );
}
?>