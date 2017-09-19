# Bulk URL Expanding - a YOURLS plugin

Plugin for [YOURLS](http://yourls.org)

* Plugin URI:       [https://github.com/felix-manea/bulk_api_bulk_expander](https://https://github.com/felix-manea/bulk_api_bulk_expander)
* Description:      A YOURLS plugin allowing the expanding of multiple URLs with one API request. 
* Inspired by: 		[github.com/tdakanalis/bulk_api_bulkshortener](https://github.com/tdakanalis/bulk_api_bulkshortener)
* Version:          1.0
* Release date:     2017-09-19
* Author:           Felix Manea
* Author URI:       [http://www.ever.ro](http://www.ever.ro)

## Installation

1. In `/user/plugins`, create a new folder named `bulk-expander`.
2. Drop these files in that directory.
3. Go to admin section of YOURLS and activate the plugin.

## Use

1. Add in your api request the parameter `action=bulkexpander`
2. Send the list of the URLs to be shortened using the parameter `urls[]`.
3. The response contains each shortened URL in a single line.

## Example
Request: 
* http://host:port/yourls-api.php?username=u&password=p&action=bulkexpander&urls[]=http://s.com/zy1071&urls[]=http://s.com/ha52ql

Response:
* http://url1
* http://url2

## History

* 2017-09-19, v1.0: Initial version.

## Finally...

I hope you find this plugin useful.
