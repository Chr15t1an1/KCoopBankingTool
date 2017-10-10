<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProcessController extends Controller
{
    // Returning Index page
public static function index()
    {
      return view('index');
    }



    // Process Excel Doc
public static function docProcess()
{
      $request = Request();
      $file = $request->file('fileToUpload');
	    $extension = File::extension($_FILES["fileToUpload"]["name"]);

// Check File Type
 if ( $extension !== "xls") {
   $message = 'Not the correct file type';
   return view('error',compact('message'));
 	}

#Get Current Time Stamp
$date = Carbon::now();

$dir = "uploads/";
$dir.=$date;
$dir = str_replace(' ', '-',$dir);
$dir = str_replace(':', '.',$dir);

#Create Directory to work from

$result = File::makeDirectory($dir, 0755,true);

$dir .= "/";


$filename = str_replace(" ","-",$_FILES["fileToUpload"]["name"]);

$target_file = $dir.basename($filename);

// Save file
 if (!move_uploaded_file($file, $target_file)) {
    $message ="move_uploaded_file failed";
    return view('error',compact('message'));
    }





$path = app_path()."/Py/process.py";




shell_exec('sudo python3 '.$path.' '.$dir.' '.basename($filename));

// return 'sudo python3 '.$path.' '.$dir.' '.basename($filename);
//
// if () {
//   return "True";
// }else {
//   return "false";
// }



//  return $path ;//'sudo python3 /var/www/KCoopBankingTool/app/Py/process.py'.' '.$dir.' '.basename($filename);
// shell_exec('sudo python3 /var/www/KCoopBankingTool/app/Py/process.py'.' '.$dir.' '.basename($filename));
//  return 'sudo python3 '.$path.' '.$dir.' '.basename($filename);




return view('thankyou');
// header("Location: /export");







    }

    public static function exports(){

      return view('thankyou');



    }





}
