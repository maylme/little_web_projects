<?php 
$lang = array();

/********* LE MENU **************/
$lang["menu.news"] = "Infos";
$lang["menu.BAba"] = "Les Bases";

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

/******** LES BAba *********/
$lang["BAba"] = array();

$tmp = new stdClass;
$tmp->ancre="preambule";
$tmp->title = "Préambule";
$tmp->date = "22 février 2016";
$tmp->corps = "
<p>
  Bon dans cette partie on va aborder principalement du vocabulaire et des actions de bases. 
  Voici le plan que l'on suivra si vous voulez mieux vous y retrouver:
    <ul>
    <li><a href='#intro'>Introduction</a></li>
    <li><a href='#vocab'>Vocabulaire de Facebook </a>
    <ul>
      <li><a href='#ami'>Un Ami</a></li>
      <li><a href='#mur'>Un mur</a></li>
      <li><a href='#publi'>Une Publication</a></li>
      <ul>
        <li><a href='#lirePubli'>Lire une publication</a></li>
        <li><a href='#likePubli'>Aimer une publication</a></li>
        <li><a href='#comPubli'>Commenter une publication</a></li>
        <li><a href='#ecrirePubli'>Ecrire une publication</a></li>
      </ul>
      </li>
    </ul>
    </li>
    <li><a href='#elemfb'>Les élements de Facebook</a></li>
    </li>       
    </ul>
  </p>
  <p> Allez c'est parti! </p>
";
array_push($lang["BAba"], $tmp);



$tmp = new stdClass;
$tmp->ancre="intro";
$tmp->title = "Introduction et vocabulaire";
$tmp->date = "21 février 2016";
$tmp->corps = "
<p>
  Bon j'ai pas grand chose à dire dans l'introduction. Je pense qu'elle sera modifiée plus tard...
  Sinon voilà le topo: 
  Facebook c'est quoi? 
  En bref,  c'est un site internet où les gens peuvent partager des messages, photos et autres contenus du web avec leurs amis. Il permet de rester en contact avec ses proches mais il permet plein d'autre trucs pratiques qu'on verra pas dans cette partie (du genre, créer des evenements, des pages professionnelles etc.).
</p>";
array_push($lang["BAba"], $tmp);


$tmp = new stdClass;
$tmp->ancre="vocab";
$tmp->title = "Vocabulaire de Facebook";
$tmp->date = "21 février 2016";
$tmp->corps = "
<p> Parlons un peu au vocabulaire de facebook. </p>
<h2 id ='ami'> Un Ami </h2>
<p>
  Les contacts et relations que vous allez avoir sur facebook sont appelé des 'amis'. C'est pourquoi dans la suite pour ajouter un contact on dira 'ajouter un ami' par exemple. <br/>
  Les gens que vous avez comme amis sont capable de voir tout ce que vous publiez sur votre mur (expliquer plus bas). Vous etes également en mesure d'avoir acces à toutes les publications de vos amis.
  Voici ce que vous pouvez faire pour ajouter un ami:
</p>
<h3> Etape 1: se rendre sur le mur de son futur ami </h3>
<p> Commencez par rechercher la personne que vous voulez ajouter. Pour cela, taper le nom de la personne dans la barre de recherche en haut de la page et appuyez sur la touche 'entrée' ou selectionner la personne dans le menu deroulant qui apparait. </p>
<img src='img/bases/recherche.png' />
<h3> Etape 2: Apuyer sur 'ajouter en ami' </h3>
<p> Vous arrivez alors sur le mur de la personne. Il ne vous reste plus qu'à appuyer sur un des deux boutons 'ajouter' en haut de la page pour envoyer une demande d'ajout à cette personne. Elle devra alors accepter cette demande pour que vous l'ayez dans vos contacts.</p>
<img src='img/bases/ajout.png'/>


