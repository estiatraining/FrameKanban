/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $(".texto").addClass("ui-state-default");
    $( ".botao" ).button();
    $( "#estrutura" ).tooltip({
        close: function() {
            $( document ).unbind( "mousemove.tooltip-position" );
        }
    }); 
    $(".texto").focus(function(){
        $(this).toggleClass("ui-state-focus");
    });
    $(".texto").blur(function(){
        $(this).toggleClass("ui-state-focus");
    });  
    $( "#tabs" ).tabs();
    $( ".dialog" ).dialog({
        autoOpen: false,
        modal: true,
        show: "fold",
        hide: "fold"
    });  
    $('#clickOrg').click(function(){
        $('#dialog').dialog('open');
        return false;
    });    
});
closeToolTip = function(){
    $( ".ui-tooltip" ).css("display", "none");
}
ajax = function(link, form, callback){    
    jQuery.ajax({        
        url: link,
        data: $(form).serialize(),
        type: 'POST',
        dataType: "json", 
        success: function(json){ 
           callback(json);
        },
        error: function(json){
           alert(json); 
        }
    });    
}
