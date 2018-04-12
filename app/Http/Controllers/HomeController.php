<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pattern()
    {
        //return "Path Called";
        $arr = array(
            array(0,0,0,0,0,0,0,0,0),
            array(0,0,0,0,0,0,0,0,0),
            array(0,0,0,0,0,0,0,0,0),
            array(0,0,0,0,0,0,0,0,0),
            array(0,0,0,0,0,0,0,0,0)
        );
        $arr1 = array();
        //dd($arr);
        $pos1=0;
        $pos2=0;
        $pos3=8;
        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<9;$j++)
            {
                if(($i==0||$i%2==0)&&(($i==$j)||($i==$pos1&&$j==$pos3)))
                {
                    echo "_";
                    if($j!=0)
                    {
                        $pos1 = $pos1+1;
                        $pos3 = $pos3-1;
                    }
                    
                }                
                elseif(($i==1||$i%2==1)&&(($i==$j)||($i==$pos1&&$j==$pos3)))
                {
                    echo "|";
                    if(($i+$j)==8){
                        $pos1 = $pos1+1;
                        $pos3 = $pos3-1;
                    }
                    
                }
                else
                    echo "&nbsp;";
            }
            echo "<br />";
        }
    }

}
