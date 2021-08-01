<?php

namespace app\controllers;

use app\models\AppModel;
use strive\base\Controller;

class AppController extends Controller
{    
    /**
     * Варианты склонения слова "найден"
     *
     * @var array
     */
    public $declension_search = array('найден', 'найдено', 'найдено');

    public function __construct($route)
    {
        parent::__construct($route);
        if (USE_DB) new AppModel();
    }

    
    /**
     * Реверс строки в кириллице (encoding = "utf-8")
     *
     * @param  mixed $str
     * @return void
     */
    protected static function mb_strrev($str)
    {
        $reverse_word = '';
        for ($i = mb_strlen($str); $i >= 0; $i--) {
            $reverse_word .= mb_substr($str, $i, 1);
        }
        return $reverse_word;
    }

    
    /**
     * Получить склонение слова в зависимости от числа перед словом
     *
     * @param  mixed $n
     * @param  mixed $words
     * @return void
     */
    protected static function declension_words($n, $words)
    {
        return ($words[($n = ($n = $n % 100) > 19 ? ($n % 10) : $n) == 1 ? 0 : (($n > 1 && $n <= 4) ? 1 : 2)]);
    }

    
    /**
     * Преобразовать первый символ строки в верхний регистр (encoding = "utf-8")
     *
     * @param  mixed $string
     * @param  mixed $encoding
     * @return void
     */
    protected static function mb_ucfirst($string, $encoding = "utf-8")
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }


    /**
     * Фильтрация входящих данных
     *
     * @param  string $data
     * @return string
     */
    public static function clear($data)
    {
        return strip_tags(trim($data));
    }

    
    /**
     * Сорировка массива по длине значений
     *
     * @param  mixed $a
     * @param  mixed $b
     * @return void
     */
    public static function sortByLength($a,$b){
        if($a == $b) return 0;
        return (strlen($a) > strlen($b) ? -1 : 1);
    }
    
}