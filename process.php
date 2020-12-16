<?php

require __DIR__.'/vendor/autoload.php';

use App\Uploader;

//$token = "Your API Token";


if($_SERVER['REQUEST_METHOD'] == "POST")
{

$uploader = new Uploader($token);
$result = $uploader->decodeJson();
if ($result->status == 1)
{
$status = ($result->status == 1 ) ? "<b class='text-green-400'> Success</b>" : "<b class='text-red-600 font-lg'> Error</b>";
$filename = $result->data->file->metadata->name;
$filesize = $result->data->file->metadata->size->readable;
} elseif($result->status == 0) {

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <meta name="og:title" property="og:title" content="QR Code Generator">
    <meta name="description" content="Simple QR code generator created using php.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="/site.webmanifest">
    </head>
    <body class="bg-gray-900">
    	<div class="w-full max-w">
  <div class="flex items-center border-b border-teal-500 py-2 ">
    <div class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none font-bold text-xl">Anon File Uploader</div>
    <a href="mailto:albinmelazhakathu@gmail.com"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
      Contact
    </button></a>
    <a href="https://github.com/albinvar/simple-qr-generator.git"><button class="flex-shrink-0 bg-gray-700 hover:bg-gray-600 border-teal-500 hover:border-teal-700 text-sm text-white text-sm py-1 px-2 rounded-full mx-3 heartbeat" type="button">
 	<i style="font-size: 27px;" class="fa fa-github"></i>
     </button></a>
  </div>
</div>

	     <div class="px-8 py-12">
    	     <div> 
    <div >
    <!--<img class="flip-in-hor-bottom flex flex-wrap content-center mx-auto" src="https://i.ibb.co/3cgk37y/ic-launcher.png" width="180" alt="ic-launcher">-->
    </div>
 <div class="bg-gray-900 border-4 border-purple-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h1 class="text-center text-lg font-medium title-font mb-5 tracking-in-expand text-white"><?= $status ?></h1>
      <div class="relative mb-4">
        <p class="text-white text-center mb-2">Your file <strong><?= $filename ?> (<?= $filesize ?>)</strong> was uploaded successfully 🤗</p>
        <label for="file" class="leading-7 text-sm text-gray-600">Here is your link</label>
        <input type="text" id="link" placeholder="Here is your link" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3" value="<?= $result->data->file->url->full ?>" readonly>
      </div>
      
      <button name ="submit" class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-md mt-3 bounce-bottom">Copy to clipboard</button>
      <p class="text-xs text-center text-gray-500 mt-3">Please use low size files for uploading. Thank you ☺️</p>
    </div></div>
    
             <div></div>
    	</div>
    </body>
</html>
<?php
} else {
	echo "Not Found";
}
?>