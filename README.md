# BenLaBenne

# Présentation de la plateforme

[![status: up](https://img.shields.io/badge/Status-up-brightgreen.svg)]()
[![build: unstable](https://img.shields.io/badge/build-unstable-red.svg)]()
[![platform: Symfony 4.2](https://img.shields.io/badge/platform-php7.2-lightgrey.svg)]()

Application web affichant une carte qui comporte toutes les informations concernant les bennes à recyclage du verre à proximité de la localisation de chaque utilisateur.

#

## Table des contenus

* [Installation de la base de données](#installation)
* [Utilisation de l'application](#utilisation)
* [Contribution](#contribution)
* [Createurs](#createurs)

## Installation

*Construire la base de données*

``` bash
# se placer dans le dossier du projet
$ cd BenLaBenne/
```
_puis,_

``` bash
# Création de la base depuis le dossier /var
# Créer un fichier "data.db"

# Ouvrir module Database sur phpstorm
# Cliquez sur +
# Data Source > Sqlite
# Emplacement file > Sélectionnez le fichier data.db
# Apply
```
ensuite,

``` bash
# Génération de la BDD
$ php bin/console doctrine:database:create

# Génération du schéma de la BDD
$ php bin/console doctrine:schema:create

# Génération d'une migration de la BDD
$ php bin/console doctrine:migrations:generate

# Valider la BDD
$ php bin/console doctrine:schema:validate

# Migration de la BDD
$ php bin/console doctrine:migrations:migrate
```

#

## Utilisation

``` bash
# Démarrer maintenant votre serveur

php bin/console server:run
```

**Profitez maintenant de la plateforme !**

#

## Createurs

**Hego Nathan**

* <https://github.com/SatarAs>

**Revert Romain**

* <https://gitlab.com/Romain76>

**Gibert Damien**

* <https://github.com/Symbolic76>

**Payen David**

* <https://github.com/David761>

**Balue Jérôme**

* <https://github.com/ballue>
#