<h2 id='mur'> Un Mur </h2>
<p>
  La page personnelle d'une personne est appelée un 'mur'. On y trouve la photo de profil d'une personne, des informations personnelles, ses publications et d'autres choses. (voir image anotée ci-dessous).<br/>
    On peut acceder au mur d'une personne en recherchant une personne avec le champ de recherche du haut ou en cliquant sur le nom d'une personne dans un post ou un commentaire.</br>
    Voici à quoi ressemble mon mur (faites un clic droit > ouvrir dans un nouvel onglet sur l'image si vous voyez pas bien):
</p>
<img src='img/bases/monmur.png' />
<p>

</p>

<h2 id='publi'> Une Publication </h2>
<p>
  On appelle 'publication' une publication de type publique sur Facebook. Les publications se font sur des murs que ca soit le votre ou celui de vos amis. Il peut etre composé d'un simple message mais il est également possible d'y inclure des photos, vidéo ou lien web. Il est possible d'aimer un Post et de le commenter. <br/>
  <h3 id='lirePubli'> Oú peut-on lire des publications? </h3>
  <p> On trouve les publications partout. Sur les murs des personnes , les murs des evenements , des groupes, des pages pro et aussi dans le fil d'actualités (c'est à dire la page d'accueil de facebook) qui regroupe toutes les dernieres publications de vos amis ou d'autre identités au quelles vous vous etes abonnées. (nous verrons ces autres identités une autre fois).
    Voici un exemple de publication faite par Macdonald's:
  </p>
  <img src='img/bases/macdoPost.png'>
  <p>
  On y retrouve dans l'ordre: 
  <ul>
    <li>Le nom et la date de l'auteur de la publication en haut avec son image de profil</li>
    <li>Le texte de la publication</li>
    <li>Une photo jointe à la publication</li>
    <li>Une barre de menu qui indique \"j'aime\", \"Commenter\" et \"Partager\"</li>
    <li>Le nombre de réaction autour de cette publication (ici 114 personne ont aimé la publication</li>
    <li>La zone des commentaires</li>
  </ul>
  Nous allons à présent expliquer certain de ces points.
  </p>

  <h3 id='likePubli' > Aimer une publication </h3>
  <p>
    Vous pouvez reagir aux publications.<br/>
    Par exemple, l'un de vos amis viens de poster une vidéo youtube avec des chats que vous trouvez très rigolote. Vous souhaitez faire comprendre à la personne que vous avez aimer cette video. Pour cela, vous cliquer sur le pouce \"j'aime\" pour 'aimer la publication' (on dit aussi 'liker la publication'). En cliquant, votre ami recevra une notification comme quoi vous avez aimé sa publication. 
</p>
<p>
Depuis quelques semaines il est desormais possible de reagir differement à une publication. En mettant votre souris au dessus du pouce bleu, vous pouvez selectionner un smiley triste pour dire que cette publication vous attriste, un coeur pour dire que vous adorez etc.
</p>

<h3 id='comPubli'> Commenter une publication </h3>
<p>
  Vous pouvez aussi réagir à cette publication avec un comentaire en cliquant sur commenter. Dans le meme exemple, supposons que vous connaissez une vidéo du meme theme que vous voulez partager, vous pouvez mettre le lien en commentaire. En publiant un commentaire, votre ami recevra une notification comme quoi vous avez laisser un commentaire à sa publication. De plus vous recevrez une notification chaque fois que quelqu'un viendra mettre un commentaire sur cette publication. <br/>
  <strong>SURTOUT N'ALLEZ PAS PUBLIER UNE PUBLICATION EN REPONSE A CA SUR VOTRE MUR CA NE SE FAIT PAS! NON VRAIMENT ! </strong> 
</p>
<p> Reprenons l'exemple de la publication de Macdonald. Je peux ecrire un commentaire en positionnant mon curseur dans la zone du bas avec ma photo de profil. Ecrivons : moi aussi j'aime les frites.
</p>
<img src='img/bases/com1.png'/>
<p>
Vous publiez votre commentaire en appuyant sur la touche entrée.<br/>
ASTUCE : Si vous voulez faire des retour à la ligne dans un comentaire, appuyez sur shift+entrée
</p>
<p> <strong>Truc qui enerve si vous ne le faites pas:</strong> Si vous vous trompez dans ce que vous commentez, cliquez sur 'modifier' dans le menu situé en haut à droite de votre commentaire (apparait au survol de la souris). Evitez de republier un commentaire à la suite! . <br/>
  Vous pouvez aussi decider de le supprimer.
</p>
<img src='img/bases/com2'>
<img src='img/bases/com3'>
<p>
Vous pouvez alor editer le texte de votre commentaire et le valider en appuyant sur entrée.
</p>
<img src='img/bases/com4'>
";
array_push($lang["BAba"], $tmp);


$tmp = new stdClass;
$tmp->ancre="lire";
$tmp->title = "Lire des messages";
$tmp->date = "22 février 2016";
$tmp->corps = "
<p>
  Bon une des fonctionnalité principale c'est de lire des messages ou des Posts. Je vais expliqer la différence...
</p>
";
array_push($lang["BAba"], $tmp);




/**********************************/



/********** LES INFOS ***********/
$lang["info"] = array();

$tmp = new stdClass;
$tmp->title = "Salut les anciens !";
$tmp->date = "19 février 2016";
$tmp->header_img = "http://i0.wp.com/medias.mensquare.com/wp-content/uploads/sites/3/2013/02/facebook-boycotte-vieux1.jpg?resize=852,430";
$tmp->corps = "
<p>Alors comme ça on veut utiliser Facebook comme les jeunes. Oui j'avoue c'est pratique pour garder contact avec la famille et epier ce qu'ils font (mouahahaha *rire diabolique*).
</p>
<p>
  Mais bon l'informatique tout ça, c'est pas super simple. Donc je vais essayer de vous guider pour utiliser correctement cet outils sans passer pour un 'bolos' (comme disent les jeunes).
</p>
<p>
  Vous allez enfin pouvoir brillez en société et vous la raconté à votre prochain tournoois de scrabble ou à votre prochain repas de famille.
</p>
<p>
  Allez c'est parti ! commençons par les <a href='BAba.php'>bases</a>
</p>
";
array_push($lang["info"], $tmp);



/**********************************/

return $lang;
?>