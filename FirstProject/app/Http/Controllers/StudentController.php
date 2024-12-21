<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentController;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use App\Models\studens;

use Maatwebsite\Excel\Facades\Excel;



class StudentController extends Controller
{
    function add(Request $request)
    {
        $student = new studens();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->password = $request->password;
        $student->city = $request->city;
        $student->save();
        if ($student) {
            return redirect('add');
        } else {
            return 'failed';
        }
    }
    function addd()
    {
        $studentdata = studens::all();
        return view('add-student', ['students' => $studentdata]);
    }
    function delete($id)
    {
        $isdeleted = studens::destroy(($id));
        if ($isdeleted) {
            return redirect('add');
        } else {
            return 'no deleted record';
        }
    }
    public function edit($id)
    {
        $student = studens::find($id);
        if ($student) {
            return response()->json(['data' => $student]);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

    public function editstudent(Request $request, $id)
    {
        $student = studens::find($id);
        if ($student) {
            $student->name = $request->name;
            $student->email = $request->email;
            $student->number = $request->number;
            $student->password = $request->password;
            $student->city = $request->city;
            if ($student->save()) {
                return response()->json(['success' => true]);
            }
        }
        return response()->json(['success' => false]);
    }

    // public function export(Request $request)
    // {
    //     dd($request);
    //     // $students = studens::all();
    //     $start_date = $request->start_date;
    //     $end_date = $request->end_date;


    //     $students = studens::whereDate('created_at', '>=', $start_date)
    //         ->whereDate('created_at', '<=', $end_date)
    //         ->get();
    //     $filename = 'excel.csv';
    //     $file = fopen($filename, 'w+');
    //     fputcsv($file, ['name', 'email', 'number', 'password', 'city']);
    //     foreach ($students as $student) {
    //         fputcsv($file, [$student->name, $student->email, $student->number, $student->password, $student->city]);

    //     }
    //     fclose($file);
    //     return response()->download($filename);


    // }
    
    public function index()
    {
        $students = studens::all();
        return view('add-student', compact('students'));
    }
    public function filter(Request $request)
    {
        $seg = $request->segments();
        // $request->segments();
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        // if($request->requestUri())
        if($start_date != '' && $end_date != '')
        {
            $students = studens::whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->get();
        }else{
            $students = studens::all();
            
        }
        // dd($request->export == '1');
        if ($request->export == '1') {
            
            
            $filename = 'excel.csv';
            $file = fopen($filename, 'w+');
            fputcsv($file, ['name', 'email', 'number', 'password', 'city']);
            foreach ($students as $student) {
                fputcsv($file, [$student->name, $student->email, $student->number, $student->password, $student->city]);

            }
            fclose($file);
            return response()->download($filename);
            
        }

         return view('add-student', compact('students', 'start_date', 'end_date'));

    }

    // public function import(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:xlsx,csv,xls', // Validate the file type
    //     ]);

    //     // Import the file
    //     Excel::import(new StudentsImport, $request->file('file'));

    //     // Redirect back with success message
    //     return redirect()->back()->with('success', 'Data imported successfully!');
    // }
}
