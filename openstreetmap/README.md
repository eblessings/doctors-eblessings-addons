OpenStreetMap Addon
===

	by Mike Macgirvin
	   Klaus Weidenbach

This addon allows you to use OpenStreetMap for displaying locations.

## Requirements

To use this addon you need a tile Server that provides the maps.
OpenStreetMap data is free for everyone to use. Their tile servers are not.
Please take a look at their "Tile Usage Policy":
http://wiki.openstreetmap.org/wiki/Tile_usage_policy
You can run your own tile server or choose one from their list of public
tile servers: http://wiki.openstreetmap.org/wiki/TMS
Support the OpenStreetMap community and share the load.

## Configuration

If you for any reason prefer to use a configuration file instead
of the admin panels, please refer to the Alternative Configuration below.

Activate the addon from your admin panel.

You can now add a Tile Server and default zoom level in the addon settings
page of your admin panel.

The Time Server URL points to the tile server you want to use. Use the full URL,
with protocol (http/s) and trailing slash. You can configure the default zoom
level on the map in the Default Zoom box.  1 will show the whole world and 18 is the highest
zoom level available.


## Alternative Configuration

Open the `config/node.config.php` file and add "openstreetmap" to the list of activated addons.

	'addons' => [
		...
		'openstreetmap' => [
			admin => true,			
		],
	]

You can set configuration variables for the addon in the `config/openstreetmap.config.php` file:

	return [
		'openstreetmap' => [
			'tmsserver' => 'https://www.openstreetmap.org',
			'nomserver' => 'https://nominatim.openstreetmap.org/search.php',
			'zoom' => 16,
			'marker' => 0,
		],
	];

The *tmsserver* points to the tile server you want to use. Use the full URL,
with protocol (http/s) and trailing slash. You can configure the default zoom
level on the map with *zoom*. 1 will show the whole world and 18 is the highest
zoom level available.

Please see provided `config/openstreetmap.php` file for explanation on the additional configuration keys.
