<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 17/07/2016
 * Time: 17:37
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function HomePageAction(){
        return $this->render(':pages/home:home.html.twig',array('title'=>'My Home Page'));
    }
}