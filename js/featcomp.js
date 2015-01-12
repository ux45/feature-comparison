jQuery(document).ready(function() 
  { 
    jQuery("a.menu-218").wrapInner("<span></span>").prepend("<i class='fa fa-home'></i> ");
    jQuery("a.menu-776").wrapInner("<span></span>").prepend("<i class='fa fa-info-circle'></i> ");
    jQuery("a.menu-616").wrapInner("<span></span>").prepend("<i class='fa fa-file-text-o'></i> ");
    jQuery("a.menu-592").wrapInner("<span></span>").prepend("<i class='fa fa-list-ul'></i> ");
    jQuery("a.menu-777").wrapInner("<span></span>").prepend("<i class='fa fa-wrench'></i> ");
    jQuery(".pagination").before('<div class="alert alert-warning" id="selected-warning" role="alert">Please add selected before leaving this page</div>');
		jQuery("#selected-warning").hide();
		jQuery(".vbo-views-form #edit-select").hide();
		jQuery(".vbo-views-form input:checkbox").click(function() {
	    if(jQuery(this).is(":checked")) {
	      jQuery(".vbo-views-form #edit-select").show(300);
	      jQuery("#selected-warning").show(300);
	    } else {
				jQuery(".vbo-views-form #edit-select").hide(200);
	    }
		});
    jQuery("#block-system-main-menu .nav").addClass("nav-pills");
    jQuery(".logged-in.page-node #main-content-area .tabs--primary.nav").removeClass("nav-tabs").addClass("nav-pills");
  } 
); 
