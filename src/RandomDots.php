<?php
/**
 * Created by PHPProjectGen.
 * User: edeoleo@gmail.com
 * Date: 10/18/2018
 * Time: 11:31 PM
 */

namespace Elminson\RandomDots;

/**
 *Function to add one or more dots in a ramdom position of a string
 *
 */
class RandomDots
{
    /**
     * PHPProjectGen constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return "index";
    }

    public function placeDot($string, $number_of_dots = 1)
    {
        // var_dump($string);
        $original_string = $string;
        if (strlen($string) <= $number_of_dots) {
            throw new \Exception(" String length must be greater than number of dots ");
        }
        if ($number_of_dots == 0) {
            return $string;
        }
        $string = str_split($string);
        $len = count($string);
        $random_position = rand(0, $len - 1);
        array_splice($string, $random_position, 0, '.');
        $string = implode($string);
        if (strlen(strstr($string, "..")) > 0 || substr($string, 0, 1) === ".") {
            return $this->placeDot($original_string, $number_of_dots);
        }

        return $this->placeDot($string, $number_of_dots - 1);
    }
}
