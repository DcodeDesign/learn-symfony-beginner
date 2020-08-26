<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use App\Service\Greeter;

class HelloController extends AbstractController
{

    /**
     * @Route("hello/exemple/{param}", requirements={"param"="\d+"}, methods={"GET"}) // regex
     */
    function ExempleNumber($param)
    {

        return new Response(' Hello : number ' . $param);
    }
    /**
     * @Route("hello/exemple/{param}")
     */
    function ExempleDefault(Request $request, $param)
    {
        // ...
        /*
        return $this->render('base.html.twig');
        return $this->redirectToRoute('/');
        throw $this->createNotFoundException();
       
        $title = "User";
        $users = ["Jhon", "Lucy", "Martin", "Jean"];
        return $this->render(
            'hello.html.twig',
            ['title' => $title, 'array' => $users]
        );
        */

        // ...
        //var_dump($request->query);
        //die;
        $title = "User";
        $params = $request->query->all();
        return $this->render(
            'hello.html.twig',
            ['title' => $title, 'array' => $param]
        );

        // ...
        /*
        $params = $request->query->all();
        $string = "Les paramètres sont : </br>";
        foreach ($params as $key => $value) {
            $string = $string . '-' . $key .  ':' . $value . '</br>';
        }
        return new Response($string . ' ' . $param);
        */
    }

    /**
     * @Route("hello/{param}", requirements={"param"="\d+"}, methods={"GET"}) // regex
     */
    /*
    function helloNumber($param)
    {
        return new Response('Number : ' . $param);
    }
    */


    /**
     * @Route("hello", name="hello_index")
     */
    function hello()
    {
        return new Response('hello');
    }

    /**
     * @Route("hello/{name}", name="hello_index_name")
     */
    function helloDefault(Request $request, $name)
    {
        $local = $request->getLocale();
        return new Response('String : ' . $name . ', locale : ' . $local);
    }

    /**
     * @Route("hello/{_locale}", name="hello_index_local")
     */
    function helloLocal(Request $request)
    {
        $local = $request->getLocale();
        return new Response('Locale : ' . $local);
    }

    /**
     * @Route("/service", name="service")
     */
    public function service(LoggerInterface $logger)
    {
        $logger->alert('logger');
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/serviceII", name="serviceII")
     */
    public function serviceII(Greeter $logger)
    {
        $logger->greet();
        return new Response($logger->greet());
    }

    /**
     * @Route("/", name="blog_index")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }
}
