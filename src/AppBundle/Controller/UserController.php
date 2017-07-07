<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:User:index.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/connect", name="connect")
     */
    public function connectAction()
    {
        return $this->render('AppBundle:User:connect.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        return $this->render('AppBundle:User:logout.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/addPost", name="addPost")
     */
    public function addPostAction()
    {
        return $this->render('AppBundle:User:add_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/register", name="register_page")
     */
    public function registerAction(Request $request)
    {

        //Instance de l'entité User
        $user = new User();

        //Création du formulaire
        $form = $this->createForm(
            UserType::class,
            $user,
            [
                "method" => "post"
            ]
        );
        //Traitement du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->addFlash("info", "Votre Inscription a bien été prise en compte.");
                return $this->redirectToRoute("index");
            } catch (UniqueConstraintViolationException $ex) {
                $this->addFlash("danger", "Il existe déjà un utilisateur avec cet identifiant");
            }
        }
        //Affichage de la vue avec le formulaire
        return $this->render("AppBundle:User:register.html.twig",
            ["registerForm" => $form->createView()]);
    }



}
