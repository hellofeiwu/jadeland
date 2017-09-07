'use strict';

$(function(){
	i18next
	.use(i18nextXHRBackend)
	.init({
			lng: localStorage.getItem('LNG'),
			fallbackLng: 'en',
			backend: {
				loadPath: '/locales/{{lng}}/{{ns}}.json'
			}
    }, function(err, t) {
    });

	function updateContent() {
		jqueryI18next.init(i18next, $);
		$('#body').localize();
  	}

	i18next.on('languageChanged', () => {
	  updateContent();
	});
});