<?php
namespace App\Services\Business;

use App\Model\AssessmentModel;

class AssessmentService
{

    public function __construct()
    {}
    
    /**
     * Compares the strings in the model to the comparason string
     * @param AssessmentModel $model : The model
     * @param string $comparingString : The string to compare to the model
     * @return boolean
     */
    public function isValuesEqualToString(AssessmentModel $model, string $comparingString)
    {        
        // Check value 1
        if($model->getVal1() == $comparingString) return TRUE;
        
        // Check value 2
        if($model->getVal2() == $comparingString) return TRUE;
        
        // Check value 3
        if($model->getVal3() == $comparingString) return TRUE;
        
        // Check value 4
        if($model->getVal4() == $comparingString) return TRUE;
        
        // Value was not found
        return FALSE;
    }
}

