# RattrapagePHP

# 1. Qu'est-ce qu'un container de services ? Quel est son rôle ?
Un container de services est un objet qui exécute des services, son rôle est d'éviter de créer manuellement l'objet à chaque fois

# 2. Quelle est la différence entre les commandes make:entity et make:user lorsqu'on utilise la consoleSymfony  ?
Lorsqu'on utilise la console Symfony, make:user sert à créer une entité spécifique aux users avec tous les élements nécessaire dont l'encodage du mdp alors que pour make:entity c'est la personne qui développe qui choisit ce qu'il veut mettre dans son entité

# 3. Quelle commande utiliser pour charger les fixtures dans la base de données ?
php bin/console doctrine:fixtures:load

# 4. Résumez de manière simple le fonctionnement du système de versions "Semver"
"Semver" est une gestion des versions d'un module

# 5. Qu'est-ce qu'un Repository ? A quoi sert-il ?
Un repository est un endroit de stockage des entités, ça évite de faire des requête SQL en dehors du repo

# 6. Quelle commande utiliser pour voir la liste des routes ?
php bin/console debug:router

# 7. Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur courant, etc...?
La variable globale est "app." et il faut mettre la requête voulu après le "." exemple "app.user" pour l'utilisateur

# 8. Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avonsabordées en cours ?
php bin/console doctrine:schema:update --dump-sql
php bin/console doctrine:schema:update --force

# 9. Quelle commande permet de créer une classe de contrôleur ?
php bin/console make:controller

# 10. Décrivez succintement l'outil Flex de Symfony
Flex est un outil qui remplace et/ou améliore l'installeur de symfony, Flex automatise les tâches les plus courantes comme l'installation et la suppression des bundles.
