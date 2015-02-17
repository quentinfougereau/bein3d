/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    setInterval(chargerNews,5000);
});
var dernier_id;

function setId(id){
    dernier_id = id;
}
function chargerNews(){
    jQuery.ajax({
        url: 'News?id='+dernier_id,
        success: function(data){
            $('#actus').prepend(data);
        }
    })
}
