<?php

namespace App\Controllers;

use Doctrine\ORM\EntityManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class EquipmentController
{
    private $entityManager;
    private $twig;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;

        // Configurer Twig
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($loader);
    }

    public function index()
    {
        // Récupérer les animaux depuis la base de données
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipments = $equipmentRepository->findAll();

        // Rendu de la vue Twig
        echo $this->twig->render('equipment/index.twig', ['equipments' => $equipments]);
    }

    public function create()
    {
        echo $this->twig->render('equipment/create.twig');
    }

    public function store($data) {

        $equipment = new \App\Models\Equipment();

        $equipment->setName($data['name']);
        $availability = isset($data['availability']) ? true : false;
        $equipment->setAvailability($availability);
        $equipment->setStatus($data['status']);
        $equipment->setAvailability($data['availability']);

        $this->entityManager->persist($equipment);
        $this->entityManager->flush();

        header('Location: ?action=equipment.index');
        exit;
    }

    public function edit($id)
    {
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipment = $equipmentRepository->find($id);
        echo $this->twig->render('equipment/edit.twig', ['equipment' => $equipment]);
    }

    public function update($data) {
        $id = $data['id'];
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipment = $equipmentRepository->find($id);

        $equipment->setName($data['name']);
        $availability = isset($data['availability']) ? true : false;
        $equipment->setAvailability($availability);
        $equipment->setStatus($data['status']);

        $this->entityManager->flush();

        header('Location: ?action=equipment.index');
        exit;
    }


    public function delete($id) {
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipment = $equipmentRepository->find($id);

        $this->entityManager->remove($equipment);
        $this->entityManager->flush();

        header('Location: ?action=equipment.index');
        exit;
    }



}