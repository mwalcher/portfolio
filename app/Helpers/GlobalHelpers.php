<?php

/**
 * Checks if there is a value set in the lang file path
 *
 * @param string $path The path of the lang value.
 * @return boolean
 */
function issetLang($path)
{
    return __($path) !== $path;
}
