<?php

/**
 * This file is part of Nepttune (https://www.peldax.com)
 *
 * Copyright (c) 2018 Václav Pelíšek (info@peldax.com)
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <https://www.peldax.com>.
 */

declare(strict_types = 1);

namespace WebLoader\Filter;

use \WebLoader\Compiler;

class CssMinFilter
{
    public function __invoke(string $code, Compiler $compiler, string $path) : string
    {
        $minifier = new \WebLoader\Filter\CssMinifier();
        $minifier->addWithPath($code, $path);
        $minifier->setMaxImportSize(0.1);
        return $minifier->minify();
    }
}
