<?php
namespace CfdiUtils\Nodes;

use CfdiUtils\Utils\Xml;
use DOMDocument;
use DOMElement;

class XmlNodeExporter
{
    /** @var DOMDocument */
    private $document;

    public function __construct(DOMDocument $document = null)
    {
        if ($document === null) {
            $document = Xml::newDocument();
        }
        $this->document = $document;
    }

    public function export(NodeInterface $node): DOMElement
    {
        $element = $this->document->createElement($node->name());

        foreach ($node->attributes() as $name => $value) {
            $element->setAttribute($name, $value);
        }

        foreach ($node->children() as $child) {
            $childElement = $this->export($child);
            $element->appendChild($childElement);
        }

        return $element;
    }

    public function getDocument(): DOMDocument
    {
        return $this->document;
    }
}
