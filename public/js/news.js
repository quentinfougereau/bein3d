/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    setInterval(chargerNews,10000);
});
var dernier_id;

function setId(id){
    dernier_id = id;
}
function chargerNews(){
    $.ajax({
        url: 'Recup?id='+dernier_id,
        success: function(data){
           
            if(data.length>1){
                $(data).prependTo('#actus').hide().animate({'height':'toggle','opacity':'toggle'},2000);
                $('#actus li:last-child').animate({'height':'toggle','opacity':'toggle'},2000,function(){
                    $(this).remove();
                });
            }
            
        }
    })
}
