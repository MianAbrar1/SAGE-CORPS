<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form');
});
Route::get('/springsemesterform', function () {
    return view('spring_Semester_form');
});
Route::post('/submit-application', function (Request $request) {
   try{
       $data = $request->except('_token');

      if(!empty($request->file('resume'))){

         $file = $request->file('resume');
         // Specify the destination directory within the public folder
         $destinationPath = public_path('resumes');
         $filename=$file->move($destinationPath, $file->getClientOriginalName());
         $name=$file->getClientOriginalName();

               $data = array_merge($data, [
                  'resume_url_filename'=> $name,
                  'resume_url' => 'https://sagecorps.ibsservices.co/public/resumes/'.$name,
               ]);

      }
    $response = Http::withoutVerifying()->withHeaders([
      'Content-Type' => 'application/json',
      'Authorization' => 'Basic NTgyZmVlNDYyYWEzMWUzYjI1ZjdiYjkwN2MxMTU0ZWEtNA==', // Use HTTP Basic Authentication
    ])->post('https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004', $data);

    // Decode and return the API response
    Log::info($response->json());
        return  $response;
            // if (isset($responseData['success']) && $responseData['success'] === 'Candidate saved successfully') {
            //     // Redirect to the success view
            //    return redirect()->route('form.success');
            // } else {
            //     // Optionally, you can log the error or response details
            //     Log::error('Error submitting the form: ' . $response->status());

            //     // Return an error message or redirect to an error view
            //     return response()->json(['error' => 'Error submitting the form'], 500);
            // }
    }catch(\Exception $e)
   {
	Log::info($e->getMessage());
   }

});

Route::post('/submit-form', function (Request $request) {
    try{
        $data = $request->except('_token');
        if(!empty($request->file('resume'))){

            $file = $request->file('resume');
            // Specify the destination directory within the public folder
            $destinationPath = public_path('resumes');
            $filename=$file->move($destinationPath, $file->getClientOriginalName());
          $name=$file->getClientOriginalName();
                $data = array_merge($data, [
                    'resume_url_filename'=> $name,
                    'resume_url' => 'https://sagecorps.ibsservices.co/public/resumes/'.$name,
                ]);
                unset($data['resume']);
            }
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic NTgyZmVlNDYyYWEzMWUzYjI1ZjdiYjkwN2MxMTU0ZWEtNA==', // Use HTTP Basic Authentication
                ])->post('https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/4638329004', $data);

                dd($response);
     // Decode and return the API response
     Log::info($response->json());
         return  $response;
     }catch(\Exception $e)
    {
     Log::info($e->getMessage());
    }

 });

Route::get('/submitted',function(){
    return view('formSuccess');
});
