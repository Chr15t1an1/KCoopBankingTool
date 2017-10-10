<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProcessController extends Controller
{
    //

    public static function index(){

      return view('index');



    }





    public static function docProcess()


    {


      $request = Request();//->all();

      $file = $request->file('fileToUpload');
	  $extension = File::extension($_FILES["fileToUpload"]["name"]);

 if ( $extension !== "xls") {


   return '<h1>If its not an Excel file from the coop, we dont want it</h1><a href="/"><p>Go back where I came from</p></a>';
 	}



#Get Current Time Stamp
$date = Carbon::now();
//$date = $date->getTimestamp();
$dir = "uploads/";
$dir.=$date;
$dir = str_replace(' ', '-',$dir);
$dir = str_replace(':', '.',$dir);
#Create Directory to work from
//mkdir($dir, 0777);
$result = File::makeDirectory($dir, 0755);

$dir .= "/";

$filename = str_replace(" ","-",$_FILES["fileToUpload"]["name"]);
$target_file = $dir.basename($filename);

 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

	 //return $dir.' '.basename($filename);

	shell_exec('sudo python3 /var/www/KCoopBankingTool/app/Py/process.py'.' '.$dir.' '.basename($filename));

header("Location: /export");


    } else {
        echo "Sorry, there was an error uploading your file.";
    }



return $file;

    }

    public static function exports(){

      return view('thankyou');



    }





}
