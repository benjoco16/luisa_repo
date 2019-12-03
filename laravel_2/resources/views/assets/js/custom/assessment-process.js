$(document).ready ( function () {
	$(document).on('click', '[data-to-step]', function () {
		$('[data-step], [data-wizard-step]').removeClass("active");
		
		var activeContent = $(this).attr('data-to-step');
		$('[data-step="' +  activeContent + '"]').addClass('active');
		

		for (var i = 0; i < parseInt(activeContent); i++) {
			$(`[data-wizard-step="${i+1}"]`).addClass('active');
		}
	})
});