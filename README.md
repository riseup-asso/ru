# Rise Up

## Environnement de dev

#### Prérequis
- docker

#### Installation
Lancer les serveurs avec `docker compose up`. Ensuite:

* Si vous avez un dump: le charger:
  ```bash
  docker compose cp ./dump.sql db:/
  docker compose exec -u postgres db bash
  pg_restore -U drupal -d drupal < /dump.sql
  ```
* Sinon:
  * ouvrir `localhost:8000`
  * Remplir des paramètres d'initialisation (login et mot de passe admin, pas de mise à jour, etc.)
  * Activer le thème `tara` en premier (ça permettra de copier son "block layout", c'est-à-dire un contenu par défaut, [c'est un défaut connu de Drupal](https://www.drupal.org/docs/develop/theming-drupal/creating-sub-themes#s-inheriting-block-placement))
  * Activer le thème `ta_rayse_up` ensuite.

![](./doc/base_de_donnees_vide_rise_up_web.gif)

### Où est le code?

Dans `web/themes/contrib/ta-rayse_up`. Tout le reste ne sont que des libs ou des fichiers de config.

## Prod

Pour l'endpoint oembed.riseup-asso.fr, il faut utiliser un reverse proxy pour supprimer l'en-tête HTTP `x-frame-options: SAMEORIGIN` et le remplacer par `Content-Security-Policy: frame-ancestors riseup-asso.fr` (ce qui permet à riseup-asso.fr de charger oembed.riseup-asso.fr). Ça ne pose pas de problème d'appliquer cette politique également à l'endpoint riseup-asso.fr (mais ça ne sert à rien).

## Base de données
Lucie 20/02 : https://we.tl/t-heG9w1hHYX
