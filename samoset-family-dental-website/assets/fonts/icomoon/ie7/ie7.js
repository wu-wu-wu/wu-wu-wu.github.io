/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-gift': '&#xe900;',
		'icon-google': '&#xe901;',
		'icon-google2': '&#x1f326;',
		'icon-google-plus': '&#xe903;',
		'icon-google-plus2': '&#xe904;',
		'icon-facebook': '&#xe905;',
		'icon-facebook2': '&#xe906;',
		'icon-instagram': '&#xe907;',
		'icon-twitter': '&#xe908;',
		'icon-pinterest': '&#xe909;',
		'icon-pinterest2': '&#xe90a;',
		'icon-yelp': '&#xe902;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
