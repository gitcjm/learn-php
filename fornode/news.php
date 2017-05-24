<?php
/**
 * Created by PhpStorm.
 * User: cjm
 * Date: 5/24/17
 * Time: 4:17 PM
 */

    $news = new stdClass();
    $news->id =123;
    $news->title = '今天气温达到了100度';
    $news->content = '猪一样的天气,这么热,万一我和你妈同时掉水里,请先救你妈,我要在水里待会儿,能听懂?!';

    exit(json_encode($news));
?>