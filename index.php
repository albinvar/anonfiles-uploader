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
    	<img class="flip-in-hor-bottom flex flex-wrap content-center mx-auto" src="https://i.ibb.co/3cgk37y/ic-launcher.png" width="180" alt="ic-launcher">
    </div>
<form action="process.php" enctype="multipart/form-data" method="post">
 <div class="bg-gray-900 border-4 border-purple-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-center text-lg font-medium title-font mb-5 tracking-in-expand text-white">Anon File Uploader</h2>
      <div class="relative mb-4">
        <label for="file" class="leading-7 text-sm text-gray-600">Upload your file</label>
        <input type="file" id="file" name="file" placeholder="Type your text here" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3" required>
      </div>
      
      <button name ="submit" class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-md mt-6 bounce-bottom">Upload</button>
      <p class="text-xs text-center text-gray-500 mt-3">Please use simple text for conversation to prevent lagging. Thank you ☺️</p>
    </div></div>
    </form>
             <div></div>
    	</div>
    </body>
</html>
