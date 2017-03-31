<?php 
$lang = array();

/********* LE MENU **************/
$lang["menu.news"] = "Infos";
$lang["menu.comp"] = "Compétences";
$lang["menu.project"] = "Projets";
$lang["menu.cv"] = "C.V.";
$lang["menu.other"] = "Divers";
/*******************************/


/******** SITE EN TRAVAUX *********/
$lang["menu.travaux"] = new stdClass;
$lang["menu.travaux"]->title = "Site en travaux !";
$lang["menu.travaux"]->date = "20 février 2016";
$lang["menu.travaux"]->header_img = "img/travaux.png";
$lang["menu.travaux"]->corps = "
 Hey oh, j'ai pas beaucoup de temps en ce moment... donc ben je fais quand je peux. Un peu
 de patience ! 
 <br/>
 Si vous voulez pas attendre retournez là : <a href='http://mayl.me'>mayl.me</a>.
";

/******** LES COMPETENCES *********/

/**********************************/

/********* CV *********************/
$lang["cv"] = new stdClass;
$lang["cv"]->title = "Mon C.V !";
$lang["cv"]->date = "8 mars 2016";
$lang["cv"]->txt = "
 Clique pour le télécharger ! 
";
/***********************************/


/********** LES PROJETS ***********/
$lang["projects"] = array();

$tmp = new stdClass;
$tmp->title = "Le Social-Wall !";
$tmp->date = "8 mars 2016";
$tmp->header_img = "img/projects/socialwall.png";
$tmp->url = "http://sunny.socialwall.beepeers.com/#/";
$tmp->corps = "<p>
  Voici mon projet le plus important réalisé chez Beepeers : <a href='http://sunny.socialwall.beepeers.com/#/'><strong>Le Social-Wall</strong></a>! <br/>
  C'est une application Web qui est destinée à être affiché sur un grand écran lors de conventions par exemple. Il affiche la page de l'événement en question ainsi que le flux de l'événement qui peut être composé d'un flux twitter et/ou des news émises par l'organisateur. Il affiche également les événements à venir.</p>
  <p> Une version a été utilisée entre autres par le Palais des Festivals de Cannes à l'occasion du Festival International des Jeux. Il est également apprécié de Laporte, leader en fournisseur de matériel pour ball-trap et également fournisseur des J.O. de Rio.
  </p>";
array_push($lang["projects"], $tmp);

$tmp = new stdClass;
$tmp->title = "La ségrégation aux États-Unis dans les années 60-70";
$tmp->date = "2 février 2016";
$tmp->header_img = "img/projects/tpe.png";
$tmp->url = "http://tpe2016.mayl.me/";
$tmp->corps = "<p>
  Ceci est juste un site Web que j'ai fait à mon petit frère pour son TPE. Il avait besoin d'un design sobre et efficace alors je lui ai fait ce site en un claquement de doigt ! Merci bootstrap! <br/>
  So easy ;-)
  </p>";
array_push($lang["projects"], $tmp);


$tmp = new stdClass;
$tmp->title = 'La poêle Sétoise';
$tmp->date = "15 Juin 2015";
$tmp->header_img = "img/projects/setoise.png";
$tmp->url = "http://users.polytech.unice.fr/~mesnier/traiteur%20site/#Cuisine";
$tmp->corps = "<p>
 Un autre site Web que j'ai fait sur mon temps libre, un classique one-page. 
  </p>";
array_push($lang["projects"], $tmp);
/**********************************/




/********* LES DIVERS **********/

/*******************************/





/********** LES INFOS ***********/
$lang["info"] = array();

$tmp = new stdClass;
$tmp->title = "Hey! Je cherche du boulot!";
$tmp->date = "8 mars 2016";
$tmp->header_img = "img/embauchezmoi.png";
$tmp->corps = "
<p>Je cherche actuellement un <strong>CDD</strong> et un <strong>contrat d'apprentissage</strong> (en informatique bien sûr). Je vous explique: 
                </p>
                <p>
                  En gros, je cherche un CDD qui commencerai le plus tôt possible et qui pourrai aller jusqu'en Septembre.
 
                  <br/>
                  Je cherche également un contrat d'apprentissage pour ma dernière année à Polytech. Le contrat d'apprentissage pourra commencer en Septembre (voir peut être même plus tôt en fonction du CDD que j'aurai trouvé)
                </p>
                <p>
                  Voilà, l'explication de date, c'est fait. Donc si vous cherchez quelqu'un pour du front-end Web (ou autre chose pourquoi pas), je suis là ! Et pour fixer les dates, eh bien on se débrouillera. J'ai envie de dire, premier arrivé premier servi : -b.
                </p>
                <p>
                  à bientôt! 
                  <br/>
                  ~ Mayl' ~
                </p>
";
array_push($lang["info"], $tmp);


$tmp = new stdClass;
$tmp->title = "Actuellement en Stage chez Beepeers";
$tmp->date = "18 février 2016";
$tmp->header_img = "img/beepeers_logo.jpg";
$tmp->corps = "
<p>
  Je suis en stage chez <a href='http://beepeers.com/#/''>Beepeers</a> depuis mi-octobre. ça se passe bien, l'équipe est super sympa et le boulot est intéressant .
</p>
<p>
  Je m'occupe principalement du front web. J'ai commencé par m'occuper d'un tout nouveau projet fait en <strong>Redux</strong> (React + Flux) qui va leur simplifier la prise en charge des requêtes clients.
</p>
<p>
  Hélas je n'ai pas pu le finir car on m'a fait développer un projet tout aussi intéressant  (et plus amusant à faire ;-) )  : Un <strong>Social Wall</strong>.
  <br/>
  Un exemple est visible à l'adresse suivante : <a href='http://sunny.socialwall.beepeers.com/'' >Social Wall de Sunny Festival</a>
  Je l'ai réalisé en <strong>AngularJs</strong>. Il est actuellement utilisé par les clients dans des conventions pour informer les gens des dernieres news, des événements à venir etc. 
</p>
<p>
  Puis un membre de l'équipe a dû nous quiter et je suis maintenant sur plusieurs projets Web qu'il maintenait. Certains en <strong>AngularJs</strong> d'autre en <strong>PHP (Code Igniter)</strong>.
</p>
";
array_push($lang["info"], $tmp);


/**********************************/

return $lang;
?>