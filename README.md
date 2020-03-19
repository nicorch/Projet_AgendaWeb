# Projet_AgendaWeb
Nicolas Roche
Xan Olazcuaga Garibal
## Fonctionnalités implémentées :

### Interface Easy Admin
Ajout de la gestion des cours et des salles
Validateurs de données: 
- Cours:
    - Lors de la création d'un cours, la date renseignée doit être avant la date du jour
    - La date de fin du cours doit être avant la date de début du cours
    - Tous les champs doivent être renseignés
    - Les cours ne seront affichés que si l'heure contient les minutes : 00 ou 30, la validation etant faite sur le formulaire, le formatage n'est pas visible sur Easy Admin (passer par le formulaire symfony)
- Avis:
    - La note doit être comprise entre 0 et 5
    - Tous les champs doivent être renseignés
    - L'email étudiant doit être sous format Email (exemple@test.com)
    - Si l'étudiant à déjà donné son avis, un message d'erreur s'affiche
- Professeur
    - Les champs nom, prénom et email doivent être renseignés
    - L'email doit être sous format Email (exemple@test.com) et est unique
- Création de TypeCours
    - Création des différents type de cours (TD, TP, Cours)
    - Si le cours existe déjà, un message d'errur s'affiche

### API
Ajout de:
- GET Liste des cours: /api/cours
- GET Liste des salles: /api/salle

Nous avons également repris les requêtes faites avec "Note ton prof"

### Interface VueJS
- Affichage des cours:
    - Placement sur le cadrillage en fonction des heures du cours
    - Nom, type, salle et professeur
- Navigation entre les jours précédents et suivants
- Ajout de "Note ton prof" après le calendrier
- Le bouton "Ajouter un cours" permet de créer un nouveau cours, en renseignant les champs
- Le bouton "Ajouter une matière" permet de créer une nouvelle matière, en renseignant les champs
- En cliquant sur "AppAgenda", on accède à l'index symfony, pour voir et modifier directement les données en base

# Utilisation de l'application
Afin d'utiliser l'application correctement, il faut au préalable:
- **Lancer l'application sur _127.0.0.1_**
- Créer dans Easy Admin les types de cours (TD, TP, Cours)
- Créer un jeu de donnée

## Bugs
Lors du changement de jour, le calendrier ne se refresh pas et écrit à la suite les cours des autres jours
