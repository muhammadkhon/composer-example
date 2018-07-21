<?php

namespace muhammadkhon\parser;

/**
 * @author Muhammadkhon Turakhonov <muhammadkhon@bk.ru>
 */
class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
        $htmlpPage = file_get_contents($url);

        if ($htmlpPage === false) {
            return ['Invalid URL'];
        }

        preg_match_all('/<'.$tag.'.*?>(.?)<\/'.$tag.'>/s', $htmlpPage, $string);

        if (empty($string[1])) {
            return ['There are no such tags on the page'];
        }

        return $string[1];
    }

}