WdevMarkdown
============

> A simple ZF2 module that lets you use Markdown in your own modules, to install all you will have to do is to 
1. Add <pre>"fwahlqvist/wdev-markdown": "dev-master"</pre> to your composer and run <pre>php composer.phar install</pre>
2. Enable WdevMarkdown in your application.config.php
3. In your view scripts add <pre>$this->Markdown('Your Content');</pre>


##TODO
This module is currently pre configured to use the <a href="http://michelf.ca/projects/php-markdown/extra/">Markdown Extra</a> and this might be configurable in the future
Add test for phpunit
Better documentation 