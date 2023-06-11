<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventMakerType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function authenticate(Request $request): Response
    {

        $event = new Event();

        $form = $this->createForm(EventMakerType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $event = $form->getData();

            // ... perform some action, such as saving the task to the database

        }
        return $this->render('event/index.html.twig', [
            'form' => $form,
        ]);
    }
}
