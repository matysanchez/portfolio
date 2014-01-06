Portfolio
=====

![alt text](http://matysanchez.com/images/logo.png "matysanchez.com")

This is my personal Portfolio. I use it on my website: [matysanchez.com](http://matysanchez.com/)

Of course you can use this code for your portfolio, o whatever you want. It is based on [Skeleton](http://getskeleton.com/).

This is pretty simple. If you want to do something, you just have to edit ``index.php`` file. If you want to add a new section, add a new array to ``$navBar`` and then add a new case in the switch function below. Just that. Easy, right?

To add a new page, you have to crea a new one, and put it in ``bin/sections/`` folder, and follow the previus step.

If you want to use analytics, please set ``$analytics`` to true, and then put your own Analytics code in the ``header.php`` file.

Use ``<?=$url?>`` when you want to link anythin, like a image or any source. To use this feature, make sure that you have ``short_open_tag=On`` in your ``php.ini`` file, or try adding: ``ini_set( 'short_open_tag' , '1' );`` at the bottom of index.php.

For the new page that are not base on ``home.html`` and do not have a cover or something special, use this code at the beginning of the file:
```
<div class="white_space"></div>
```

There is only one variable to set, is the URL of your portfolio, located in ``index.php``.
 ```php
<?php
date_default_timezone_set('America/Buenos_Aires');
// Where the site is hosted?
$url        = "http://matysanchez.com/";
 ```

TODO
=====
1. Get the number of Twitter followers with Javascript or PHP (the idea is not to use the Twitter API)
2. Get the number of cities I've been without any API, just a crawl to TripAdvisor site. (We have to use a cache for this this)
3. Add a word-rotator to the things that I love.