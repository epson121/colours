<?php
/**
 * Created by PhpStorm.
 * User: luka
 * Date: 29.05.18.
 * Time: 20:56
 */

namespace App\Controller;


use App\Utils\Image;
use Symfony\Component\HttpFoundation\Response;

class IndexController
{

    const X = 2048;
    const Y = 80;

    /**
     * @var Image
     */
    private $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    /**
     * @param $r
     * @param $g
     * @param $b
     * @return Response
     */
    public function generateAction($r = 0, $g = 0, $b = 0)
    {
        return new Response(
            $this->image->generatePng(self::X, self::Y, $r, $g, $b),
            200,
            [
                'Content-Type' => 'image/png'
            ]
        );
    }

}