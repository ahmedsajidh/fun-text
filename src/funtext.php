<?php

namespace Sajidh\Funtext;

class Funtext extends Component
{
    //full string in Capital latter
    public function capital($str)
    {
        return strtoupper($str);

    }

    //Capital Letter First
    public function Firstcapital($str){

        return ucfirst($str);
    }

    // Slugify a string
    function Slugify($str)
    {

        $str=strip_tags($str);

        $str = preg_replace('~[^\pL\d]+~u', '-', $str);

        setlocale(LC_ALL, 'en_US.utf8');
        $str = iconv('utf-8', 'us-ascii//TRANSLIT', $str);

        $str = preg_replace('~[^-\w]+~', '', $str);

        $str = trim($str, '-');

        $str = preg_replace('~-+~', '-', $str);

        $str = strtolower($str);

        if (empty($str)) { return 'n-a'; }

        return $str;
    }
}
