/**
 * jquery.simplePagination.js
 * @version: v1.0.0
 * @author: Sebastian Marulanda http://marulanda.me
 * @see: https://github.com/smarulanda/jquery.simplePagination
 */

(function($) {

	$.fn.simplePagination = function(options) {

		const defaults = {
			perPage: 20,
			containerClass: '',
			previousButtonClass: '',
			nextButtonClass: '',
			previousButtonText: '<',
			nextButtonText: '>',
			currentPage: 1
		};

		const settings = $.extend({}, defaults, options);

		return this.each(function() {
			const $rows = $(options, this);
			const pages = Math.ceil($rows.length / settings.perPage);

			const container = document.createElement('div');
			const bPrevious = document.createElement('button');
			const bNext = document.createElement('button');
			const of = document.createElement('span');


			bPrevious.innerHTML = settings.previousButtonText;
			bNext.innerHTML = settings.nextButtonText;

			container.className = settings.containerClass;
			bPrevious.className = settings.previousButtonClass;
			bNext.className = settings.nextButtonClass;

			bPrevious.style.marginRight = '8px';
			bPrevious.classList.add('btn');
			bPrevious.classList.add('bg-blue');
			bPrevious.classList.add('bolo700');
			bNext.style.marginLeft = '8px';
			bNext.classList.add('btn');
			bNext.classList.add('bg-blue');
			bNext.classList.add('bolo700');
			container.style.textAlign = "right";
			container.style.marginBottom = '20px';

			container.appendChild(bPrevious);
			container.appendChild(of);
			container.appendChild(bNext);

			$(this).after(container);

			update();

			$(bNext).click(function() {
				if (settings.currentPage + 1 > pages) {
					settings.currentPage = pages;
				} else {
					settings.currentPage++;
				}
				update();
			});

			$(bPrevious).click(function() {
				if (settings.currentPage - 1 < 1) {
					settings.currentPage = 1;
				} else {
					settings.currentPage--;
				}
				update();
			});

			function update() {
				const from = ((settings.currentPage - 1) * settings.perPage) + 1;
				let to = from + settings.perPage - 1;

				if (to > $rows.length) {
					to = $rows.length;
				}

				$rows.hide();
				$rows.slice((from-1), to).show();

				of.innerHTML = from + ' à ' + to + ' sur ' + $rows.length + ' lignes';

				if ($rows.length <= settings.perPage) {
					$(container).hide();
				} else {
					$(container).show();
				}
			}
		});

	}

}(jQuery));
