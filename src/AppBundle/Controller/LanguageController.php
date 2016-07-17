<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 17/07/2016
 * Time: 17:58
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LanguageController extends Controller
{
    public function getLanguageAction($lang){
        print_r($lang);

    }
}