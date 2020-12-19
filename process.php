<?php

require __DIR__.'/vendor/autoload.php';

use App\Uploader;

$token = (empty(getenv('API_TOKEN'))) ? null : getenv('API_TOKEN') ;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
if (empty($_FILES['file'])){
	echo "The file field should not be empty";
	die;
	}

$uploader = new Uploader($token);
$result = $uploader->decodeJson();
$bool = (empty($result->status)) ? 0 : $result->status ;
$status = ($bool) ? "<b class='text-green-400'> Success</b>" : "<b class='text-red-600 font-lg'> Error</b>";

if ($bool)
{
$filename = $result->data->file->metadata->name;
$filesize = $result->data->file->metadata->size->readable;
} else {
$errorCode = (empty($result->error->code)) ? 0 : $result->error->code ;

switch ($errorCode) {
  case "0":
    $error = "Authentication with API failed or Server error";
    break;
  case "10":
    $error = "File not provided";
    break;
  case "11":
    $error = "File is empty";
    break;
  case "12":
    $error = "File is invalid";
    break;
  case "20":
    $error = "Maximum upload per hour reached";
    break;
  case "21":
    $error = "Maximum upload per day reached";
    break;
  case "22":
    $error = "Maximum bandwidth per hour reached";
    break;
  case "23":
    $error = "Maximum bandwidth per day reached";
    break;
  case "30":
    $error = "File Type isn't allowed";
    break;
  case "31":
    $error = "Maximum size for file exceeded";
    break;
  case "32":
    $error = "The file was banned from server";
    break;
  case "40":
    $error = "Server failed to upload your file";
    break;
}

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <meta name="og:title" property="og:title" content="Anon File Uploader">
    <meta name="description" content="Simple PHP file uploader using Anon Files Api">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="/site.webmanifest">
    <!--deprecated color-->
    <style>
	.bg-teal-500 { background-color: #38b2ac; }
    .bg-teal-700 { background-color: #2c7a7b; }
    .border-teal-500 { border-color: #38b2ac; }
    .border-teal-700 { border-color: #2c7a7b; }
	</style>
    <script src="script.js"></script>
    </head>
    <body class="bg-gray-900">
    	<div class="w-full max-w">
  <div class="flex items-center border-b border-teal-500 py-2 ">
    <div class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none font-bold text-xl">Anon File Uploader</div>
    <a href="https://t.me/albinvar"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
      Contact
    </button></a>
    <a href="https://github.com/albinvar/anonfiles-uploader"><button class="flex-shrink-0 bg-gray-700 hover:bg-gray-600 border-teal-500 hover:border-teal-700 text-sm text-white text-sm py-1 px-2 rounded-full mx-3 heartbeat" type="button">
 	<i style="font-size: 27px;" class="fa fa-github"></i>
     </button></a>
  </div>
</div>

	     <div class="px-8 py-12">
    	     <div> 
    <div >
    <!--<img class="flip-in-hor-bottom flex flex-wrap content-center mx-auto" src="https://i.ibb.co/3cgk37y/ic-launcher.png" width="180" alt="ic-launcher">-->
    </div>
   <?php 
  if($bool) { ?>
 <div class="bg-gray-900 border-4 border-purple-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h1 class="text-center text-lg font-medium title-font mb-5 tracking-in-expand text-white"><?= $status ?></h1>
      <div class="relative mb-4">
        <p class="text-white text-center mb-2">Your file <strong><?= $filename ?> (<?= $filesize ?>)</strong> was uploaded successfully 🤗</p>
        <label for="file" class="leading-7 text-sm text-gray-600">Here is your link</label>
        <input type="text" id="link" placeholder="Here is your link" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3" value="<?= $result->data->file->url->full ?>" readonly>
      </div>
      
      <button name ="submit" class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-md mt-3 bounce-bottom" onclick="copyLink()">Copy to clipboard</button>
      <p class="text-xs text-center text-gray-500 mt-3">Please use low size files for uploading. Thank you ☺️</p>
    </div></div>
    <?php } else { ?>
     <div class="bg-gray-900 border-4 border-purple-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h1 class="text-center text-lg font-medium title-font mb-5 tracking-in-expand text-white"><?= $status ?></h1>
      <div class="relative mb-4">
        <p class="text-white text-center mb-2">Oops, uploading failed due to <strong><?= $error; ?></strong></p>
        
      </div>
      
      <button class="text-white bg-red-600 border-0 py-2 px-8 focus:outline-none hover:bg-red-700 rounded text-md mt-3 bounce-bottom" onclick="openLink('home')">Go Back</button>
      <p class="text-xs text-center text-gray-500 mt-3">Please use low size files for uploading. Thank you ☺️</p>
    </div></div>
    <?php } ?>
             <div></div>
    	</div>
    </body>
</html>
<?php
} else {
	echo "Not Found";
}
?>