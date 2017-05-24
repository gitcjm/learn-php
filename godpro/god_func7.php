<?php
	// functions for php7
    function genConfig($str):string {
        $result = '';

        $filename = getcwd().'/god.json';
        $content = '{'.$str.'}';
        $count = file_put_contents($filename, $content);
        if ($count) {
            $result = $count . ' of bytes is written'.PHP_EOL;
            $result .= 'god config is created';
        }

        return $result;
    }

