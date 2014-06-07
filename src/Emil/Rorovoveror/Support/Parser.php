<?php

namespace Emil\Rorovoveror\Support;

class Parser {

	private $map = array(
		"b" => "bob",
		"c" => "coc",
		"d" => "dod",
		"f" => "fof",
		"g" => "gog",
		"h" => "hoh",
		"j" => "joj",
		"k" => "kok",
		"l" => "lol",
		"m" => "mom",
		"n" => "non",
		"p" => "pop",
		"q" => "qoq",
		"r" => "ror",
		"s" => "sos",
		"t" => "tot",
		"v" => "vov",
		"w" => "wow",
		"x" => "xox",
		"z" => "zoz",
		"B" => "Bob",
		"C" => "Coc",
		"D" => "Dod",
		"F" => "Fof",
		"G" => "Gog",
		"H" => "Hoh",
		"J" => "Joj",
		"K" => "Kok",
		"L" => "Lol",
		"M" => "Mom",
		"N" => "Non",
		"P" => "Pop",
		"Q" => "Qoq",
		"R" => "Ror",
		"S" => "Sos",
		"T" => "Tot",
		"V" => "Vov",
		"W" => "Wow",
		"X" => "Xox",
		"Z" => "Zoz"
	);

	public function parse($data) {
		return implode("", array_map(function($l){ return array_key_exists($l, $this->map) ? $this->map[$l] : $l; }, str_split($data)));
	}
}