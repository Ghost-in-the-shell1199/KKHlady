jQuery(document).ready(function($) {
    $('#addDeveloperForm').submit(function(e){
        e.preventDefault();

        let formData = new FormData(e.target);
        let entries = Object.fromEntries(formData.entries());  
        $.ajax({
          type: 'POST',
          url: params.ajaxurl, // WordPress AJAX URL, passed in as params in functions.php
          data: {
            action: 'insert_new_developer',
            body: entries
          },
          success: function(response) {
            $("#statusMessage").text(response);
          }
        });
    })
    $('#addApplicationForm').submit(function(e){
        e.preventDefault();

        let formData = new FormData(e.target);
        let entries = Object.fromEntries(formData.entries());
        $.ajax({
          type: 'POST',
          url: params.ajaxurl, // WordPress AJAX URL, passed in as params in functions.php
          data: {
            action: 'insert_new_application',
            body: entries
          },
          success: function(response) {
            $("#statusMessage").text(response);
          }
        });
    })
})