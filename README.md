Adresse localhost pour voir les thèmes : http://127.0.0.1:8000/themes
J'ai avancé jusqu'à l²'affichage des thèmes, les fixtures.
Pour lancer le serveur, les commandes utilisant symfony ne fonctionnaient pas, j'ai donc utilisé la commande : php -S 127.0.0.1:8000 -t public

Capture vidéo de la démonstration du localhost : https://drive.google.com/file/d/14GcZcQap3yX3eNTl040mrgtVxIRyB8jv/view?usp=sharing

Sécurity bundle : Pour que ça fonctionne j'ai d'abord tapé http://127.0.0.1:8000/register
Le message "L'utilisateur a bien été créé " a été affiché

J'ai ensuite tapé : http://127.0.0.1:8000/register

J'ai saisi les crendentials : 

test@example.com
password123

Et ça fonctionne !