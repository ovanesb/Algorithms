<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bubbleSort
 *
 * @author ovanes
 */
class selectionSort {
    
    
    private $_arr = array(5, 7, 1, 8, 9, 12, 2, 89, 123, 456, 1111, 3);

    
    public function selectionSortOne(){

        echo '<pre>' . print_r($this->_arr  , 1) .'</pre>';

        $size = count($this->_arr);

        // (n-1) + (n-2) + (n-3) + ... + 1 = N*(N–1)/2 = O(n*2)

        for($i=0; $i<$size -1; $i++){
            $min = $i;
            for($j=$i+1; $j<$size;$j++){
                if( $this->_arr[$j] < $this->_arr[$min] ){
                    $min = $j;
                }
            }


            if($min != $i){
                $swap =  $this->_arr[$i];
                $this->_arr[$i] = $this->_arr[$min];
                $this->_arr[$min] = $swap;
            }


            echo '<pre>' . print_r($this->_arr  , 1) .'</pre>';


        }

        echo '<pre>' . print_r($this->_arr  , 1) .'</pre>';

    }
    
    public function bubleSortTwo(){
        return true;
    }

}

?>


	