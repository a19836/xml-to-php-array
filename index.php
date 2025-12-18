<?php
/*
 * Copyright (c) 2025 Bloxtor (http://bloxtor.com) and Joao Pinto (http://jplpinto.com)
 * 
 * Multi-licensed: BSD 3-Clause | Apache 2.0 | GNU LGPL v3 | HLNC License (http://bloxtor.com/LICENSE_HLNC.md)
 * Choose one license that best fits your needs.
 *
 * Original XML to PHP Array Repo: https://github.com/a19836/xml-to-php-array/
 * Original Bloxtor Repo: https://github.com/a19836/bloxtor
 *
 * YOU ARE NOT AUTHORIZED TO MODIFY OR REMOVE ANY PART OF THIS NOTICE!
 */

include_once __DIR__ . "/examples/config.php";

echo $style;
?>
<h1>XML to PHP Array</h1>
<p>Convert XML to Array</p>
<div class="note">
		<span>
		This library converts XML content into PHP arrays and supports XML validation using XSD schemas.
		</span>
</div>
<div style="text-align:center;">
	<h3>
		<a href="examples/" target="examples">Click here to check an example</a>
	</h3>
</div>

<div>
	<h5>XML File Usage:</h5>
	<div class="code one-line">
		<textarea readonly>
$array = XMLFileParser::parseXMLFileToArray($xml_file_path);
		</textarea>
	</div>
</div>

<div>
	<h5>XML Content Usage:</h5>
	<div class="code one-line">
		<textarea readonly>
$array = XMLFileParser::parseXMLContentToArray($content);
		</textarea>
	</div>
</div>

To better understand what are the available XML functions this library have, please analyse the following files:
<ul>
	<li>lib/xmlfile/XMLFileParser.php</li>
	<li>lib/util/xml/MyXML.php</li>
	<li>lib/util/xml/MyXMLArray.php</li>
</ul>
