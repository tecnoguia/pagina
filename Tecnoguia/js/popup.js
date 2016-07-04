$("[data-toggle=popover]").popover({
			html : true,
			trigger : "hover",
			content : function() {
				return $('#popover-content').html();
			}
});
	