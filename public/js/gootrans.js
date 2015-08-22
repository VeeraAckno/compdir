
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en', 
			
			/**
			*  These are the specific language options Starts
			*  If you need to all languages, have to comment the below (includedLanguages: 'en,hi,kn,ta,te,ur,bn,gu,mr',)
			*/
			includedLanguages: 'en,hi,kn,te,pt,es,fr',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE
			// These are the specific language options Ends
			
			},
            'google_translate_element'
        );

        /*
            To remove the "powered by google",
            uncomment one of the following code blocks.
            NB: This breaks Google's Attribution Requirements:
            https://developers.google.com/translate/v2/attribution#attribution-and-logos
        */

        // Native (but only works in browsers that support query selector)
        if(typeof(document.querySelector) == 'function') {
            document.querySelector('.goog-logo-link').setAttribute('style', 'display: none');
            document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
       }

        // If you have jQuery - works cross-browser - uncomment this
      //  jQuery('.goog-logo-link').css('display', 'none');
       // jQuery('.goog-te-gadget').css('font-size', '0');
    }

