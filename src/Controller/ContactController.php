<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController

{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer, UserRepository $userRepository)
    {
        $users    = $userRepository->findAll(); 
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $contact = $form->getData();

            //Ici on envoi le mail 
            $message = (new \Swift_Message('Nouveau Contact'))
                // On attribue l'expediteur du $message
                ->setFrom($contact['email'])

                // On attribue le destinataire
                ->setTo('sangodim@gmail.com')

                // On crée le message avec la vue twig
                ->setBody(
                    $this->renderView(
                        'email/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;

            // On envoie le $message
            $mailer->send($message);
            $this->addFlash('success', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.');
            return $this->redirectToRoute('home');
        }


        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'users'    => $users 
        ]);
    }
}
