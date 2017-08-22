/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
eventOrg = function(){    
    $("#contDialogOrg").load("../organization/",function(response, sts, rxhr){
        if(sts == 'error'){
            alert('Página não encontrada!');
        }else{
            $('#dialogOrg').dialog('open');
            $('#dialogOrg').dialog({width: 600, position: [400]});
        }
    });    
}

