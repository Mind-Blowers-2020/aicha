<?php


namespace FrontBundle\Controller;


use EventBundle\Entity\produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class produittController extends Controller
{
    public function afficherfrontfrontAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();
        $active = $em->getRepository("EventBundle:produit")->findAll();
        //$modele=$em->getRepository(Modele::class)->findAll();

        $produit = $this->get('knp_paginator')->paginate($active, $request->query->get('page', 1), 4);
        return $this->render('@Front/Default/produit.html.twig', array("produit" => $produit));
        return $this->render('@Front/Default/peche.html.twig', array("produit" => $produit));
    }

    public function afficherfrontAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();
        $active = $em->getRepository("EventBundle:produit")->findAll();
        //$modele=$em->getRepository(Modele::class)->findAll();

        $produit = $this->get('knp_paginator')->paginate($active, $request->query->get('page', 1), 8);

        return $this->render('@Front/Default/peche.html.twig', array("produit" => $produit));
    }

    public function afficherchasseAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();
        $active = $em->getRepository("EventBundle:produit")->findAll();
        //$modele=$em->getRepository(Modele::class)->findAll();

        $produit = $this->get('knp_paginator')->paginate($active, $request->query->get('page', 1), 8);

        return $this->render('@Front/Default/chasse.html.twig', array("produit" => $produit));
    }

    public function affichervetementsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EventBundle:produit')->findAll();
        $active = $em->getRepository("EventBundle:produit")->findAll();
        //$modele=$em->getRepository(Modele::class)->findAll();

        $produit = $this->get('knp_paginator')->paginate($active, $request->query->get('page', 1), 8);

        return $this->render('@Front/Default/vetements.html.twig', array("produit" => $produit));
    }


public function afficherDetailsAction(\Symfony\Component\HttpFoundation\Request $request,$idP)
{
    $em= $this->getDoctrine()->getManager();
    $produit=$em->getRepository('EventBundle:produit')->find($idP);
    return $this->render('@Front/Default/Detailsproduit.html.twig', array(
        'idP'=>$produit->getIdP(),
        'image'=>$produit->getImage(),
        'nomprod'=>$produit->getnomprod(),
        'description'=>$produit->getdescription(),
        'qt'=>$produit->getqt(),
        'prix'=>$produit->getprix()
    ));
}
}