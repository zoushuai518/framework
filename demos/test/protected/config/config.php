<?php

// 主配置文件
return array(
    /*'import' => array(
            'lib.*',
            'lib/FluentPDO/lib/FluentPDO.php',
        ),*/
    'db'    =>  array(
        'dsn'             => 'mysql:host=127.0.0.1;dbname=b5m_scd',
        'username'        => 'root',
        'password'        => '',
        'charset'         => 'utf8',
        'tablePrefix'     => 'cms_',
        'attr_presistent' => array(
                PDO::ATTR_PERSISTENT => true,
            ),
        ),
    'import' => array(
            // 'b5m.db.fluentpdo.*',
            'b5m.db.fluentpdo.fluentpdo',
        ),
    );