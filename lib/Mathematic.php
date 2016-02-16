<?php

class Mathematic
{
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function multiple($a, $b)
    {
        $res = $a * $b;

        return $res;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function addition($a, $b)
    {
        $res = $a + $b;

        return $res;
    }

    public function plusminus($a, $b, $c)
    {
        $res = $a + $b - $c;

        return $res;
    }

    public function mix($a, $b, $c)
    {
        $res = ($a + $b) * $c;

        return $res;
    }
}
