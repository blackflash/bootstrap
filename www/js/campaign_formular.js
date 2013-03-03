/*
 * Cleverfrogs campaign formular style
 *
 * Copyright 2013 - Ado Gaspar
 */

/* ==========================================================================
   Cleverfrogs All rights reserved
   ========================================================================== */


function submitFeedback(ps_id,campaign_id){
    ajaxStartSubmitFeedback(ps_id,campaign_id);
}

function ajaxStartSubmitFeedback(ps_id, campaign_id){
   ajaxSubmitFeedback(ps_id,campaign_id);
   return false;
}

function ajaxSubmitFeedback(ps_id,campaign_id){
    
    $.ajax({    //create an ajax request to load_page.php
      type: "POST",
      url: "?do=jsonSubmitFeedback",
      data: { ps_id: ps_id, campaign_id: campaign_id },
      dataType: "html",   //expect html to be returned
      success: function(msg){ 

          if(parseInt(msg)!=0)    //if no errors
          {
            console.log("DONE");
          }

      }
  });
}