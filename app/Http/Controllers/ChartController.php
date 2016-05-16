<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

class ChartController extends Controller
 

{   
    public function statForm(){
        return view('doctor/charts/statform');
    }
     public function backToStat(){
        return view('statistics');
    }
    public function display(){
        //get selected date range
        $inputs=Input::all();
        $fromDate= $inputs['fromDatePicker'];
        $toDate=$inputs['toDatePicker']; //where('status', '<', 5)
        // get an array of objects grouped by the created date 	
        $createddate = \App\patientVisit::where('created_at','<=',$toDate )->where('created_at','>=',$fromDate)->groupBy ( 'created_at')->get ();
        //create new array that contains the dates of grouped array
        $rawDates=  [];
        foreach ( $createddate as $grouped_date ){   
        array_push ( $rawDates, $grouped_date->created_at->toDateString() );
//        echo $grouped_date->created_at->toDateString();
        }
//        remove duplicates made from differnt times in the same day
        $dates= [];
        foreach ($rawDates as $rawdate){
            if (!in_array($rawdate, $dates)){
                array_push($dates, $rawdate);
            }
        }
        //Create  array contains the no of patient visits per date
        $dataArray=[];
        foreach($dates as $date){
          $recordsForDate = \App\patientVisit::where('created_at', 'LIKE', '%'.$date.'%')->get();
          $noOfpateints=  count($recordsForDate);
          array_push($dataArray,$noOfpateints);
        }
        if(count($dataArray)==0) {
            return view('doctor/charts/statform');
        }
        else{
        // set tick positions to dynamically change the graph scalling
        $tickPositions=[];   
        for($i=0 ; $i<max($dataArray)+4 ; $i++){ array_push($tickPositions, $i);}
        // creating array to pass values to jscript function
        //compare ith a raw js function() for high chart to understand ho the data is passed
      $arrayChart["chart"] = array("type" => "line"); // passes an array since there are many attributes, only one is defined here
    $arrayChart["title"] = array("text" => "Patient Visits");
    $arrayChart["xAxis"] = array("categories" => $dates,"title" => array("text" => "Date")); // two attributes passed through the array title is again an array itself since it also contain some attributes
    $arrayChart["yAxis"] = array("title" => array("text" => "No of Patients"),"tickPositions"=>$tickPositions);
    $arrayChart["series"] = [
        array("name" => "Patients", "data" => $dataArray)];
      //pass the array to the html file and display   
    return view('doctor.charts.patientsVisitsChart' ,compact('arrayChart'));
        }
}}