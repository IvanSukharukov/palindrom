<?php

namespace app\controllers;

class PalindromController extends AppController
{
   /**
    * Варианты склонения слова "палиндром"
    *
    * @var array
    */
   public $declension_palindromes = array('палиндром', 'палиндрома', 'палиндромов');
   

   /**
    * Поиск палиндромов
    *
    * @return void
    */
   public function searchPalindromAction()
   {
      $data = mb_strtolower(self::clear($_POST['string_is_palindrom']));
         $palindromes = [];
         for ($i = 0; $i < mb_strlen($data, 'UTF-8'); $i++) {
            //$j=2, т.к. если число или слово, например, '77' или 'aa', считается палиндромом
            for ($j = 2; $j <= (mb_strlen($data, 'UTF-8') - $i); $j++) {
               $word = mb_substr($data, $i, $j, 'UTF-8');
               $reverse_word = self::mb_strrev($word);
               if ($word == $reverse_word) {
                  $palindromes[] .= $word;
               }
            }
         }

         //отсортировать массив по длине слов (от меньшего к большему)
         usort($palindromes, function ($a, $b) { return strlen($a) <=> strlen($b); });

         if (!empty($palindromes)) {
            echo ('<div>' . self::mb_ucfirst(self::declension_words(count($palindromes), $this->declension_search) . ' <b>' . count($palindromes) . '</b> ' . self::declension_words(count($palindromes), $this->declension_palindromes)) . '</div>');
            echo '<ul>';
               foreach ($palindromes as $key => $palindrom) {               
                  echo ('<li>' . ($key + 1) . '. ' . self::mb_ucfirst($palindrom) . '</li>');
               }
            echo '</ul>';
            exit;
         }
         echo '<div>Не найдено ни одного палиндрома</div>';
         exit;
   }
}

