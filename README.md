# Portfolio Symfony

Développement du portfolio avec Symfony


### Installation

*Prérequi sur votre machine pour le bon fonctionnement de ce projet : (Symfony version 5.0 minimum avec le CLI Symfony, ainsi que : Composer)

Les étapes pour installer le projet.

Après avoir cloner le projet avec ``git clone https://github.com/DimitriKft/myp_symfony.git``

Executez la commande ``cd myp_symfony`` pour vous rendre dans le dossier depuis le terminal.

Ensuite, dans l'ordre taper les commandes : 

- 1 ``composer install`` afin d'installer toutes les dépendances du projet.

- 2 installer la base de donnée MySQL : ``symfony console doctrine:database:create``

- 3 Préparer la migration en base de donnée : ``symfony console make:migration``

- 4 Exécuter la migration en base de donnée : ``symfony console doctrine:migration:migrate``

- 5 Vous pouvez maintenant accéder à votre portfolio en vous connectant au serveur : ``symfony server:start``



## Démarrage

Une fois sur l'application, il ne vous reste plus qu'a vous connecter au back-office en ajouter dans l'URL ``/admin``.

Nom d’utilisateur :  ``admin``

Mot de Passe: ``admin`` 

## Fabriqué avec

Projet déveloper avec:

* [Symfony](https://symfony.com/) - Framework PHP Symfony
**Latest Stable Release:** 5.1.5


## Versions

**Version** 0.0.1

## Auteurs
* **Caroline chatelon** _alias_ [@Rocalinecht](https://github.com/Rocalinecht)
* **Abdellah Skoundri** _alias_ [@Abdellah-SK](https://github.com/Abdellah-Sk)
* **Abdellah Skoundri** _alias_ [@DimitriKft](https://github.com/DimitriKft)


