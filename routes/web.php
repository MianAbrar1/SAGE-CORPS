<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
Route::post('/submit-application', function (Request $request) {
    // dd($request->all());
   try{
    $data = $request->except('_token');
    dd($data);
    $response = Http::withoutVerifying()->withHeaders([
        'Authorization' => 'Basic NTgyZmVlNDYyYWEzMWUzYjI1ZjdiYjkwN2MxMTU0ZWEtNA==' ,
        'Content-Type' => 'multipart/form-data',])->asForm()->post('https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004', $data);
      
    Log::info($response);
        return  $response;
    }catch(\Exception $e)
   {
	Log::info($e->getMessage());
   }
    
});

// headers: {
//     "Authorization": "Basic 3ab8dbf8179c7c3f8b1e8d17c0f71a46-4" 
//         },
// $response = Http::withoutVerifying()->withHeaders([
//     'Authorization' => 'key='.$server_key,
//     'Content-Type' => 'application/json',
// ])->post($url, $data);