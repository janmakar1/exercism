<?php

function language_list(...$languages)
{
    return $languages;
}


function add_to_language_list($languages, $new_language)
{
    $languages[] = $new_language;
    return $languages;
}

function prune_language_list($languages)
{
    
    $first = array_shift($languages);
    unset($first);
    return $languages;
}


function current_language($languages)
{
    return $languages[0];
}

function language_list_length($languages)
{
    return count($languages);
}
