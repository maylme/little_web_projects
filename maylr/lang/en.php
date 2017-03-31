<?php 
$lang = array();

/********* LE MENU **************/
$lang["menu.news"] = "News";
$lang["menu.comp"] = "Skills";
$lang["menu.project"] = "Projects";
$lang["menu.cv"] = "C.V.";
$lang["menu.other"] = "Stuff";
/*******************************/

/******** SITE EN TRAVAUX *********/
$lang["menu.travaux"] = new stdClass;
$lang["menu.travaux"]->title = "Work in  progress !";
$lang["menu.travaux"]->date = "februay 20th 2016";
$lang["menu.travaux"]->header_img = "img/travaux.png";
$lang["menu.travaux"]->corps = "
 Hi, I don't have many time for myself work on my website ! Please be patient.  
 <br/>
 If you don't want to wait go back there : <a href='http://mayl.me'>mayl.me</a>.
";

/******** LES COMPETENCES *********/

/**********************************/




/********** LES PROJETS ***********/
$lang["projects"] = array();

$tmp = new stdClass;
$tmp->title = "The Social-Wall !";
$tmp->date = "march 8th 2016";
$tmp->header_img = "img/projects/socialwall.png";
$tmp->url = "http://sunny.socialwall.beepeers.com/#/";
$tmp->corps = "<p>
  Here it is! The most important project I made at Beepeers  : <a href='http://sunny.socialwall.beepeers.com/#/'><strong>The Social-Wall</strong></a>! <br/>
  It's a Web application designed to be displayed on large screen during festival for exemple. It display a page that represent the event and also flow like a twitter one or some news told by the host. It display also upcomming events.</p>
  <p> It has been used by le Palais des Festivals de Cannes during the Festival International des Jeux. Laporte like it also very much . It is the leader ball-trap fourniture and sponsor of the Olympics Games of Rio.
  </p>";
array_push($lang["projects"], $tmp);


$tmp = new stdClass;
$tmp->title = "The USA's segregation during the 70's";
$tmp->date = "february 2nd 2016";
$tmp->header_img = "img/projects/tpe.png";
$tmp->url = "http://tpe2016.mayl.me/";
$tmp->corps = "<p>
  This is just a WebSite I made for my little brother. He need a nice and classical display for his TPE so I made this design with Bootstrap in a blink of an eye.<br/>
  So easy ;-)
  </p>";
array_push($lang["projects"], $tmp);

$tmp = new stdClass;
$tmp->title = 'Food truc "La poêle Sétoise"';
$tmp->date = "june 15th 2015";
$tmp->header_img = "img/projects/setoise.png";
$tmp->url = "http://users.polytech.unice.fr/~mesnier/traiteur%20site/#Cuisine";
$tmp->corps = "<p>
  An other Website I made, a classical one-page. 
  </p>";
array_push($lang["projects"], $tmp);
/**********************************/


/********* CV *********************/
$lang["cv"] = new stdClass;
$lang["cv"]->title = "My C.V !";
$lang["cv"]->date = "march 8th 2016";
$lang["cv"]->txt = "
 Click here for download ! 
";
/***********************************/


/********* LES DIVERS **********/

/*******************************/






/********** LES INFOS ***********/
$lang["info"] = array();

$tmp = new stdClass;
$tmp->title = "Hey! I'm looking for a Job!";
$tmp->date = "march 8th 2016";
$tmp->header_img = "img/embauchezmoien.png";
$tmp->corps = "
<p>I'm looking for a job. I'm looking for a <strong>\"CDD\"</strong> and a <strong>apprenticeship contract</strong> (in IT of curse). Take a seat, I'm gonna explain the dates ;-b.
                </p>
                <p>
                  First, I'm looking for a CDD that could start now and run until  July-September (depends on my apprenticeship's start date). <br/>
                  I'm also looking for an ingeneering apprenticeship contract in HMI (Human Machine Interface) that will start in September (may start before).
                </p>
                <p>
                  That's it for the dates. So, if you are looking for someone doing some front Web (or any thing else), I'm here ! And for the dates, let's say it's on a first-come, first-served basis :-b.
                </p>
                <p>
                  Have a nice day! 
                  <br/>
                  ~ Mayl' ~
                </p>
";
array_push($lang["info"], $tmp);


$tmp = new stdClass;
$tmp->title = "[FR] Actuellement en Stage chez Beepeers";
$tmp->date = "18 février 2016";
$tmp->header_img = "img/beepeers_logo.jpg";
$tmp->corps = "
<p>
  Je suis en stage chez <a href='http://beepeers.com/#/''>Beepeers</a> depuis mi-octobre. ça se passe bien, l'équipe est super cool et le boulot est intéréssant. 
</p>
<p>
  Je m'occupe principalement du front web. J'ai commencé par m'occuper d'un tout nouveau projet fait en <strong>Redux</strong> (React + Flux) qui va leur simplifier la prise en charge des requetes clients concernant les applications qu'ils veulents.
</p>
<p>
  Hélas je n'ai pas pu le finir car on m'a fait développer un projet tout aussi intéréssant (et plus amusant à faire ;-) )  : Un <strong>Social Wall</strong>.
  <br/>
  Un exemple est visible à l'adresse suivante : <a href='http://sunny.socialwall.beepeers.com/'' >Social Wall de Sunny Festival</a>
  Je l'ai réalisé en <strong>AngularJs</strong>. Il est actuellement utilisé par les clients dans des conventions pour informer les gens des dernieres news, des evenement à venir etc. 
</p>
<p>
  Puis un membre de l'équipe a du nous quiter et je suis maintenant sur plusieurs projets Web qu'il maintenait. Certains en <strong>AngularJs</strong> d'autre en <strong>PHP (Code Igniter)</strong>.
</p>
";
array_push($lang["info"], $tmp);


/**********************************/

return $lang;
?>