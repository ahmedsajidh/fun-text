<?php

namespace Sajidh\Funtext;

class Funtext extends Component
{
    public function capital($str)
    {
        return strtoupper($str);

    }


    public function Firstcapital($str){

        return ucfirst($str);
    }
}
