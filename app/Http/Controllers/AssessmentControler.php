<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AssessmentModel;
use App\Services\Business\AssessmentService;

class AssessmentControler extends Controller
{
    public function getData(Request $request)
    {
        $val1 = $request->input('val1');
        $val2 = $request->input('val2');
        $val3 = $request->input('val3');
        $val4 = $request->input('val4');
        
        $model = new AssessmentModel($val1, $val2, $val3, $val4);
        
        $assService = new AssessmentService();
        
        $result = $assService->isValuesEqualToString($model, "CST-256");
        
        
        
        $data = 
        [
            'result' => $result
        ];
        return view('assessment')->with($data);
    }
}

