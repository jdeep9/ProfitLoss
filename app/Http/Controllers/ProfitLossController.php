<?php

namespace App\Http\Controllers;

use App\Imports\ProfitLossImport;
use App\ProfitLoss;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ProfitLossController extends Controller
{
    //
    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        // dd($request);
        //    Excel::import(new ProfitLossImport,$request->file);
        //    return "Records are Imported successfully!";
        // $file = $request->file('uploaded_file');
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) {
                $j++;
                try {
                    // DB::beginTransaction();
                    ProfitLoss::create([
                        'month_year' => $importData[0],
                        'Qty' => $importData[1],
                        'Total' => $importData[2],
                        'Rate' => $importData[3],
                        'Type' => $importData[4],
                    ]);
                    // DB::commit();
                } catch (\Exception $e) {
                    dd($e->getMessage());
                    //throw $th;
                    // DB::rollBack();
                }
            }
            // return response()->json([
            // 'message' => "$j records successfully uploaded"
            // ]);
            return "$j Records are Imported successfully!";
        } else {
            //no file was uploaded
            // throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
            $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
            }
        } else {
            throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
        }
    }

    public function profitLossScript(){
        $data = ProfitLoss::get();
        $array = $data->toArray();
        $year = collect(array_unique(array_column($array,'month_year')));
        foreach($data as $k => $v){
            // $sell = collect();

            if($v['Type'] == 1){
                $buy[] = $data[$k];
            }

            if($v['Type'] == 2){
                $sell[] = $data[$k];
                // dd($sell);
            }
            // $monthYear[]=
        }
        $arr1 = array_column($buy,'Qty');
        $arr2 = array_column($sell,'Qty');
        $stock = array_map(function ($x, $y) { return $x-$y; } , $arr1, $arr2);

        $arr3 = array_column($buy,'Total');
        $arr4 = array_column($sell,'Total');
        $proloss = array_map(function ($a, $b) { return $a-$b; } , $arr3, $arr4);


        return view('profit-loss',compact(['sell','buy','year','stock','proloss']));
    }
}
