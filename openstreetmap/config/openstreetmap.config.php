<?php

// Warning: Don't change this file! It only holds the default config values for this addon.
// Instead, copy this file to config/openstreetmap.config.php in your Friendica directory and set the correct values there

return [
	'openstreetmap' => [
		// tmsserver (String)
		// This points to the tile server you want to use. Use the full URL, with protocol (http/s) and trailing slash.
		'tmsserver' => 'https://www.openstreetmap.org',

		// nomserver (String)
		'nomserver' => 'https://nominatim.openstreetmap.org/search.php',

		// zoom (Integer)
		// The default zoom level on the map.
		// 1 will show the whole world and 18 is the highest zoom level available.
		'zoom' => 16,

		// marker (Integer)
		'marker' => 0,
	],
];
