<?php

namespace Emil\Rorovoveror;

class Rorovoveror
{

	public function __construct(Support\ParserInterface $parser = null) {
		$this->parser = $parser ? : new Support\Parser;
	}

    public function text($text)
    {
        return $this->parser->parse($text);
    }

    public function file($file)
    {
        return $this->parser->parse(file_get_contents($file));
    }

    public function url($url)
    {
        return $this->parser->parse(file_get_contents($url));
    }
}
