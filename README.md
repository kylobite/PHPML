PHPML
=====

Do you not like it when your HTML gets in your PHP?
PHPML keeps PHP code free of the unnecessary <brackets>.

Generate single HTML elements: 

    HTML::parse("h1",null,"Hello World!");

Generate multiple HTML elements: 

    for ($i = 0; $i< 3; $i++) HTML::parse("p",["class"=>"para"],"Lorem Ipsum");

Refer to index.php for a better example on how to implement PHPML.
