<?php


namespace FrontBundle\Controller;


use EventBundle\Entity\produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class produittController extends Controller
{
    public function afficherfrontfrontAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();

        //$modele=$em->getRepository(Modele::class)->findAll();


        return $this->render('@Front/Default/produit.html.twig', array("produit" => $produit));
    }

    public function afficherDetailsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();

        //$modele=$em->getRepository(Modele::class)->findAll();

        return $this->render('@Front/Default/Detailsproduit.html.twig', array("produit" => $produit));
    }
}