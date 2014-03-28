<?php
// 待完善
/**
 * B5m bootstrap file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.B5mframework.com/
 * @copyright 2008-2013 B5m Software LLC
 * @license http://www.B5mframework.com/license/
 * @package system
 * @since 1.0
 */

require(dirname(__FILE__).'/B5mBase.php');

/**
 * B5m is a helper class serving common framework functionalities.
 *
 * It encapsulates {@link B5mBase} which provides the actual implementation.
 * By writing your own B5m class, you can customize some functionalities of B5mBase.
 *
 * @author weiyan <zoushuai518@gmail.com>
 * @package system
 * @since 1.0
 */
class B5m extends B5mBase
{
}

// 载入FluentPDO类库
// $config_base = dirname(__FILE__) . DIRECTORY_SEPARATOR .'b5m/config/config.php';
// $FluentPDO = dirname(__FILE__) . DIRECTORY_SEPARATOR .'b5m/db/fluentpdo/FluentPDO.php';