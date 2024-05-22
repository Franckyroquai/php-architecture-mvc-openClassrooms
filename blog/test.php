<?php

function test()
{
    try {
        throw new Exception('ma seconde exception');
    } catch (Exception $exception) {
        throw new Exception('ma troisième exception');
        die ($exception->getMessage());
    }
    throw new exception('mon exception de puis une fonction');
}




try {
    test();

    echo "je continue";
} catch (Exception $exception) {
    die($exception->getMessage());
}