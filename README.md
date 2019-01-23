# VExtLibs
Classes and functions that extends PHP/ZF3 functionalities

## Installation
Simply use the composer:
```
composer require voyteck/extlibs
```

## Class ExtLibs
Class delivers static functions for various purposes

### ExtLibs::byteOn(int $value, int ...$bytes)
Functions returns TRUE if within $value bytes mentioned in (varied number) $bytes are ON.
For example number 5 can be split into bytes 1*1 + 0*2 + 1*4 - which means bytes 1 and 4 are ON. 
The function call ExtLibs::byteOn(5, 1) will return TRUE. Also ExtLibs::byteOn(5, 1, 4) will return TRUE.
However ExtLibs::byteOn(5, 2) will return FALSE.
This way within single integer number it is possible to write number of ON/OFF options.  