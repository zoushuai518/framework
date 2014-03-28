<?php
// 待完善
/**
* 数据库连接
*/
class BDbConnection
{

    private $_driverMap=array(
        'mysqli'=>'',   // MySQL
        'mysql'=>'',    // MySQL
        'pdo'=>'fluentpdo',        // Oracle driver
    );
   /* private $_dbType = 'PDO';
    private $_username = '';
    private $_password = '';
    private $_charset = '';*/
    // 构造函数
    // function __construct($config)
    function __construct()
    {
        // return $this->_getConnection($config);
    }

    // 通过不同 DB驱动，连接 数据库
  /*private static function _getConnection($this->_dbType){

    }*/

    // private static function _getPdo($config){
    public function _getPdo($config){
        try {
            // $pdo = new PDO($config['db']['dsn'],$config['db']['username'],$config['db']['password'],$config['db']['attr_presistent']);
            $pdo = new PDO($config['db']['dsn'],$config['db']['username'],$config['db']['password']);
            // 设置编码
            $pdo->query("set names utf8");
            // $pdo->query('SET character_set_connection='.$config['db']['charset'].', character_set_results='.$config['db']['charset'].', character_set_client=binary');
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            // $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
            // $this->_getError();
        }
        if($this->_driverMap['pdo']==='fluentpdo'){
            include 'fluentpdo/FluentPDO.php';
            $fluentpdo = new FluentPDO($pdo);
        }
        // return $fluentpdo;
        return $pdo;
    }

    private static function _getMysql(){

    }

    private static function _getMysqli(){

    }

    // 连接数据库异常
    private static function _getError(){

    }

    // 关闭数据库连接
    private static function _close(){

    }

}
