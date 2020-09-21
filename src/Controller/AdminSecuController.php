<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminSecuController extends AbstractController
{
    // /**
    //  * @Route("/register", name="register")
    // */
    // public function register(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder) 
    // {
    //     $user = new Users();
    //     $form = $this->createform(RegisterType::class, $user);

    //     $user = new Users();
    //     $form = $this->createForm(RegisterType::class, $user);

    //     $form->handleRequest($request);
    //     if($form->isSubmitted() && $form->isValid())
    //     {
    //         $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
    //         $manager->persist($user);
    //         $manager->flush();
    //         return $this->redirectToRoute("home");
    //     }

    //     return $this->render('admin_secu/register.html.twig',[
    //         "form" => $form->createView()
    //     ]);
    // }

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $util)
    {
        return $this->render('admin_secu/login.html.twig',[
            "lastUserName" => $util->getLastUsername(),
            "error"        => $util->getLastAuthenticationError() 
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
       
    }
}
