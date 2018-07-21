<?php

namespace muhammadkhon\parser;

/**
 * @author Muhammadkhon Turakhonov <muhammadkhon@bk.ru>
 */
interface ParserInterface
{

    /**
     * @param string $url
     * @param string tag
     * @return array
     */

    public function process(string $url, string $tag): array;
}