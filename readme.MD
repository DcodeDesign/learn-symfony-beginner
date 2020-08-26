# Dépendances du projet

Le profileur est un outil de développement puissant qui donne des informations détaillées sur l'exécution de toute demande. N'activez jamais le profileur dans les environnements de production car cela entraînerait des vulnérabilités de sécurité majeures dans votre projet.

## Profiler

Installation : 

```
composer require --dev symfony/profiler-pack
```
## httpFoundation

Définit une couche orientée objet pour la spécification HTTP.

Installation : 

```
composer require symfony/http-foundation
``` 

## SensioFrameworkExtraBundle

Le Symfony par défaut FrameworkBundleimplémente un framework MVC basique mais robuste et flexible. SensioFrameworkExtraBundle l' étend pour ajouter des conventions et des annotations douces. Il permet des contrôleurs plus concis.

Installation :

```
composer require annotations
```

## Form

La création et le traitement de formulaires HTML sont difficiles et répétitifs. Vous devez gérer le rendu des champs de formulaire HTML, la validation des données soumises, le mappage des données du formulaire en objets et bien plus encore. Symfony inclut une fonction de formulaire puissante qui fournit toutes ces fonctionnalités et bien d'autres pour des scénarios vraiment complexes.

Installation :

```
 composer require symfony/form
```

## Services

commande pour visualiser les services existant déjà dans symfony

```
php bin/console debug:autowiring
```