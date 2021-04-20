## Projet Recettes

### Installation
#### En local
Pour créer le projet et le lancer en local :  
- ``` composer create-project laravel/laravel recettes ```
- ``` php artisan serve --port=5050 ```
##### Exercice 2.1
- Création de HomeController et changer l'index dans **routes/web.php**
    ``` php artisan make:controller HomeController ```
    ``` 
    // dans route/web.php
    use App\Http\Controllers\HomeController;
    Route::get('/', [HomeController::class, 'index']);
    ```
    dans le fichier **HomeController.php** création de la méthode index avec le view **welcome** comme retour
##### Exercice 2.2
#### Github
Avant de commencer on a crée un compte sur [github](https://github.com), après la création du compte j'ai crée un repository avec le même nom de projet *recettes* pour ajouter le projet depuis le depôt local
- Inisialiser le dpôt git dans le dossier du projet :  
   ``` git init ```
- Création de branch main   
   ``` git checkout -b main ```
- Ajouter tous les fichiers et dossiers    
    ``` git add . ```
- Faire le premier commit  
    ``` git commit -m " Premier commit : création de projet en local et envoi du projet sur github " ```
- Ajouter le depôt de github comme origin  
    ``` git remote add origin https://github.com/raed-abbas/recettes.git ```
- Vérifier le depôt   
    ```git remote -v ```
- Envoyer le projet vers github   
    ``` git push origin main ```

- créeer le fichier database.db dans le dossier database du projet
```
DB_CONNECTION=sqlite
DB_DATABASE=/Users/hazem/Documents/websites/laravel/raed/database/database.db
```

### créer les tables (recipes, contact, comments)
D'abors on crée les trois fichiers 
1. create_recipes_table
2. create_contact_table 
3. create_comments_table 
avec les commandes suivantes :
```
php artisan make:migration create_recipes_table
php artisan make:migration create_contact_table
php artisan make:migration create_comments_table
```
Une fois les fichiers crées, il faut lancer la commande :
```
php artisan migrate # les trois tables sont crées dans la base de donnéesuse 
```
#### pour ajouter un utilisateur dans la base de données avec seed
Il faut modifier le fichier DatabaseSeeder.php et ajouter :
```
use Illuminate\Support\Facades\DB;
public function run()
    {
        DB::table('users')->insert([
            'name' => 'raed',
            'email' => 'raed@gmail.com',
            'password' => 'raedLaravel',
        ]);
    }
    # et lancer la commande :
    php artisan migrate:fresh --seed
```
## 4.1 créer les models
```
php artisan make:model Contact
php artisan make:model Comment
php artisan make:model Recipe
```
### Créer une Factory pour recipe 
```
php artisan make:factory RecipeFactory --model=Recipe 
```

