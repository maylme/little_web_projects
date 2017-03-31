<?php
// Classe Article
class Article
{
	private $_id;
	private $_title;
	private $_dateC;
	private $_content; //dom document 

	public function __construct($title, $date)
	{
		$this->_title= $title;
		$this->_dateC= $date;

		//generate unique id:
		$this->_id = uniqid();
		$this->_content = new DomDocument();
		$this->_content->loadXML("<article id='".$this->_id."' title='".$this->_title."' date='".$this->_dateC."'></article>");
	}


	/*
	fonction qui ajoute un diapo à la suite du contenu.
	*/ 
	public function add_diapo($list_src) // à tester //
	{
		//create node diapo
		$racine = $this->_content->documentElement;
		$diapo= $this->_content->createElement("diapo");//create node p
		
		//for each src > create node image, src 
		for($list_src as $img){
			//do stuff;
			$image= $this->_content->createElement("image");//create node p
			$image->setAttribute("src", $img);
			$diapo->appendChild($image);
			//attach to diapo img
		}
		$racine->appendChild($diapo);
		//attach to content diapo
	}

	/*
	fonction qui ajoute un paragraphe à la suite du contenu.
	*/ 
	public function add_p($contentTxt)
	{
		$racine = $this->_content->documentElement;
		$p= $this->_content->createElement("p");//create node p
		$p_content= $this->_content->createTextNode($contentTxt);
		$p->appendChild($p_content);
		$racine->appendChild($p); //attach to content
		
		//echo $this->_content->saveXML();
	}

	/*
	fonction qui ajoute une image à la suite du contenu.
	*/ 
	public function add_image($src, $caption)
	{
		$racine = $this->_content->documentElement;
		$image= $this->_content->createElement("image");//create node p
		$image->setAttribute("src", $src);
		$image->setAttribute("caption", $caption);
		$racine->appendChild($image); //attach to content
		
	}

	/*
	fonction qui ajoute un titre à la suite du contenu.
	*/ 
	public function add_title($lvl, $content)
	{
		$racine = $this->_content->documentElement;
		$title= $this->_content->createElement("title");//create node p
		$title->setAttribute("lvl", $lvl);
		$title_content= $this->_content->createTextNode($content);
		$title->appendChild($title_content);
		$racine->appendChild($title); //attach to content
		
	}

	/*
	fonction qui enleve un element du contenu. Supprime l'element à la 
	position num_of_child
	*/ 
	public function remove_child($num_of_child){}


	public function toHTML(){
		$resultHTML = "<article><h1>".$this->_title."</h1><time>".$this->_dateC."</time>";
		$racine = $this->_content->documentElement;

		foreach($racine->childNodes as $dom_child)
		{
			if ($dom_child->nodeName=="p"){
				$resultHTML= $resultHTML."<p>".$dom_child->nodeValue."</p>";
			}
			else if ($dom_child->nodeName=="image"){
				$resultHTML=$resultHTML."<img src='".$dom_child->getAttribute("src")."'/>";
			}
			else if ($dom_child->nodeName=="title"){
				$lvl = intval($dom_child->getAttribute("lvl"))+1;
				$resultHTML=$resultHTML."<h".$lvl.">".$dom_child->nodeValue."</h".$lvl.">";
			}

		} //TODO _content stuff

		$resultHTML = $resultHTML."</article>";

		return $resultHTML;
	}


	/*
	Formulaire dynamique, bouton "render"> on click construit tout l'objet 
	article depuis le debut avec les add_*
	et on a un appercu à droite de l'ecran ou au dessus en fonction du responsive. 
	Ensuite (où des le depart) on peut cliquer sur "save" pour reconstruire 
	tout l'article et le save. 
	à la modif, on charge l'article et on preremplit le formulaire et 
	on fait pareil , en ecrasant l'ancien article.
	*/
	public function saveXML($pathXML){
		//todo
		$dom = new DomDocument ();
		$dom->load("../xml/articles.xml"); //load le dom doc dans une variable
		echo $dom->validate(); //need dtd to use elementbyid. to test dtd > xmllint on xml

  		//if article already saved, erase it and save the new version
  		$old_article = $dom->getElementById("_1");
  		if ($old_article==NULL){
  			echo 'ya personne';
  		}else{
  			echo 'ya qq1';
  		}
		//$dom->save('../xml/articles.xml');
	}

}

$article1 = new Article("titre1", "02-12-2001");

//echo $article1->toHTML();

//$article1->saveXML("articles.xml");

$article1->add_p("texte 1");
$article1->add_p("texte 2");
$article1->add_title(1,"titre 1");
$article1->add_title(2,"titre 2");
$article1->add_image("../img/test.png", "titre image de test");
$article1->add_p("texte 3");


echo $article1->toHTML();


?>