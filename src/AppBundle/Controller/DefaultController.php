<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/inicio.html", name="inicio")
     */
    public function inicioAction()
    {

        
        return $this->render('default/inicio.html.twig');
    }

        /**
     * @Route("/sobre_nosotros.html", name="sobre_nosotros")
     */
    public function sobreNosotrosAction()
    {

        
        return $this->render('default/sobre_nosotros.html.twig');
    }

        /**
     * @Route("/donde_estamos.html", name="donde_estamos")
     */
    public function dondeEstamosAction()
    {

        
        return $this->render('default/donde_estamos.html.twig');
    }

        /**
     * @Route("/contacto.html", name="contacto")
     */
    public function contactoAction()
    {

        
        return $this->render('default/contacto.html.twig');
    }

}
