<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<dictionary>
    <entry>
        <word>definition</word>
        <definition>A statement of the exact meaning of a word, especially in a dictionary.</definition>
    </entry>
    <entry>
        <word>bar</word>
        <definition>A place that sells alcholic beverages</definition>
    </entry>
    <entry>
        <word>ajax</word>
        <definition>Technique which involves the use of javascript and xml (or JSON)</definition>
    </entry>
    <entry>
        <word>html</word>
        <definition>The standard markup language for creating web pages and web applications.</definition>
    </entry>
    <entry>
        <word>css</word>
        <definition>A style sheet language used for describing the presentation of a document written in a markup language.</definition>
    </entry>
    <entry>
        <word>javascript</word>
        <definition>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</definition>
    </entry>
    <entry>
        <word>php</word>
        <definition>A server-side scripting language, and a powerful tool for making dynamic and interactive websites
    </entry>
</dictionary>';

$xml=simplexml_load_string($xmldata) or die("Error");
print_r($xml);