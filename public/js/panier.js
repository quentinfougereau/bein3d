/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function quantiteplus(choix) {
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


            req.open("POST", "../Panier/ajouter", true);
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
        var nb = $("#" + choix).val() * 1 - 1;
        $("#" + choix).val(nb);
        var nb1 = $("#nbpanier").val() * 1 - 1;
        $("#nbpanier").val(nb1) ;
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


            req.open("POST", "../Panier/enlever", true);
            req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            req.send(donneeproduit);
            $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
            $.ajaxSetup({cache: false});
        
    }
    ;
    function supDonnees(num,quantite) {
        
        var nb = $("#nbpanier").val() * 1 - quantite;
        if(nb>=0){
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


        req.open("POST", "../Panier/supprimer", true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(donneeproduit);
        $("#cart").load("http://localhost/bein3d/public/Panier/refresh");
        $.ajaxSetup({cache: false});

    }


