var JSTREE = {
	node: $('#stree'),
	init: function () {
		JSTREE.node.jstree( {
			core: {
				themes: {
					icons: true
				}
			}
		})
	},

	build: function () {
		JSTREE.init();
	}
}

$(document).ready (function () {
    JSTREE.build();
});     