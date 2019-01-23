# VExtLibs
Classes and functions that extends PHP/ZF3 functionalities

## Installation
Simply use the composer:
```
composer require voyteck/extlibs
```

## Class Voyteck/ExtLibs
Class delivers static functions for various purposes

### Function Voyteck/ExtLibs::byteOn(int $value, int ...$bytes)
Functions returns TRUE if within $value bytes mentioned in (varied number) $bytes are ON.
For example number 5 can be split into bytes 1*1 + 0*2 + 1*4 - which means bytes 1 and 4 are ON.
This way within single integer number it is possible to write number of ON/OFF options.

#### Usage examples 
* Voyteck\VExtLibs::byteOn(5, 1) will return TRUE. 
* Voyteck\VExtLibs::byteOn(5, 1, 4) will return TRUE.
* Voyteck\VExtLibs::byteOn(5, 2) will return FALSE.

## View Helper Voyteck/ExtLibs/configValueHelper
A simple helper that once invoked will retrieve (and print on screen) a configuration value
Helper should be invoved with parameters:
__invoke(array $configPath = [], $quoteStrings = true)
* $configPath - contains path from configuration that should be retrieved. If not provided - the whole configuration is shown. The path should be provided in the form of an array with elements that shows "deeper and deeper" levels of configratuin key to be retrieved
* $quoteStrings - boolean parameter specifying whether string paraneter values should be quoted 

### Usage
The helper needs to be added into 'view_helpers' configuration entry.
Most common way of doing this would be adding an entry:
```
...
'view_helpers' => [
	...
	'aliases' => [
		...
		'configValueHelper' => \Voyteck\VExtLibs\View\Helper\configValueHelper::class,
	],
],
...
```
Then you can use the helper directly in the view files - e.g:
```
...
<?php echo $this->configValueHelper(['route', 'routes', 'test', 'type', 'options', 'route']); ?>
...
```
will print out on the page quoted route value for route 'test'. 