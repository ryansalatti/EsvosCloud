$("#userData .userTable tr").bind("contextmenu", function (event) {
    
    // Avoid the real one
    event.preventDefault();
   var $this = $(this);
   if (!$this.hasClass('selected')) {
    dblclick(this.id);
    $this.addClass('selected');
    $('#selectmenu').removeClass("hidden");
  } 
    // Show contextmenu
    $(".custom-menu").finish().toggle(100).
    
    // In the right position (the mouse)
    css({
        top: event.pageY + "px",
        left: event.pageX + "px"
    });
});


// If the document is clicked somewhere
$(document).bind("mousedown", function (e) {
    
    // If the clicked element is not the menu
    if (!$(e.target).parents(".custom-menu").length > 0) {
        
        // Hide it
        $(".custom-menu").hide(100);
    }
});


// If the menu element is clicked
$(".custom-menu li").click(function(){
    // This is the triggered action name
    switch($(this).attr("data-action")) {
        // A case for each action. Your actions here
        case "first": break;
        case "second": break;
        case "third": break;
        case "fourth": break;
    }
  
    $(".custom-menu").hide(100);
  });