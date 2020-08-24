<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{

    function hello(Request $request)
    {
        // return $this->render('base.html.twig');
        // return $this->redirectToRoute('/');
        // throw $this->createNotFoundException();

        /*
        $title = "User";
        $users = ["Jhon", "Lucy", "Martin", "Jean"];
        return $this->render(
            'hello.html.twig',
            ['title' => $title, 'array' => $users]
        );
        */
        
        // var_dump($request->query);
        // die;
        $title = "User";
        $params = $request->query->all();
        /*
        return $this->render(
            'hello.html.twig',
            ['title' => $title, 'array' => $param]
        );
        */
        $string = "Les paramètres sont : </br>";
        foreach($params as $key => $value) {
            $string = $string . '-' . $key .  ':' . $value . '</br>';
        }
        return new Response($string);


    }
}
