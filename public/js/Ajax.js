/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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

function envoyerDonnees (num){
    
var nb = $("#nbpanier").val() * 1 + 1
        $("#nbpanier").val(nb);
        $("#nbpaniervue").html("(" + nb + ")");
  var req =  creerInstance();
  var donneeproduit;
 /* On récupère les données du formulaire */
  var donneeClient = num;
 
  req.onreadystatechange = function (){

  if(req.readyState == 4){

    if(req.status == 200){
     
      
    }else{
      alert("Error: returned status code " + req.status + " " + req.statusText);
    }
  }
}   
  donneeproduit = "donnees="+donneeClient ;
   

  req.open("POST", "../Panier", true);
  req.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  req.send(donneeproduit);
  $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
            $.ajaxSetup({cache: false});


  
}

