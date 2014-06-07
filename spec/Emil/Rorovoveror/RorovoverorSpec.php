<?php

namespace spec\Emil\Rorovoveror;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RorovoverorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Emil\Rorovoveror\Rorovoveror');
    }

    function it_should_translate_text()
    {
    	$this->text("Emil")->shouldReturn("Emomilol");
    	$this->text("Simen")->shouldReturn("Sosimomenon");
    	$this->text("foo")->shouldReturn("fofoo");
    }

    function it_should_translate_file() {
    	$this->file(__DIR__."/example_data.txt")->shouldReturn("exoxamompoplole");
    }

    function it_should_translate_url() {
    	$this->url("https://raw.githubusercontent.com/emilkje/sandbox-repo/master/README.md")->shouldReturn("totesostot
upopdodatotedod roreadodmome
Edoditot tothohe fofilole vovia GogitotHohubob");
    }
}
