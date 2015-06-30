/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template i
 */

function creerInstance(){
  if(window.XMLHttpRequest){
    /* Firefox, Opera, Google Chrome */
    return new XMLHttpRequest();
  }else if(window.ActiveXObject){
    /* Internet Explorer */
    var names = [
      "Msxml2.XMLHTTP.6.0",
      "Msxml2.XMLHTTP.3.0",
      "Msxml2.XMLHTTP",
      "Microsoft.XMLHTTP"
    ];
    for(var i in names){
      /* On test les différentes versions */
      try{ return new ActiveXObject(names[i]); }
      catch(e){}
    }
    alert("Non supporte");
    return null; // non supporté
  }
};


function quantiteplus(choix) {
    var chemin = $('#chemin').val();
    var cheminjs='';

    switch(chemin){
        case 'home': cheminjs = ''
            break;
        case 'produit':cheminjs ='../../../';
            break;
        case 'shop': cheminjs= '../';
    };
    //faire appel ajax pour modifier la session un pour chaque bouton (+ et -)= action + vues
    var nb = $("#" + choix).val() * 1 + 1;
    $("#" + choix).val(nb);
    var nb1 = $("#nbpanier").val() * 1 + 1;
    $("#nbpanier").val(nb1);
    $("#nbpaniervue").html("(" + nb1 + ")");
    var req = creerInstance();
    var donneeproduit;
    /* On récupère les données du formulaire */
    var donneeClient = choix;

    req.onreadystatechange = function () {

        if (req.readyState == 4) {

            if (req.status == 200) {


            } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
            }
        }
    }
    donneeproduit = "donnees=" + donneeClient;


    req.open("POST", cheminjs + "Panier/ajouter", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send(donneeproduit);
    $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
    $.ajaxSetup({cache: false});

}
;
function maj() {

    var nb = $("#nbpanier").val() * 1 - 1;
    $("#nbpaniervue").html("(" + nb + ")");

}

;
function quantitemoins(choix) {
    var chemin = $('#chemin').val();
    var cheminjs='';

    switch(chemin){
      case 'home': cheminjs = '';
            break;
        case 'produit':cheminjs ='../../../';
            break;
        case 'shop': cheminjs= '../';
    };
    var nb = $("#" + choix).val() * 1 - 1;
    $("#" + choix).val(nb);
    var nb1 = $("#nbpanier").val() * 1 - 1;
    $("#nbpanier").val(nb1);
    $("#nbpaniervue").html("(" + nb1 + ")");
    var req = creerInstance();
    var donneeproduit;
    /* On récupère les données du formulaire */
    var donneeClient = choix;

    req.onreadystatechange = function () {

        if (req.readyState == 4) {

            if (req.status == 200) {


            } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
            }
        }
    }
    donneeproduit = "donnees=" + donneeClient;


    req.open("POST", cheminjs + "Panier/enlever", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send(donneeproduit);
    $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
    $.ajaxSetup({cache: false});

}
;
function supDonnees(num, quantite) {
var chemin = $('#chemin').val();
    var cheminjs='';

    switch(chemin){
        case 'home': cheminjs = '';
            break;
        case 'produit':cheminjs ='../../../';
            break;
        case 'shop': cheminjs= '../';
    };
    var nb = $("#nbpanier").val() * 1 - quantite;
    if (nb >= 0) {
        $("#nbpanier").val(nb);
        $("#nbpaniervue").html("(" + nb + ")");
    }
    var req = creerInstance();
    var donneeproduit;
    /* On récupère les données du formulaire */
    var donneeClient = num;

    req.onreadystatechange = function () {

        if (req.readyState == 4) {

            if (req.status == 200) {


            } else {
                alert("Error: returned status code " + req.status + " " + req.statusText);
            }
        }
    }
    donneeproduit = "donnees=" + donneeClient;


    req.open("POST", cheminjs + "Panier/supprimer", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send(donneeproduit);
    $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
    $.ajaxSetup({cache: false});

}


