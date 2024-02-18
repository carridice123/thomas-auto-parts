$(function() {
    var b = $("#hamicon");
    var w = $("#wrapper");
    var l = $("#list");
    // w.height(l.outerHeight(true));
  
    b.click(function() {
    
      if(w.hasClass('open')) {
        w.removeClass('open');
        w.height(l.outerHeight(true));
        
      } else {
        w.addClass('open');
        w.height(0);
        
      }
    
    });
  });