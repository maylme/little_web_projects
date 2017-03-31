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

/**********************************/




/********* LES DIVERS **********/

/*******************************/






/********** LES INFOS ***********/
$lang["info"] = array();

$tmp = new stdClass;
$tmp->title = "Hey! I'm looking for a Job!";
$tmp->date = "februay 19th 2016";
$tmp->header_img = "img/embauchezmoien.png";
$tmp->corps = "
<p>My intership at Beepers will be over soon, so I'm looking for what I can do next. I'll be looking for a <strong>\"CDD\"</strong> and a <strong>apprenticeship contract</strong> (in IT of curse). Take a seat, I'm gonna explain the dates ;-b.
                </p>
                <p>
                  I'll finish my actual intership at Beepers in May and my futur apprenticeship contract could be sooner start in early July or later start in September.
 
                  <br/>
                  First, I'm looking for a CDD that could start after May 22th and run until  July-September (depends on my apprenticeship's start date). I'm also looking for an ingeneering apprenticeship contract in HMI (Human Machine Interface).
                </p>
                <p>
                  That's it! I told you it would be a bit triky with the dates. So, if you are looking for someone doing some front Web (or any thing else), I'm here ! And for the dates, let's say it's on a first-come, first-served basis :-b.
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
  Je suis en stage chez <a href='http://beepeers.com/#/''>Beepeers</a> depuis mi-octobre. ça se passe bien, l'équipe est super cool et le boulot est intéréssant. J'y serai jusque mi-mai.
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