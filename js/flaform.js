jQuery(function() {

   jQuery('.flaform').click(function() {

       swal({
           title: arrFlaformVars['screen1_title_text'],
           text: "<form><input type=\"" + arrFlaformVars['screen1_field1_type'] + "\" name=\"flaform1\" placeholder=\"" + arrFlaformVars['screen1_field1_placeholder'] + "\" class=\"flaform-text\" " + arrFlaformVars['screen1_field1_required'] + " /><input type=\"" + arrFlaformVars['screen1_field2_type'] + "\" name=\"flaform2\" placeholder=\"" + arrFlaformVars['screen1_field2_placeholder'] + "\" class=\"flaform-text\" " + arrFlaformVars['screen1_field2_required'] + " /></form>",
           html: true,
           showCancelButton: true,
           cancelButtonText: arrFlaformVars['screen1_button1_text'],
           cancelButtonColor: arrFlaformVars['screen1_button2_color'],
           confirmButtonText: arrFlaformVars['screen1_button2_text'],
           confirmButtonColor: arrFlaformVars['screen1_button2_color'],
           closeOnConfirm: false,
           closeOnCancel: true
       },
       function(isConfirm){

           if (isConfirm) {
               swal({
                   title: arrFlaformVars['screen2_title_text'],
                   html: true,
                   text: arrFlaformVars['screen2_message_text'],
                   type: "error",
                   confirmButtonText: arrFlaformVars['screen2_button1_text']
               });
           } else {
               //Do nothing and close quietly
           }

       });

   });

});
