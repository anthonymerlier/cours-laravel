# Projet de cours Laravel - TP Dev Web 2021

Pour récupérer ce projet :

1. Cliquer sur le bouton Fork en haut a droite de l'écran, cela vous permettra de récupérer ce projet dans votre propre github

2. Cloner ensuite votre projet forké dans votre ordinateur avec la commande :
```
git clone https://github.com/{votreuser}/cours-laravel.git
```
3. Une fois dans votre projet sur VS Code, ouvrir un terminal puis :
```
npm install
```

4. Installer les dépendances Composer / Vendor en lançant le script :
```
composer update
```

5. Copier le fichier .env.example puis le renommer en .env, y change le nom de votre database, ainsi que vos credentials

    *NB : Il faudra au préalable créer la database dans PhpMyAdmin*

6. Lancer les migrations en tapant :
```
php artisan migrate --seed
```

7. Lancer dans un autre Terminal :
```
npm run watch
```

8. Terminer dans un autre Terminal (encore !) en lançant votre serveur de dev  :
```
php artisan serve
```