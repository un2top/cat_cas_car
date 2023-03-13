<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(){
        return $this->render('articles/homepage.html.twig');
    }
    #[Route('/articles/{slug}')]
    public function show($slug){
        $comments = ['Sunt visuses visum raptus, regius sensoremes.',
            'Vae, teres frondator!', 'Naviss nocere in piscinam!',
            'Alter, ferox homos etiam aperto de clemens, rusticus plasmator.',
            'Fidelis indictio inciviliter carpseriss guttus est.'];

        return $this->render('articles/show.html.twig',['comments'=>$comments, 'article'=>ucwords(str_replace('-',' ', $slug))]);
    }

}