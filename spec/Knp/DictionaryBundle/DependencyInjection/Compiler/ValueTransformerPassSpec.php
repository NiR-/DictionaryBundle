<?php

namespace spec\Knp\DictionaryBundle\DependencyInjection\Compiler;

use PhpSpec\ObjectBehavior;

class ValueTransformerPassSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Knp\DictionaryBundle\DependencyInjection\Compiler\ValueTransformerPass');
    }
}
