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
