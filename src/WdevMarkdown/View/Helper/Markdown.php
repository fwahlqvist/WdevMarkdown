<?php
namespace WdevMarkdown\View\Helper;

use dflydev\markdown\MarkdownExtraParser;
use Zend\View\Helper\AbstractHelper;
 
class Markdown extends AbstractHelper
{
    public function markdown($string)
    {  
        $markdownParser = new MarkdownExtraParser();
        echo $markdownParser->transformMarkdown($string);
    }
 
    public function __invoke($string = null)
    {
        return $this->markdown($string);
    }
}