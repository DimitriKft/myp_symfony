# Portfolio Symfony

Développement du portfolio avec Symfony


### Installation

*Prérequi sur votre machine pour le bon fonctionnement de ce projet : 
- PHP Version 7.4.11 [Installer PHP](https://www.php.net/manual/fr/install.php) --  [Mettre à jour PHP en 7.4 (Ubuntu)](https://www.cloudbooklet.com/upgrade-php-version-to-php-7-4-on-ubuntu/)
- Symfony version 5.0 minimum avec le CLI(Binaire) Symfony [Installer Symfony](https://symfony.com/doc/current/setup.html) --  [Installer Binaire Symfony](https://symfony.com/download) 
- Composer [Installer Composer](https://getcomposer.org/download/) 

Les étapes pour installer le projet.

Après avoir cloné le projet avec ``git clone https://github.com/DimitriKft/myp_symfony.git``

Executez la commande ``cd myp_symfony`` pour vous rendre dans le dossier depuis le terminal.

Ensuite, dans l'ordre taper les commandes dans votre terminal : 

- 1 ``composer install`` afin d'installer toutes les dépendances composer du projet.

- 2 ``npm install``      afin d'installer toutes les dépendances npm du projet.

- 3 ``yarn install``     afin d'installer toutes les dépendances yarn du projet.

- 4 ``composer update`` nécessaire pour que composer installe certaine dépendance.

- 4 installer la base de donnée MySQL :                                              ``symfony console doctrine:database:create``

- 5 Exécuter la migration en base de donnée :                                        ``symfony console doctrine:migration:migrate``

- 6 Exécuter les dataFixtures avec la commande :                                     ``php bin/console doctrine:fixtures:load``

- 7 Voir avant le css avant compilation :                                            ``yarn run encore production --watch``

- 8 Vous pouvez maintenant accéder à votre portfolio en vous connectant au serveur : ``symfony server:start``



## Démarrage

Une fois sur l'application, il ne vous reste plus qu'a vous connecter au back-office en ajouter dans l'URL ``/admin``.

Par défaut le login et le mot de passe sont :
  - Nom d’utilisateur :  ``admin@mail.com``
  - Mot de Passe :       ``admin`` 
  
Pour modifier vos paramètre personnel rendez vous dans le fichier : ``src/DataFixtures/UserFixtures.php``
Ici vous pouvez modifier vos paramètres personnels (Email, Nom/Prénom, Numéro de téléphone, lien vers vos Linkedin/Github)

     public function load(ObjectManager $manager)
      {
          $user = new User();
          $user->setEmail('admin@mail.com');
          $user->setRoles(['ROLE_ADMIN']);
          $user->setPassword($this->passwordEncoder->encodePassword($user,'azeaze'));
          $user->setLastName('Lerdorf');
          $user->setFirstName('Rasmus');
          $user->setPhone('0777882932');
          $user->setLinkedin('https://www.linkedin.com/in/dimitri-klopfstein-12b399178/');
          $user->setGithub('https://github.com/DimitriKft');
          $manager->persist($user);

          $manager->flush();
      }

Une fois vos paramètre personalisé, relancer la commande : ``php bin/console doctrine:fixtures:load``

Il ne vous reste plus qu'a retourner dans votre backoffice ``/admin`` et de mettre vos projets en ligne ! 
  

## Fabriqué avec

Projet développé avec:

* [Symfony](https://symfony.com/) - Framework PHP Symfony
**Latest Stable Release:** 5.1.5

Bundle utilisé dans le projet : 

- EasyAdmin              [Documentation EasyAdmin](https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html) 
- Swift Mailer           [Documentation Swift Mailer](https://symfony.com/doc/current/email.html) 
- VichUploaderBundle     [Documentation VichUploaderBundle](https://symfony.com/doc/2.x/bundles/EasyAdminBundle/integration/vichuploaderbundle.html)
- KnpPaginatorBundle     [Documentation KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) 
- DoctrineFixturesBundle [Documentation DoctrineFixturesBundle](https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html) 


## Versions

**Version** 0.0.1

## Auteurs
* **Caroline Chatelon** _alias_  [@Rocalinecht](https://github.com/Rocalinecht)
* **Abdellah Skoundri** _alias_  [@Abdellah-SK](https://github.com/Abdellah-Sk)
* **Dimitri Klopfstein** _alias_ [@DimitriKft](https://github.com/DimitriKft)


