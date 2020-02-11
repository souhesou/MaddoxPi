<?php

namespace RefugieBundle\Controller;

use RefugieBundle\Entity\Refugee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RefugieController extends Controller
{
    public function ajoutAction(Request $request)
    {

        $c=$this->getDoctrine()->getManager();
        if($request->isMethod('POST')) {
            $nom = $request->get('nom');
            $prenom= $request->get('prenom');
                $age= $request->get('age');
                    $origine= $request->get('origine');
            $refuge=new Refugee($nom,$prenom,$age,$origine);
            $c->persist($refuge);
            $c->flush();
            return $this->redirectToRoute('affiche_Refugie');
        }return $this->render("@Refugie/Refugie/ajout.html.twig");
    }

    public function afficheAction(Request $request)
    {
        $refugie=$this->getDoctrine()->getRepository(Refugee::class)->findAll();
        return $this->render("@Refugie/Refugie/listeRefugie.html.twig",array('refugie'=>$refugie));
    }


    public function modifierAction(Request $request){


            $c=$this->getDoctrine()->getManager();
            if($request->isMethod('POST')) {
                $nom = $request->get('nom');
                $prenom= $request->get('prenom');
                $age= $request->get('age');
                $origine= $request->get('origine');
                $refuge=new Refugee($nom,$prenom,$age,$origine);
                $c->persist($refuge);
                $c->flush();
                return $this->redirectToRoute('affiche_Refugie');
            }return $this->render("@Refugie/Refugie/ajout.html.twig");



    }

    public function supprimerAction($id)
    {
        $c=$this->getDoctrine()->getManager();
        $supp=$this->getDoctrine()->getRepository(Refugee::class)->find($id);
        $c->remove($supp);
        $c->flush();
        return  $this->redirectToRoute("affiche_Refugie");
    }

}
