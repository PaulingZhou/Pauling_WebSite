<?php
    
$pattern = '/^(\w+)\.(\w+)\.com$/';
$subject = 'www.imooc.com';

$matches = array();
preg_match_all($pattern, $subject, $matches);
show($matches);

/*
*  * @name : show
*   * @description : output debug
*    * @param $var : input data
*     * @return void
*      */
function show($var = null, $isdump = false) {
        $func = $isdump ? 'var_dump' : 'print_r';
        if(empty($var)) {
            echo 'null';
        } elseif(is_array($var) || is_object($var)) {
            echo '<pre>';
            $func($var);
            echo '</pre>';
        } else {
            $func($var);
        }
}

?>
