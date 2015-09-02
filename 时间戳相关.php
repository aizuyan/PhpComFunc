<?php
/**
 * 获取当前微妙数
 * @return double 
 * 这里要注意，32位软件int型最大不支持13位，这里返回double类型
 */
public static function getTimeMs()
{
	$timeMs = microtime(true);
	$timeMs = $timeMs * 1000;
	return floatval(sprintf("%.0f", $timeMs));
}
/**
 * 获取当天0点的时间戳
 */
$timeStamp = strtotime(date("Y-m-d"));

/**
 * 获取当天23:59:59的时间戳
 */
$timeStamp = strtotime(date("Y-m-d")." 23:59:59");

/**
 * 获取本周周一0:0:0
 * N参数 PHP 5.1.0才开始支持，获取周几(Monday => 1,...Sunday=>7)，类似的还有w参数(Sunday=>0,...Saturday=>6)
 */
$week = date("N") - 1;
$timeStamp = strtotime(date("Y-m-d 0:0:0", strtotime("-{$week}day")));

/**
 * 获取本周日23:59:59
 */
$week = 7 - date("N");
$timeStamp = strtotime(date("Y-m-d 23:59:59", strtotime("+{$week}day")));

/**
 * 获取上周一0:0:0
 * 以此类推 -{num}week
 */
$week = date("N") - 1;
$timeStamp = strtotime(date("Y-m-d 0:0:0", strtotime("-{$week}day -1week")));

/**
 * 获取下周日23:59:59
 * 以此类推 +{num}week
 */
$week = 7 - date("N");
$timeStamp = strtotime(date("Y-m-d 23:59:59", strtotime("+{$week}day +1week")));

/**
 * 获取当前月第一天0:0:0的时间戳
 */
$timeStamp = strtotime(date("Y-m-01 0:0:0"));

/**
 * 获取当前月最后一天23:59:59的时间戳
 * 其中t参数 [t 	Number of days in the given month]
 */
$timeStamp = strtotime(date("Y-m-t 23:59:59"));
/**
 * 获取上个月的第一天0:0:0
 * +1 month 获取下个月
 */
$timeStamp = strtotime(date("Y-m-01 0:0:0", strtotime("-1 month")));


/**
 * 获取上个月最后一天23:59:59
 * +1获取下个月
 */
$timeStamp = strtotime(date("Y-m-t 23:59:59", strtotime("-1 month")));
