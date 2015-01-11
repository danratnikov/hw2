'use strict';


(function(){

	$(document).ready(function(){


		var $addLink = $('.add-work__link'),
			$closeIcon = $('.close-icon'),
			$modalAdd = $('.modal-box');

		$addLink.on('click', function(e){
			e.preventDefault();
			$modalAdd.removeClass('hidden');

		});

		$closeIcon.on('click', function(e){
			e.preventDefault();
			$modalAdd.addClass('hidden');
		})


	});
})()




