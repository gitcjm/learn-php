<?php
require('god_func'.substr(PHP_VERSION,0,1).'.php');

class godinit {
    static $v = 'god version is 1.2';
    static $prj_name = '';   // 项目名称
    static $prj_author = 'cjm'; // 项目作者

    // 初始化
    static function init() {
        echo 'Input your project name:'.PHP_EOL;
        self::$prj_name = trim(fgets(STDIN));
        echo 'Input your project author:'.PHP_EOL;
        self::$prj_author = trim(fgets(STDIN));
        
        $content = '"name":'.'"'.self::$prj_name.'",';
        $content .= '"author":'.'"'.self::$prj_author.'"';
        genConfig($content);
    }

    // 打包php文件(phar)
    static function make() {
        $phar = new Phar('god.phar');
        $phar->buildFromDirectory(dirname(__FILE__));   // 加正则'/^god.*/'有误, 不知何故
        $phar->setStub($phar->createDefaultStub('god'));
        $phar->compressFiles(Phar::GZ);
        return 'god.phar is created.';
    }
}