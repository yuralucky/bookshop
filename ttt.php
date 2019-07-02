<?php

class Animal{
    private $name;

    public function __construct(string $name)
    {
        $this->name=$name;

    }

//    public function __toString()
//    {
//        return $this->name;
//    }


}
//
//$obj=new Animal('giraffe');
//echo $obj;

 function getExcerpt($str)
{
    if (strlen($str) > 50) {
        $excerpt = substr($str, 0, 20);
        $excerpt .= '...';
    } else {
        $excerpt = $str;
    }
    return $excerpt;
}
$str='gggggggggggggggggaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaallllllllllllllllllllllllllllllllll
ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssddddddddddddddddddddddddddddddddddddddddddddd';
$nn=getExcerpt($str);
print $nn;