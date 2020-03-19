# Projet_AgendaWeb

## Fonctionnalités implémentées :

### Interface Easy Admin
Ajout de la gestion des cours et des salles
Validateurs de données: 
- Cours:
    - Lors de la création d'un cours, la date renseignée doit être avant la date du jour
    - La date de fin du cours doit être avant la date de début du cours
    - Tous les champs doivent être renseignés
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
- GET Liste des salles: /api/salles

### Interface VueJS
- Affichage des cours:
    - Placement sur le cadrillage en fonction des heures du cours
    - Nom, type, salle et professeur
- Navigation entre les jours précédents et suivants

# Utilisation de l'agenda
Afin de pouvoir utiliser l'agenda, il faut préalablement:
- **Lancer l'application en utilisant _127.0.0.1_** 
- Créer les types de cours à partir d'Easy Admin (TP, TD, Cours)
- Créer un jeu de données 