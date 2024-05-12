# Rise Up

## Environnement de dev

Pour dev, deux possibilités: avoir des serveurs web et mysql locaux, ou utiliser le docker-compose pour tout gérer automatiquement.

### Serveur local

#### Prérequis
- Installer un serveur local/avoir accès à un serveur avec Apache/PHP/MySQL ([Un tuto ici pour Wamp](https://duvien.com/blog/setting-local-development-server-wamp-windows-10))
- Installer php composer, qui sert à ajouter et gérer les modules ([Un tuto la](https://duvien.com/blog/setting-wamp-composer-and-git-windows-10))

#### Installation du site
- Importer la BDD MySQL dans le serveur
- Mettre le dossier **ru** à la racine de www ou vhost ou le dossier que tu peux lire avec ton serveur
- Naviguer avec ton navigateur de navigation dans ://ru/web. Un installateur Drupal tout beau va s'ouvrir
- Suivre toutes les consignes de Drupal bien sagement
	- Essayer de choisir le site en Français. Si ça marche pas (probablement parce que le réseau local n'a pas accès à internet), c'est possible dans un second temps, laisser English
	- Profil : Standard
	- Parametres BDD : la base s'appelle drupal, pour les identifiants vous pouvez laisser root et mot de passe vide mais idéalement créez un utilisateur qui a accès a la base avec un mot de passe
	- "Drupal est déjà installé" C'est chouette, vous pouvez visiter le site et y contribuer à partir d'ici

### docker compose

#### Prérequis
- docker

#### Installation
- docker compose up
- Si vous avez un dump: le charger. Sinon: go administration, themes et activez le theme Tara et mettez le en tant que theme par défaut. Il est directement monté sur le repo git.

![](./doc/base_de_donnees_vide_rise_up_web.gif)

## Base de données
Lucie 20/02 : https://we.tl/t-heG9w1hHYX
