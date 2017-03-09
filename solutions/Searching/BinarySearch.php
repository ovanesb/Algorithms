<?php

/**
 * Description of BinarySearch
 *
 * @author ovanes
 */
class BinarySearch {
    
    
    private $_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    public function binarySearchOne(){
        
        $l = 0;
        $r = count($this->_arr)-1;
        $i = 1;
        $key = 1;
        
        do{
            /**
             * Formula
             * mid = low + (high - low) / 2
             */
            $m = floor( ($l+$r)/2 );

            if($key < $this->_arr[$m]){
                $r = $m-1;
            }else{
                $l = $m+1;
            }
            
            echo '[ Step '. $i . ' ]  ' . $this->_arr[$m] . '<br />'; 
            $i++;
            $f = $this->_arr[$m];

        }while( $key < $this->_arr[$m] || $key > $this->_arr[$m]);

        echo 'Find : ' . $f;

    }
  

}

?>


	