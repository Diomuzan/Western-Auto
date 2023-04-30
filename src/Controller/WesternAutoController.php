<?php

namespace App\Controller;

use App\Entity\Trucks;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function add(): Response {

        return $this->render('Western_Auto_Add.html.twig');
    }

    #[Route('/WesternAuto/Edit', name: 'Edit')]
    public function edit(): Response {

        return $this->render('Western_Auto_Edit.html.twig');
    }

    #[Route('/WesternAuto/Delete', name: 'Delete')]
    public function delete(): Response {

        return $this->render('Western_Auto_Delete.html.twig');
    }
}
