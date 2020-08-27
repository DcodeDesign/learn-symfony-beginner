<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\{TextType, ButtonType, EmailType, HiddenType, PasswordType, TextareaType, SubmitType, NumberType, DateType, MoneyType, BirthdayType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\UserType;
use App\Entity\TableUser;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="form")
     */
    function createUserForm(Request $request)
    {
        $user = new TableUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $userFormInput = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userFormInput);
            $entityManager->flush();
            return new Response('formulaire valide !');
        }

        return $this->render('form.html.twig', ['form' => $form->createView()]);
    }
}
