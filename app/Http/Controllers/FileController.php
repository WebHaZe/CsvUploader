<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parser\CsvManager;
use App\Enum\CsvRules;

class FileController extends Controller
{

    public function create()
    {
        return view('import');
    }

    public function store(Request $request)
    {
        $request->validate([
          'file' => 'required|mimes:csv,txt'
        ]);

        //get all file content
        $file = file($request->file->getRealPath());

        //validate entry titles from file
        $titles = str_getcsv($file[0], CsvRules::SEPARATOR, CsvRules::ENCLOSURE, CsvRules::ESCAPE);
        $isValid = CsvManager::titlesValidator($titles);
        if(!$isValid){
          return redirect('/')->withErrors('Content of file is not valid.');
        }

        //cut data on parts from file
        $data = array_slice($file, 1);
        $parts = (array_chunk($data, 500));

        foreach($parts as $index => $part){
          $fileName = resource_path('pending-files/'.date('y-m-d-H-i-s').$index.'.csv');

          file_put_contents($fileName, $part);
        }

        //run import to DB
        CsvManager::importToDb();

        session()->flash('status', 'Queued for importing');
        return redirect('/');
    }
}
