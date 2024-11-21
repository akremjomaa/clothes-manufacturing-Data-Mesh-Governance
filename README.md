<<<<<<< HEAD
# clothes-manufacturing-Data-Mesh-Governance
=======
# Microservices

Ce dépôt contient trois microservices interconnectés développés pour gérer différents aspects d'une entreprise.

## Fabrication Microservice

Ce microservice est chargé de gérer les données liées à la fabrication des produits de l'entreprise. Il expose des API pour obtenir des détails sur les produits en cours de fabrication, leur état actuel, la date de production, etc.

**Fonctionnalités :**
- Liste des produits en cours de fabrication
- Détails sur un produit spécifique
- Statut actuel de chaque produit

**Endpoints :**
- `/api/fabrication` : Renvoie la liste de tous les produits en cours de fabrication.
- `/api/fabrication/{id}` : Renvoie les détails d'un produit spécifique en fonction de son ID.

## Contrôle Qualité Microservice

Ce microservice gère les informations relatives au contrôle qualité des produits fabriqués. Il fournit des données sur l'état de qualité de chaque produit, les défauts identifiés lors des inspections, et les remarques associées.

**Fonctionnalités :**
- État de qualité des produits
- Liste des défauts identifiés
- Détails de l'inspection pour chaque produit

**Endpoints :**
- `/api/qualityControl` : Renvoie l'état de qualité de tous les produits.
- `/api/qualityControl/{id}` : Renvoie les détails d'inspection d'un produit spécifique en fonction de son ID.

## Catalogue Microservice

Ce microservice agit comme un catalogue central répertoriant tous les microservices disponibles dans l'écosystème de l'entreprise. Il fournit des métadonnées sur chaque microservice, y compris leurs descriptions, versions, URLs d'accès, etc.

**Fonctionnalités :**
- Liste des microservices disponibles
- Métadonnées sur chaque microservice
- Statut d'accessibilité des microservices

**Endpoints :**
- `/api/services` : Renvoie la liste de tous les microservices disponibles avec leurs métadonnées.
- `/api/services/{id}` : Renvoie les détails d'inspection d'un microservice spécifique en fonction de son ID.

## Interaction entre les microservices

Les microservices de Fabrication et Contrôle Qualité sont interconnectés. Le microservice Fabrication fournit des informations sur les produits en cours de production, tandis que le microservice Contrôle Qualité fournit des données sur l'état de qualité de ces produits. Le microservice Catalogue agit comme un répertoire central répertoriant tous les microservices disponibles.

Les microservices peuvent être utilisés indépendamment, mais ils interagissent pour fournir une vue complète de la fabrication et du contrôle qualité des produits de l'entreprise.

# Guide d'utilisation du Projet

Ce guide détaille les étapes pour exécuter le projet sur votre environnement local à l'aide de Docker.

## Prérequis

- [Docker Desktop](https://www.docker.com/products/docker-desktop) installé sur votre machine.
- Accès à Internet pour télécharger les images Docker.

## Instructions

1. **Téléchargement du dépôt Git**

   Clonez le dépôt Git sur votre machine en utilisant la commande suivante :

   ```bash
   git clone "https://github.com/akremjomaa/clothes-manufacturing-Data-Mesh-Governance.git"


 2. **Accédez à chaque dossier de microservice à l'aide de la commande**

  ```bash
  cd microservice_nom
```

3. **Exécution avec Docker**

À l'intérieur de chaque dossier de microservice, lancez l'application à l'aide de Sail (un wrapper autour de Docker) en exécutant la commande :

```bash
./vendor/bin/sail up
```

  4. **Accès à l'application**

Une fois l'application lancée, vous pourrez accéder à chaque microservice à travers les ports spécifiés dans le projet ou via les URL appropriées. Par exemple :

- Fabrication microservice : http://localhost:8081/api/fabrication

- Catalogue microservice : http://localhost:8082/api/services
>>>>>>> origin/master
