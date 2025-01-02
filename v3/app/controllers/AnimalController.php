<?php

namespace App\Controllers;

use Doctrine\ORM\EntityManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AnimalController
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
        $animalRepository = $this->entityManager->getRepository('App\Models\Animal');
        $animals = $animalRepository->findAll();

        // Rendu de la vue Twig
        echo $this->twig->render('animal/index.twig', ['animals' => $animals]);
    }

    public function create()
    {
        echo $this->twig->render('animal/create.twig');
    }

    public function store($data) {
        $animal = new \App\Models\Animal();
        $animal->setType($data['type']);
        $animal->setAge($data['age']);
        $animal->setHealth($data['health']);
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipment = $equipmentRepository->find($data['idEquipement']);
        $animal->setIdEquipement($equipment);

        $this->entityManager->persist($animal);
        $this->entityManager->flush();

        header('Location: ?action=animal.index');
        exit;
    }

    public function edit($id)
    {
        $animalRepository = $this->entityManager->getRepository('App\Models\Animal');
        $animal = $animalRepository->find($id);

        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipments = $equipmentRepository->findAll();

        echo $this->twig->render('animal/edit.twig', [
            'animal' => $animal,
            'equipments' => $equipments
        ]);
    }

    public function update($data) {
        $id = $data['id'];
        $animalRepository = $this->entityManager->getRepository('App\Models\Animal');
        $animal = $animalRepository->find($id);
        $animal->setType($data['type']);
        $animal->setAge($data['age']);
        $animal->setHealth($data['health']);
        $equipmentRepository = $this->entityManager->getRepository('App\Models\Equipment');
        $equipment = $equipmentRepository->find($data['idEquipement']);
        $animal->setIdEquipement($equipment);

        $this->entityManager->flush();

        header('Location: ?action=animal.index');
        exit;
    }


    public function delete($id) {
        $animalRepository = $this->entityManager->getRepository('App\Models\Animal');
        $animal = $animalRepository->find($id);

        $this->entityManager->remove($animal);
        $this->entityManager->flush();

        header('Location: ?action=animal.index');
        exit;
    }



}