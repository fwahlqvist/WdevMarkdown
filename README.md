WdevMarkdown
============

A simple ZF2 module that lets you use Markdown in your own modules, to install all you will have to do is to 

Add <pre>"fwahlqvist/wdev-markdown": "dev-master"</pre> to your composer and run <pre>php composer.phar install</pre>

Enable WdevMarkdown in your application.config.php

In your view scripts add <pre>$this->WdevMarkdown('Your Content');</pre>


##TODO
This module is currently pre configured to use the <a href="http://michelf.ca/projects/php-markdown/extra/">Markdown Extra</a> and this might be configurable in the future

Add test for phpunit

Better documentation 