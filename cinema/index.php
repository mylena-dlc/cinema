<?php    
    require "Personne.php";
    require "Acteur.php";
    require "Realisateur.php";
    require "Role.php";
    require "Genre.php";
    require "Film.php";
    require "Casting.php";


$genre1 = new Genre("Action");
$genre2 = new Genre("Aventure");
$genre3 = new Genre ("Thriller");


$acteur1 = new Acteur("Clooney", "George", "Masculin", "06-05-1961");
$acteur2 = new Acteur("Keaton", "Michael", "Masculin", "05-09-1951");
$acteur3 = new Acteur("Graig", "Daniel", "Masculin", "02-03-1968");
$acteur4 = new Acteur("Holland", "Tom", "Masculin", "01-06-1996");
$acteur5 = New Acteur("Coleman", "Zendaya", "Feminin", "01-09-1996");
$acteur6 = new Acteur("Downey", "Robert", "Masculin", "04-04-1965");
$acteur7 = new Acteur("Maguire", "Tobey", "Masculin", "17-06-1975");
$acteur8 = new Acteur("Dunst", "Kristen", "Féminin", "30-04-1982");

$realisateur1 = new Realisateur("Schumacher", "Joel", "Masculin", "29-08-1939");
$realisateur2 = new Realisateur("Wolfgang", "Petersen", "Masculin", "14-03-1941");
$realisateur3 = new Realisateur("Cary", "Fukunaga", "Masculin", "10-07-1977");
$realisateur4 = new Realisateur("Watts", "Jon", "Masculin", "28-06-1981");
$realisateur5 = new Realisateur("Raimi", "Sam", "Masculin", "23-10-1959");


$film1 = new Film("Batman", 1997, 2.05, "Dans cette nouvelle aventure, Batman aura bien besoin de son audacieux partenaire Robin, juché sur sa fringante moto turbo. En effet, le glacial M. Freeze fait régner une vague de froid polaire sur Gotham City avec la complicité de la belle et vénéneuse Poison Ivy, au baiser mortel et aux formes sinueuses, qui rêve de soumettre le monde au pouvoir des femmes-fleurs.
", $realisateur1, [$genre1, $genre2]);
$film2 = new Film("Troie", 2004, 2.35, "Dans la Grèce antique, l'enlèvement d'Hélène, reine de Sparte, par Paris, prince de Troie, est une insulte que le roi Ménélas ne peut supporter. L'honneur familial étant en jeu, Agamemnon, frère de Ménélas et puissant roi de Mycènes, réunit toutes les armées grecques afin de faire sortir Hélène de Troie.", $realisateur2,[$genre1, $genre2]);
$film3 = new Film("Mourir peut attendre", 2021, 2.43, "Dans MOURIR PEUT ATTENDRE, Bond a quitté les services secrets et coule des jours heureux en Jamaïque. Mais sa tranquillité est de courte durée car son vieil ami Felix Leiter de la CIA débarque pour solliciter son aide : il s'agit de sauver un scientifique qui vient d'être kidnappé. Mais la mission se révèle bien plus dangereuse que prévu et Bond se retrouve aux trousses d'un mystérieux ennemi détenant de redoutables armes technologiques…
", $realisateur3,[$genre1, $genre3]) ;
$film4 = new Film("Ça", 2017, 2.12, "À Derry, dans le Maine, sept gamins ayant du mal à s'intégrer se sont regroupés au sein du Club des Ratés. Rejetés par leurs camarades, ils sont les cibles favorites des gros durs de l'école. Ils ont aussi en commun d'avoir éprouvé leur plus grande terreur face à un terrible prédateur métamorphe qu'ils appellent Ça…", $realisateur3, [$genre1]);
$film5 = new Film("Spider-Man: No way home", 2021, 2.54, "Avec l'identité de Spiderman désormais révélée, celui-ci est démasqué et n'est plus en mesure de séparer sa vie normale en tant que Peter Parker des enjeux élevés d'être un superhéros. Lorsque Peter demande de l'aide au docteur Strange, les enjeux deviennent encore plus dangereux, l'obligeant à découvrir ce que signifie vraiment être Spiderman.", $realisateur4, [$genre1, $genre2]);
$film6 = new Film("Spider-Man: Homecoming", 2017, 2.13, "Après ses spectaculaires débuts avec les Avengers, le jeune Peter Parker découvre peu à peu sa nouvelle identité, celle de Spider-Man, le superhéros lanceur de toile. Galvanisé par ses expériences précédentes, Peter rentre chez lui auprès de sa tante May, sous l'oeil attentif de son nouveau mentor, Tony Stark. L'apparition d'un nouvel ennemi, le Vautour, va mettre en danger tout ce qui compte pour lui.", $realisateur4, [$genre1, $genre2]);
$film7 = new Film("Spider-Man 2", 2004, 2.7, "Ecartelé entre son identité secrète de Spider-Man et sa vie d'étudiant, Peter Parker n'a pas réussi à garder celle qu'il aime, Mary Jane, qui est aujourd'hui comédienne et fréquente quelqu'un d'autre. Guidé par son seul sens du devoir, Peter vit désormais chacun de ses pouvoirs à la fois comme un don et comme une malédiction.", $realisateur5, [$genre1, $genre2]);

$role1 = new Role("Spider-man");
$role2 = new Role("Batman");
$role3 = new Role("Iron man");


$casting1 = new Casting($role2, $acteur1, $film1);
$casting2 = new Casting($role1, $acteur4, $film6);
$casting4 = new Casting($role1, $acteur7, $film7);
$casting5 = new Casting($role3, $acteur6, $film5);
$casting6 = new Casting($role1, $acteur4, $film5);
$casting7 = new Casting($role3, $acteur6, $film6);


echo "<h2>Lister la liste des acteurs ayant incarné un rôle précis :</h2><br/>";

$role1->afficherRole();
echo "<br/>";
$role2->afficherRole();
echo "<br/>";
$role3->afficherRole();


echo "<h2>Lister le casting d'un film : </h2><br/>";

$casting1->afficherCasting();
echo "<br/>";
$casting2->afficherCasting();
echo "<br/>";
$casting4->afficherCasting();

echo "<h2>Lister les films par genre : </h2><br/>";

$genre1->afficherGenre();
echo "<br/>";
$genre2->afficherGenre();
echo "<br/>";
$genre3->afficherGenre();
echo "<br/>";


echo "<h2>Lister la filmographie d'un acteur (dans quels films a-t-il joué?)</h2><br/>";

$acteur1->afficherFilmographie();
echo "<br/>";
$acteur4->afficherFilmographie();
echo "<br/>";
$acteur6->afficherFilmographie();
echo "<br/>";
$acteur7->afficherFilmographie();
echo "<br/>";


echo "<h2>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur?)</h2><br/>";

$realisateur1->afficherFilmographie();
echo "<br/>";
$realisateur2->afficherFilmographie();
echo "<br/>";
$realisateur3->afficherFilmographie();
echo "<br/>";
$realisateur4->afficherFilmographie();
echo "<br/>";
$realisateur5->afficherFilmographie();
echo "<br/>";






