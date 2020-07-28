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
    public function showAllUsers(){
       
        // $currentSurvey = $this->surveyRepository->find($id);

        //return $this->render('survey/index.html.twig', []);

    }

    /**
     * @Route("/carte", name="front_dishes", methods={"GET"})
     */
    public function showAllDishes(){
        /* Lister les catégories récupérée dans la table Category,
         ainsi que le nombre de plats disponibles dans chacune.
         */
 
     }

    /**
    * @Route("/carte/{id}", name="front_dishes_category", methods={"GET"})
    */
    public function showAllDishesByCategory(){
        /*  Vérifier l'existence de la category
            Renvoyer une Exception si la catégorie n'existe pas
            Afficher le nom de la categorie, liste ces plats (nom, prix, calories)
            Permettre le retour vers la liste des catégories
         */
 
     }
}