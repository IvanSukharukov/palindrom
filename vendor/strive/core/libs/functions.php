<?php

/**
 * Функция отладки/распечатки
 *
 * @param данные (переменная, массив, объект) $data
 * @return $data
 */
function db($data)
{
    $info = debug_backtrace();
    $file = file($info[0]['file']);
    $src  = $file[$info[0]['line'] - 1];
    //$src = rtrim(ltrim($src, 'db('), ");");
    //$src = rtrim($src, " \);");
    $pat  = '#(.*)' . __FUNCTION__ . ' *?\( *?\$(.*) *?\)(.*)#i';  // search pattern for wtf(parameter)
    $arguments  = trim(preg_replace($pat, '$2', $src));
    echo ($info[0]['file'] . '<br>');
    echo "Debug: <b>" . $arguments . "</b><br>";
    echo ("Строка: <b>" . $info[0]['line'] . "</b><br>");
    echo "<pre style=\"overflow:visible;\">" . print_r($data, true) . "</pre>";
}
