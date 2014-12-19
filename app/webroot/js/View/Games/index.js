
(function($) {
  $('#GameTitle').autocomplete({
       source: "index.json",
    select: function(event, ui) { 
        $("#theHidden").val(ui.item.id) 
		
    }
  });
  
})(jQuery);