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

elseif ( in_category('shi-sheng') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-shi-sheng-feng-cai.php');
}

elseif ( in_category('da-yi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-da-yi.php');
}

elseif ( in_category('kc-ti-xi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-kc-ti-xi.php');
}

elseif ( is_category('company-service') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/category-service.php');
}
elseif ( is_category('case-all') ) {
include(TEMPLATEPATH . '/category-case-all.php');
}
elseif ( is_category('fs-li-lun') ) {
include(TEMPLATEPATH . '/fs-li-lun.php');
}

// elseif 结束
else {
include(TEMPLATEPATH . '/category-all.php');
}
?>