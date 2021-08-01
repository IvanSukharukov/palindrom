<?php

namespace app\controllers;

// use strive\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Найти палиндром', 'Веб-приложение, которое находит палиндромы', 'Палиндром, поиск палиндромов');
    }
}