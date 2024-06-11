@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||
@REM! PASSAGGI PRELIMINARI : installazione del progetto
@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||


@REM* 1) apri il terminale e installa composer: 
        -> {{```composer install```}}


@REM* 2) apri il terminale e installa npm: 
        -> {{```npm install```}}


@REM* 3) fare una copia del file: 
        -> {{```.env.example```}}
    e rinominare la copia: 
        -> {{```.enx```}}


@REM* 4) accedere al file, aprire il terminale e genrare la key per il database: 
        -> {{```php artisan key:generate```}}


@REM* 5) laciare i due server su due terminali diversi:
        -> terminale 1: {{```php artisan serve```}}            
        -> terminale 2: {{```npm run dev```}}


@REM* 6) accedere al link nel server php del terminale 1.


@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||
@REM! PASSAGGI PER COLLEGARE DATABASE : MODEL & CONTROLLER
@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||


@REM* 1) creare il model corrispondente : 
        -> {{ ```php artisan make:model Nome``` }}
        [[[  il nome del model è come il nome della tabella, ma in singolare  ]]]


@REM* 2) Creare la view:
    @REM* -> in resources/views creo il file 
        ==> {{ ```nome-pagina.blade.php``` }}

    @REM* -> nel file aggiungo 
        ==> @extends('layouts.app')

    @REM* -> nel file aggiungo 
        ==> @section('content') 
            @REM* con contenuto specifico della pagina


@REM* 3) creare il controller corrispindente alla rotta da terminale
    -> {{ php artisan make:controller cartella/NomeController }}
	   
@REM* 4) nel controller aggiungo la funzione index() dove verrà svolta la logica e ritorno la view

    -> ```
    ->        class HomePageController extends Controller {
    ->              public function index() {
    ->                  $movies = Movie::all();            
    ->                  return view("Home", compact("movies"));
    ->              }
    ->         }
    -> ```


@REM* 5) Nel routes/web.php aggiungere la rotta dove collego url al controller

    -> ```
    ->      Route::get('/', 
    ->      [HomePageController::class, "index"]
    ->      )->name("home.index");
    -> ```


@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||
@REM! PASSAGGI PER CREARE DATABASE : CREAZIONE & MODIFICA
@REM? |||||||||||||||||||||||||||||||||||||||||||||||||||||

per creare la tabella laciamo il comando 
    -> {{ php artisan make:migration create_nomeDellaTabella_table }}
        [ nomeDellaTabella è l'effettivo nome della tabella ]


2) adesso nel App\database\migration troviamo il nostro file generato con 2 funzioni:

        up() {
            ti permette di andare avanti        {{ php artisan migrate }}
            creando nuovi dati              
        }
        down() {
            ti permette di tornare indietro     {{ php artisan migrate:rollback }}
            andando allo step precedente
        }

    {[( quando volgiomo andare avanti o indietro nel tempo )]}