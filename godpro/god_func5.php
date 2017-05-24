<?php
    // functions for php5
	function genConfig($str) {
        $result = '';
        
        // 创建json文件
        $filename = getcwd().'/god.json';
        $content = '{'.$str.'}';
        $count = file_put_contents($filename, $content);
        
        // 反馈信息
        if ($count) {
            $result = $count . ' of bytes is written'.PHP_EOL;
            $result .= 'god config is created';
        }
        return $result;
    }

