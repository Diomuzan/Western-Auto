<?php

namespace App\Controller;

use App\Entity\Trucks;
use App\Form\AddTruckType;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WesternAutoController extends AbstractController
{
    #[Route('/WesternAuto/Home', name: 'Home')]
    public function home(EntityManagerInterface $entityManager, int $id = null): Response
    {

        if ($id == null) {
            $trucks = $entityManager->getRepository(Trucks::class)->findAll($id);
        } else {
            $trucks = $entityManager->getRepository(Trucks::class)->findAll();
        }

        return $this->render('Western_Auto_Home.html.twig', ['trucks' => $trucks]);
    }

    #[Route('/WesternAuto/Detail', name: 'Detail')]
    public function detail(EntityManagerInterface $entityManager, int $id): Response {

        $truckDetail = $entityManager->getRepository(Trucks::class)->find($id);

        return $this->render('Western_Auto_Detail_html.twig');
    }


    #[Route('/WesternAuto/Add', name: 'Add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response {
        $addTruck = new Trucks();
        $form  = $this->createForm(AddTruckType::class, $addTruck);
        $form->handleRequest($request);

        if ($form->isSubmitted () && $form->isValid()) {
            $addTruck = $form->getData();
            $entityManager->persist($addTruck);
            $entityManager->flush();
            return $this->redirectToRoute('Home');
        } else {
            $this->addFlash('error', 'Oops, something went wrong. Please check your input and try again.');
        }
        return $this->render('Western_Auto_Add.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/WesternAuto/Edit/{id}', name: 'Edit')]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response {


        $truck = $entityManager->getRepository(Trucks::class)->find($id);

        if (!$truck) {
            throw $this->createNotFoundException('Truck not found');
        }

        $form = $this->createForm(AddTruckType::class, $truck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('Home');
        }

        return $this->render('Western_Auto_Edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/WesternAuto/Delete', name: 'Delete')]
    public function delete(): Response {

        return $this->render('Western_Auto_Delete.html.twig');
    }
}
