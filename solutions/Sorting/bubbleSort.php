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
class bubbleSort {
    
    
    private $_arr = array(5, 7, 1, 8, 9, 12, 2, 89, 123, 456, 1111, 3);

    public function bubbleSortOne(){

        echo '<pre>' . print_r($this->_arr, 1) . '</pre>';

        $c = 0;
        do {
            $sort = true;
            for ($i = 0; $i < count($this->_arr) - 1; $i++) {

                $c++;
                
                $cur = $this->_arr[$i];
                $next = $this->_arr[$i + 1];

                //Desc < or Asc >
                if ($cur > $next) {
                    $this->_arr[$i] = $next;
                    $this->_arr[$i + 1] = $cur;
                    echo '<pre class="brush: html line-numbers  language-html" style="width: 175px; float:left; margin-left:10px;" > [ ' . $c . ' ] <br />'. print_r($this->_arr, 1) . '</pre>';
                    $sort = false;
                }
            }
            
        } while ($sort == false);
    }
    
    public function bubleSortTwo(){
        
        echo '<pre>' . print_r($this->_arr, 1) . '</pre>';
        
        $size = count($this->_arr);
        for($i = 0; $i<$size; $i++){
            for($j=0; $j<$size-1;$j++){
                $curr = $this->_arr[$j];
                $next = $this->_arr[$j+1];
                if($curr > $next ){ // > desc, < asc
                    $this->_arr[$j] = $next;
                    $this->_arr[$j+1] = $curr;
                }
            }
        }
        echo '<pre>' . print_r($this->_arr, 1) . '</pre>';
    }

}

?>


	