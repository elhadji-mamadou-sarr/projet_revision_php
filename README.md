# projet_revision_php
Ce dépôt contient trois versions distinctes. Chaque version reflète une progression dans les approches et les techniques de développement utilisées.

## **Version 1 : Programmation procédurale**  
Dans cette première version :  
- Approche classique basée sur la programmation procédurale.  
- Interaction directe avec la base de données via des requêtes SQL.  
- Les vues sont créées directement avec du HTML et du PHP mélangé.  
- Objectif : Implémenter les fonctionnalités de base rapidement.
  Cette version fait la gestion d'une universite avec comme table `etudiants` et `cours`

---

## **Version 2 : Programmation orientée objet (POO) | Gestion de rendez-vous **  
Dans cette deuxième version :  
- Transition vers la POO pour une meilleure organisation du code.  
- Création de classes pour représenter les entités comme `Client` et `RendezVous`.  
- Gestion des données via des méthodes dans les classes.  
- Utilisation de vues toujours en PHP, mais avec une séparation plus claire entre la logique et la présentation.

---

## **Version 3 : POO avancée avec ORM Doctrine et moteur de template | Gestion de ferme**  
Dans cette dernière version :  
- Utilisation de l'ORM Doctrine pour gérer les interactions avec la base de données :  
  - Mapping des entités à des tables SQL.  
  - Gestion simplifiée des relations entre entités (`Animal` et `Equipement`).  
- Intégration d'un moteur de templates (par exemple, Twig) pour une gestion des vues plus claire et maintenable.  
- Une architecture plus proche des standards actuels pour les projets professionnels.

---

## Pourquoi ces trois versions ?  
Ce projet illustre une progression méthodologique et technique :  
1. **V1** : Simplicité et efficacité immédiate.  
2. **V2** : Introduction aux concepts de modularité et réutilisabilité avec la POO.  
3. **V3** : Adoption des bonnes pratiques modernes, avec l'utilisation d'un ORM et d'un moteur de templates.  

---

## Comment tester ?  
1. Clonez ce dépôt :  
   ```bash
   git clone <url_du_depot>
   cd <nom_du_dossier>
