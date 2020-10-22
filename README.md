# Portfolio Symfony

Make Your Portfolio !

### Prérequi

*Prérequi sur votre machine pour le bon fonctionnement de ce projet : 
- PHP Version 7.4.11 [Installer PHP](https://www.php.net/manual/fr/install.php) --  [Mettre à jour PHP en 7.4 (Ubuntu)](https://www.cloudbooklet.com/upgrade-php-version-to-php-7-4-on-ubuntu/)
- MySQL [Installer MySQL](https://doc.ubuntu-fr.org/mysql) ou [Installer MariaDB](https://doc.ubuntu-fr.org/mariadb)
- Symfony version 5.0 minimum avec le CLI(Binaire) Symfony [Installer Symfony](https://symfony.com/doc/current/setup.html) --  [Installer Binaire Symfony](https://symfony.com/download) 
- Composer [Installer Composer](https://getcomposer.org/download/) 
- Npm  [Installer Npm](https://www.npmjs.com/get-npm) 
- Yarn  [Installer Yarn](https://classic.yarnpkg.com/en/docs/install/#debian-stable) 

### Installation

Après avoir cloné le projet avec ``git clone https://github.com/DimitriKft/myp_symfony.git``

Executez la commande ``cd myp_symfony`` pour vous rendre dans le dossier depuis le terminal.

Ensuite, dans l'ordre taper les commandes dans votre terminal : 

- 1 ``composer install`` afin d'installer toutes les dépendances composer du projet.

- 2 ``npm install``      afin d'installer toutes les dépendances npm du projet.

- 3 ``yarn install``     afin d'installer toutes les dépendances yarn du projet.

- 4 installer la base de donnée MySQL. 
   Pour paramétrer la création de votre base de donnée, rdv dans le fichier .env du projet, et modifier la variable d'environnement selon vos paramètres : 

  ``DATABASE_URL=mysql://User:Password@127.0.0.1:3306/nameDatabasse?serverVersion=5.7``
  
   Puis éxécuter la création de la base de donnée avec la commande : ``symfony console doctrine:database:create``


- 5 Exécuter la migration en base de donnée :                                        ``symfony console doctrine:migration:migrate``

- 6 Exécuter les dataFixtures avec la commande :                                     ``php bin/console doctrine:fixtures:load``

- 7 Voir avant le css avant compilation :                                            ``yarn run encore production --watch``

- 8 Vous pouvez maintenant accéder à votre portfolio en vous connectant au serveur : ``symfony server:start``



## Démarrage

Une fois sur l'application, il ne vous reste plus qu'a vous enregistrer ``/register``.
   ! Attention l'application ne crée que des roles ADMIN,par mesure de sécurité, une fois votre utilisateur crée, il faut impérativement supprimer la route /register dans ``src/Controller/RegistrationController.php`` 
Puis enfin loger vous ``/login`` rendez vous dans le backoffice ``/admin``, il vous ne reste plus qu'a parametrer votre administrateur et enregistrer vos projets ! 

## Fixture
Le projet comprend des données factices pour vous permettre de tester le rapidemmant le projet.
  
Pour modifier vos fixtures rendez vous dans le fichier : ``src/DataFixtures/`` 
Exemple : 

     public function load(ObjectManager $manager)
      {
        $user = new User();
        $user->setEmail('admin@mail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'admin'));
        $user->setLastName('Smith');
        $user->setFirstName('John');
        $user->setPhone('07.77.88.29.32');
        $user->setLinkedin('https://www.linkedin.com/in/dimitri-klopfstein-12b399178/');
        $user->setGithub('https://github.com/DimitriKft');
        $user->setUpdated(new \DateTime('06/04/2014'));
        $manager->persist($user);
    
        $manager->flush();
      }
      
 Par défaut le login et le mot de passe sont :
  - Nom d’utilisateur :  ``admin@mail.com``
  - Mot de Passe :       ``admin`

Une fois vos paramètre personalisé, relancer la commande : ``php bin/console doctrine:fixtures:load``

Il ne vous reste plus qu'a retourner dans votre backoffice ``/admin`` et de modififier les projets en ligne ! 
  

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

**Version DJANGO** Le projet est également disponible avec le [framework python DJANGO ](https://github.com/Abdellah-Sk/myp-django) 

## Auteurs
* **Caroline Chatelon** _alias_  [@Rocalinecht](https://github.com/Rocalinecht)
* **Abdellah Skoundri** _alias_  [@Abdellah-SK](https://github.com/Abdellah-Sk)
* **Dimitri Klopfstein** _alias_ [@DimitriKft](https://github.com/DimitriKft)


