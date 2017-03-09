<?php

/**
 * Description of LinearSearch
 *
 * @author ovanes
 */

class LinearSearch {

    /**
     *
     * @var array 
     */
    private $input = [10, 14, 16, 37, 39, 45, 52];
    
    /**
     * Pseudocode
     * 
     * procedure linear_search (list, value)
     * 
     *      for each item in the list
     *          if match item == value
     *              return the item's location
     *          end if
     *      end for
     * end procedure
     */
    public function search($findMe){
        
        $size = count( $this->input ) - 1;
        
        for($i=1; $i<$size; $i++){
            if($findMe == $this->input[$i]){
                return [ 'location' => $i, 'value' => $this->input[$i] ];
            }
        }
        
        return 'The item is not found';
    }
    
}