<?php

namespace App\Utils;


class Image
{

    /**
     * @param $x
     * @param $y
     * @param $r
     * @param $g
     * @param $b
     */
    public function generatePng($x, $y, $r, $g, $b) {
        $im = @imagecreate($x, $y)
            or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($im, $r, $g, $b);
        imagepng($im);
        imagedestroy($im);
    }

}