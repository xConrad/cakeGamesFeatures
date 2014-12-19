
(function($) {
  $('#GameTitle').autocomplete({
       source: "add.json",
    select: function(event, ui) { 
        $("#theHidden").val(ui.item.value) 
    }
  });
  
})(jQuery);