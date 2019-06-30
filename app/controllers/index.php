<?php

$metaTags = [
    'site_title' => settings('title'),
    'site_desc' => settings('description'),
    'site_keyw' => settings('keyword')

];

require View::app('index');