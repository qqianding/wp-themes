<?php
if ( is_category('company-news') ) {
include(TEMPLATEPATH . '/category-news.php');
}
// elseif 在一次判断 想在加判断复制代码
elseif ( is_category('exciting-activities') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-exciting-activities.php');
}
elseif ( is_category('ke-cheng') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-ke-cheng.php');
}

elseif ( in_category('zjy-jie-shao') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-zjy-jie-shao.php');
}

elseif ( in_category('fdq-yu-er-jing') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-fdq-yu-er-jing.php');
}

elseif ( in_category('da-yi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-da-yi.php');
}


elseif ( is_category('company-service') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-service.php');
}
elseif ( is_category('case-all') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-case-all.php');
}


// elseif 结束
else {
include(TEMPLATEPATH . '/category-all.php');
}
?>