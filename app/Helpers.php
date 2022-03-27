<?php
/**
 * encripta una ID
 */
    function encode($id = 0){
        return \Hashids::encode($id);
    }

/**
 * desencripta una ID
 */
    function decode($hs){
        $id = \Hashids::decode($hs);
        if(!empty($id)){
            return $id[0];
        }else{
            return 0;
        }
    }

function valueToDescription($value){
    $par = \App\Models\Parametric::where('value',$value)->first();
    if(!is_null($par)){
        return $par->description;
    }
    return 'error 001';
}
