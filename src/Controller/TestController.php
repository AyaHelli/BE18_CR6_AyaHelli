<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TestController extends AbstractController
{
    #[Route('/', name: 'app_test_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    {
        $events = $doctrine->getRepository(Test::class)->findAll();
        return $this->render('test/index.html.twig', [
            "events" => $events
        ]);
    }

    #[Route('/create', name: 'app_test_create')]
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $event= new test();
        $form =  $this->createForm(TestType::class, $event);

        $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTime("now");

            $event = $form->getData();
            $event->setStartDate($now);  
            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();

            $this->addFlash("success", "Event has been added");

            return $this->redirectToRoute('app_test');
        }
        return $this->render('test/create.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/edit/{id}', name: 'app_Test_edit')]
    public function edit(Request $request, ManagerRegistry $doctrine, $id): Response
    {
        $event = $doctrine->getRepository(Test::class)->find($id);
        $form = $this->createForm(TestType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTime('now');
            $event = $form->getData();
            $event->setStartDate($now);
            $em = $doctrine->getManager();
            $em->persist($event);
            $em->flush();
            $this->addFlash("success", "Event has been updated");

            return $this->redirectToRoute('app_test');
        }

        return $this->render('test/edit.html.twig', ['form' => $form->createView()]);
    }


#[Route('/details/{id}', name: 'app_test_details')]
    public function details(ManagerRegistry $doctrine, $id): Response
    {
        $event = $doctrine->getRepository(test::class)->find($id);

        return $this->render('test/details.html.twig', ['event' => $event]);
    }

    #[Route('/delete/{id}', name: 'app_test_delete')]
    public function delete($id, ManagerRegistry $doctrine): Response
    {

        $event = $doctrine->getRepository(test::class)->find($id);
        $em= $doctrine->getManager();
        $em->remove($event);
        $em->flush();
        $this->addFlash("success", "event has been removed");
        
        return $this->redirectToRoute('app_test');
    }

    #[Route('/music', name: 'music')]
    public function music(ManagerRegistry $doctrine): Response
    {
        $filtering  = $doctrine->getManager();
        $music = $filtering ->getRepository(Test::class)->findBy(['type' => 'music']);
        return $this->render('test/music.html.twig', [
            "events" => $music
        ]);
    }

    #[Route('/theater', name: 'theater')]
    public function theater(ManagerRegistry $doctrine): Response
    {
        $filtering  = $doctrine->getManager();
        $theater = $filtering ->getRepository(Test::class)->findBy(['type' => 'theater']);
        return $this->render('test/theater.html.twig', [
            "events" => $theater
        ]);
    }

    #[Route('/sport', name: 'sport')]
    public function sport(ManagerRegistry $doctrine): Response
    {
        $filtering  = $doctrine->getManager();
        $sport = $filtering ->getRepository(Test::class)->findBy(['type' => 'sport']);
        return $this->render('test/sport.html.twig', [
            "events" => $sport
        ]);
    }





    

   

   
}
