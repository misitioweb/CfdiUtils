<?php
namespace CfdiUtilsTests\Elements\Cce11;

use CfdiUtils\Elements\Cce11\Domicilio;
use PHPUnit\Framework\TestCase;

class DomicilioTest extends TestCase
{
    /** @var Domicilio */
    public $element;

    protected function setUp()
    {
        parent::setUp();
        $this->element = new Domicilio();
    }

    public function testConstructedObject()
    {
        $this->assertSame('cce11:Domicilio', $this->element->getElementName());
    }
}
