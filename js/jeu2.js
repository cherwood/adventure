var player={
	score :0,
	dateJour : Date(),
	argent :0,
	xp:0,
	firstCo:0,
	moisClick:0,
	jourClick:0,
	annulationClick:0,
	jourConsecutifs:0,
	niveau:0,
	habitude : Array(),
	shoesG : 0,
	pantsG : 0,
	hautG : 0,
	hatG : 0,
	shoesX : 0,
	pantsX : 0,
	hautX : 0,
	hatX : 0
};
var prix;
var bonusX; 
var bonusG;
var typeVetement;

function recupValeur(type, cout, xpBonus, goldBonus){
	prix=cout;
	bonusX=xpBonus;
	bonusG=goldBonus;
	typeVetement = type // 1 chaussures, 2 pants, 3 top et 4 hat


	majPrix();
}

function majPrix(){
	var e = document.getElementById("text-marchand");
	e.innerHTML = "This piece is a rare form of art, a very intricate object ! <span>+" + bonusX + "%xp + " + bonusG + "% gold</span></br><span>Price : "+ prix+" </span>";
}

function acheterProduit(){
	if(prix==null){
		alert("Select one product !");
	}else{
		if(player.score>=prix){

			//On peut acheter
			player.score = player.score - prix;
			if(typeVetement==1){
				player.shoesX=bonusX;
				player.shoesG=bonusG;
			}
			if(typeVetement==2){
				player.pantsX=bonusX;
				player.pantsG=bonusG;
			}
			if(typeVetement==3){
				player.hautX=bonusX;
				player.hautG=bonusG;
			}
			if(typeVetement==4){
				player.hatX=bonusX;
				player.hatG=bonusG;
			}
			var e = document.getElementById("buyIt");
			e.innerHTML = "Done";

			

		}



	}
	update_view();
	save_game();

}

function save_game() {
   localStorage['SaveChain'] = btoa(JSON.stringify(player));
}

function load_game() {

    if (!localStorage['SaveChain']) return;
    var save_data = JSON.parse(atob(localStorage['SaveChain']));
    player = save_data;
    update_view();
}

function update_view(){
	var e = document.getElementById("gold");
	e.innerHTML = player.score;

}

load_game();