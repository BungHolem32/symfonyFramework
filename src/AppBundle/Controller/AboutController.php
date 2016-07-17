<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 17/07/2016
 * Time: 17:53
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function showAboutPageAction()
    {
        return $this->render('pages/about/about.html.twig', array('title' => 'My About Page'));
    }
}

