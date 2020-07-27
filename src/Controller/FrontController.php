<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController {

    /**
     * @Route("/", name="front_home")
     */
    public function index(){
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->connect();
        $connected = $em->getConnection()->isConnected();
        
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/equipe", name="front_team", methods={"GET"})
     */
    public function showUsers(){
       
       // $currentSurvey = $this->surveyRepository->find($id);

        //return $this->render('survey/index.html.twig', []);

    }
}