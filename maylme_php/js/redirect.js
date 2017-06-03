
console.log("test... :-(");
var mq = window.matchMedia( "(max-width: 900px)" );
console.log("test... :-(", mq.matches);
var w = window.innerWidth;
var h = window.innerHeight;
console.log(w,"x",h);

if (mq.matches) {
  //La largeur max de l'affichage est 720 px inclus
  document.getElementById('modal').style.display= "block";
}

function closeModal(){
	document.getElementById('modal').style.display= "none";
}