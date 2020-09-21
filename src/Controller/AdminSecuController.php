<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/register", name="register")
    */
    public function register(Request $request, EntityManagerInterface $manager)
    {
        $user = new Users;
        $form = $this->createform(RegisterType::class, $user);

        $user = new Users();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("home");
        }

        return $this->render('admin_secu/register.html.twig',[
            "form" => $form->createView()
        ]);
    }
}
