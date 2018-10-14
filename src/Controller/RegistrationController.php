<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function new(Request $request)
    {
        $user = new Users();

        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('sign up', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('registration_success');
        }

        return $this->render('registration/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/register/submit", name="registration_success")
     */
    public function confirmation()
    {
        return $this->render('registration/success.html.twig');
    }
}
