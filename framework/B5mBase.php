<?php
// 待完善
/**
 * @link http://www.b5m.com
 * @author weiyan@b5m.com
 * @copyright 2014 Marek Lichtner
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */

defined('B5M_DEBUG') or define('B5M_DEBUG',false);
defined('B5M_TRACE_LEVEL') or define('B5M_TRACE_LEVEL',0);
defined('B5M_PATH') or define('B5M_PATH',dirname(__FILE__));
defined('B5M_BASE_PATH') or define('B5M_BASE_PATH',B5M_PATH.DIRECTORY_SEPARATOR.'base');

/**
 * YiiBase is a helper class serving common framework functionalities.
 *
 * Do not use YiiBase directly. Instead, use its child class {@link Yii} where
 * you can customize methods of YiiBase.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system
 * @since 1.0
 */
class B5mBase
{
    public static $classMap=array();
    private static $_app;
    private static $_imports=array();                   // alias => class name or directory
    private static $_includePaths;                      // list of include paths

    /**
     * @return string the version of Yii framework
     */
    public static function getVersion()
    {
        return '1.1.10';
    }

    // 初始化应用;连接数据库......
    public static function app()
    {

    }

    /**
     * @return string the path of the framework
     */
    public static function getFrameworkPath()
    {
        return B5M_PATH;
    }

    // 导入指定的类
    public static function import($alias,$isFile=false)
    {

    }

    /**
     * Class autoload loader.
     * This method is provided to be invoked within an __autoload() magic method.
     * @param string $className class name
     * @return boolean whether the class has been loaded successfully
     */
    // 自动加载类
    public static function autoload($className)
    {
        // calss map
        if(isset(self::$classMap[$className]))
            include(self::$classMap[$className]);
        // core Class
        elseif(isset(self::$_coreClasses[$className]))
            include(B5M_PATH.self::$_coreClasses[$className]);
        // class file | 暂不支持
       /* else
        {
            // include class file relying on include_path
            if(strpos($className,'\\')===false)  // class without namespace
            {
                if(self::$enableIncludePath===false)
                {
                    foreach(self::$_includePaths as $path)
                    {
                        $classFile=$path.DIRECTORY_SEPARATOR.$className.'.php';
                        if(is_file($classFile))
                        {
                            include($classFile);
                            if(B5M_DEBUG && basename(realpath($classFile))!==$className.'.php')
                                // 抛出异常
                                // throw new CException(Yii::t('b5m','Class name "{class}" does not match class file "{file}".', array(
                                //     '{class}'=>$className,
                                //     '{file}'=>$classFile,
                                //     )));
                            break;
                        }
                    }
                }
                else
                    include($className.'.php');
            }
            else  // class name with namespace in PHP 5.3
            {
                $namespace=str_replace('\\','.',ltrim($className,'\\'));
                if(($path=self::getPathOfAlias($namespace))!==false)
                    include($path.'.php');
                else
                    return false;
            }
            return class_exists($className,false) || interface_exists($className,false);
        }*/
        return true;
    }

    /**
     * Logs a message.
     * Messages logged by this method may be retrieved via {@link CLogger::getLogs}
     * and may be recorded in different media, such as file, email, database, using
     * {@link CLogRouter}.
     * @param string $msg message to be logged
     * @param string $level level of the message (e.g. 'trace', 'warning', 'error'). It is case-insensitive.
     * @param string $category category of the message (e.g. 'system.web'). It is case-insensitive.
     */
    // 日志
    public static function log($msg,$level,$category)
    {

    }

    // b5m核心类
    private static $_coreClasses=array(
        // 'CApplication' => '/base/CApplication.php',
        // 'CApplicationComponent' => '/base/CApplicationComponent.php',
        );

}
// spl_autoload_register()
// spl_autoload_register(array('B5mBase','autoload'));
