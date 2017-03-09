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
    private $input = [1=>10, 2=>14, 3=>16, 4=>37, 5=>39, 6=>45, 7=>52];
    
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
        
        $size = count( $this->input );
        
        for($i=1; $i<$size; $i++){
            if($findMe == $this->input[$i]){
                return [ 'location' => $i, 'value' => $this->input[$i] ];
            }
        }
        
        return 'The itme is not found';
    }
    
}