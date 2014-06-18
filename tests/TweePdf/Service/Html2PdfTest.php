<?php
namespace TweePdf\Service;
use PHPUnit_Framework_TestCase;

class Html2PdfTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $service = new Html2Pdf();
        $content = $service->convert(file_get_contents(__DIR__ . '/_files/report.html'));
        $this->assertEquals('PDF', substr($content, 1, 3));
    }
}