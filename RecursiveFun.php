<?php

function factroil($n)
{
    if ($n < 0)
        return -1;
    if ($n == 0)
        return 1;
    return ($n * factroil($n - 1));
}
echo "factroil of Number=" . factroil((5));
