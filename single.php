

<?php
if ( in_category('company-news') ) {
include(TEMPLATEPATH . '/single-company-news.php');
}

elseif ( in_category('exciting-activities') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-exciting-activities.php');
}

elseif ( in_category('ke-cheng') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-ke-cheng.php');
}

elseif ( in_category('zjy-jie-shao') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-zjy-jie-shao.php');
}

elseif ( in_category('fdq-yu-er-jing') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-fdq-yu-er-jing.php');
}

elseif ( in_category('da-yi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-da-yi.php');
}

elseif ( in_category('company-service') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-company-service.php');
}
elseif ( in_category('case-all') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-case-all.php');
}

else {
include(TEMPLATEPATH . '/single-all.php');
}
?>