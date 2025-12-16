# XML to PHP Array

> Original Repos:   
> - XML to PHP Array: https://github.com/a19836/xmltophparray/   
> - Bloxtor: https://github.com/a19836/bloxtor/

## Overview

**XML to PHP Array** is a PHP library to convert XML content into PHP arrays and supports XML validation using XSD schemas.

To see a working example, open [index.php](index.php) on your server.

---

## Usage

XML File Usage

```php
$array = XMLFileParser::parseXMLFileToArray($xml_file_path);
```

XML Content Usage

```php
$array = XMLFileParser::parseXMLContentToArray($content);
```
