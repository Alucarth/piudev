<?php

namespace App\Http\Controllers;
use App\Models\Postulation;
use App\Models\FormField;
use Illuminate\Http\Request;
use Log;
class PostulationController extends Controller
{
    //
    public function lista_postulantes()
    {
        // $postulations = Postulation::where('person_id','=',1541)->get();
        // $postulations = Postulation::where('person_id','=',1550)->get();
        
        // $postulations = Postulation::where('person_id','=',654)->get();
        $postulations = Postulation::where('person_id','=',1565)->get();
        $response=[];
        foreach($postulations as $postulation)
        {
            $data = json_decode($postulation->data);
            // array_push($response,$data);
            $array = ( array) $data;
            // $keys = array_keys($array);
            $new_data = array();
            foreach($array as $key => $value)
            {
                $field = FormField::where('unique_fieldname','=',$key)->first();
                array_push($new_data,(object) array($field->label => $value));
                // Log::info( $field->label);
                // Log::info( $value);

            }
            array_push($response, $new_data);
            // $new_data = array();

          
        }

        return $response;

    }
}
