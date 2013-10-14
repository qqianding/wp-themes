

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

elseif ( in_category('shi-sheng-feng-cai') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-shi-sheng-feng-cai.php');
}

elseif ( in_category('da-yi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-da-yi.php');
}
elseif ( in_category('kc-ti-xi') ) { // plugin 为category的别名
include(TEMPLATEPATH . '/single-kc-ti-xi.php');
}

elseif ( in_category('company-service') ) {
include(TEMPLATEPATH . '/single-company-service.php');
}
elseif ( in_category('case-all') ) {
include(TEMPLATEPATH . '/single-case-all.php');
}
elseif ( in_category('fs-li-lun') ) { 
include(TEMPLATEPATH . '/single-fs-li-lun.php');
}
else {
include(TEMPLATEPATH . '/single-all.php');
}
?>