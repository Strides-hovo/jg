<?php


function random_str( $length )
{
    $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}




function debugs( $data, $type = false ){
    if( $type ) var_dump( '<pre>', $data, '</pre>' );
    else echo '<pre>' . print_r( $data, true ) . '</pre>';
}