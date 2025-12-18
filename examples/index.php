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

include_once __DIR__ . "/config.php";
include_once get_lib("xmlfile.XMLFileParser");

echo $style;

echo "<h1>XML to PHP Array</h1>
<p>Convert XML to Array</p>";

echo '<div class="note">
		<span>
		This library converts XML content into PHP arrays and supports XML validation using XSD schemas.
		</span>
</div>';

$content = '<root>
	<item class="foo">A</item>
	<item>B
		<item class="bar">B1</item>
		<item>B2</item>
	</item>
	<item>C</item>
</root>';
$nodes = XMLFileParser::parseXMLContentToArray($content);

echo '<h5>Parse XML Content:</h5>
<div class="code short">
	<textarea readonly>
$content = \'<root>
	<item class="foo">A</item>
	<item>B
		<item class="bar">B1</item>
		<item>B2</item>
	</item>
	<item>C</item>
</root>\';
$nodes = XMLFileParser::parseXMLContentToArray($content); //need also to pass the
print_r($nodes);
	</textarea>
</div>
<div class="code output">
	<textarea readonly>' . print_r($nodes, true) . '</textarea>
</div>';

$MyXML = new MyXML($content);
$arr = $MyXML->toArray(array("simple" => true, "lower_case_keys" => true));
$arr = MyXML::complexArrayToBasicArray($arr);

echo '<h5>Parse XML Content to Simple Array:</h5>
<div class="code short">
	<textarea readonly>
$MyXML = new MyXML($content);
$arr = $MyXML->toArray(array("simple" => true, "lower_case_keys" => true));
$arr = MyXML::complexArrayToBasicArray($arr);
print_r($arr);
	</textarea>
</div>
<div class="code xml short">
	<textarea readonly>' . print_r($arr, true) . '</textarea>
</div>';

$external_vars = array(
	"my_name" => "JP",
	"app_path" => __DIR__,
	//"GLOBALS" => $GLOBALS,
	//other vars... You can also add here $_GET, $_POST, $GLOBALS, etc...
);
$xml_file_path = __DIR__ . "/assets/beans.xml";
$xml_schema_file_path = get_lib("xmlfile.schema.beans", "xsd");
$parse_php = true;
$nodes = XMLFileParser::parseXMLFileToArray($xml_file_path, $external_vars, $xml_schema_file_path, $parse_php); //need also to pass the xml_file_path bc of of the relative includes inside of the xml.

echo '<h5>Parse XML File:</h5>
<div class="code short">
	<textarea readonly>
$external_vars = array(
	"my_name" => "JP",
	"app_path" => __DIR__
);
$xml_file_path = __DIR__ . "/assets/beans.xml";
$xml_schema_file_path = get_lib("xmlfile.schema.beans", "xsd");
$parse_php = true;
$nodes = XMLFileParser::parseXMLFileToArray($xml_file_path, $external_vars, $xml_schema_file_path, $parse_php);
print_r($nodes);
	</textarea>
</div>
<div class="code output">
	<textarea readonly>' . print_r($nodes, true) . '</textarea>
</div>';

$external_vars = array(
	"my_name" => "JP",
	"app_path" => __DIR__
);
$content = '<root>
	<item class="<?php echo $my_name; ?>">A</item>
	<item>B
		<item><?php echo $app_path; ?></item>
	</item>
</root>';
$content = PHPScriptHandler::parseContent($content, $external_vars);

echo '<h5>Parse PHP in XML Content:</h5>
<div class="code short">
	<textarea readonly>
$external_vars = array(
	"my_name" => "JP",
	"app_path" => __DIR__
);
$content = \'<root>
	<item class="<?php echo $my_name; ?>">A</item>
	<item>B
		<item><?php echo $app_path; ?></item>
	</item>
</root>\';
$content = PHPScriptHandler::parseContent($content, $external_vars);
echo $content;	
	</textarea>
</div>
<div class="code xml short">
	<textarea readonly>' . $content . '</textarea>
</div>';

$MyXMLArray = new MyXMLArray($nodes);
$content = $MyXMLArray->toXML();

echo '<h5>Print Array into XML:</h5>
<div class="code one-line">
	<textarea readonly>
$MyXMLArray = new MyXMLArray($nodes);
$content = $MyXMLArray->toXML();
	</textarea>
</div>
<div class="code xml short">
	<textarea readonly>' . $content . '</textarea>
</div>';
?>
