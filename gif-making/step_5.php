<?php

require '../vendor/autoload.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="js/app.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="public/images/garter.png"></a>
  <img id="imgRight" src="public/images/iDEA_Coral.png">
</header>
  <main>
    <br>
    <br>
    <div class="container">
     <h2 class="badgeStepTitle">Inside<br>Giffy</h2>
     <ul class="collapsible popout" data-collapsible="accordion">
       <li>
         <div class="collapsible-header"><i class="material-icons">view_list</i>What does Giffy consist of? Click to find out.</div>
         <div class="collapsible-body">
          <div class="row">
            <div class="col s12 l6"><img src="public/images/gifs/GIF_Character_Inside.gif"/></div>
            <div class="row">
              <div class="col s12 l6">
                <p>Giffy consists of bytes. These bytes consist of 8 bits. Bits consist of 0s and 1s. These are what we call <strong>binary</strong> numbers. This is code that the computer can make sense of. They make little sense to us humans, so we have to convert them into numbers and letters<!-- hexidecimal and decimal numbers -->.</p></div>
                <div class="col s12 l6"><img src="public/images/gifs/GIF_Character_Closer.gif"/></div>
                <div class="col s12 l6">
                 <p>In binary, 01000111 is the hexidecimal number 47, and represents the letter 'G'. So, for example the first 18 bits in GIFFY are the hexidemical numbers 47, 49, and 46. They represent the word "GIF." The process of conversions enable GIFs to be rendered on screens. This process also uses an indexed and in-built colour table, which the decoder draws on.
                 </p>
               </div>
             </div>
           </div>
         </div>
       </li>
       <li>
         <div class="collapsible-header"><i class="material-icons">view_list</i>What makes Giffy loop? Click to find out.</div>
         <div class="collapsible-body">
          <div class="row">
            <div class="col s12"><img style="display: block; margin:auto" src="./../public/images/gifs/GIF_Character_Introduction_290.gif"/></div>
            <!-- <div class="col s6 l6"><img src="./../public/images/gifs/GIF_Character_Inside.gif"/></div> -->
            <div class="col s12 s12">
              <p>Giffy also consists of 11 parts that work together to render it on screen. One of the 11 parts is called the "<strong>application extension block</strong>". It gives GIFs the power to loop animation continously.
              The graphic extension bloc, another part of Giffy, has the power to stack images and set the timing for the animation using the function "delay time."</p>
            </div>
          </div>
        </div>
      </li>
      <li>
      <div class="collapsible-header"><i class="material-icons">view_list</i>How is Giffy compressed? Click to find out.</div>
       <div class="collapsible-body">
         <div class="row">
           <div class="col s12 m4 l4"><img src="public/images/gifs/Compress_Character_GIF.gif"/></div>
           <div class="col s12 m8 l8">

             <p>The GIF image file format employs the <strong>Lempel-Ziv-Welch (LZW) compression technique</strong>, a <strong>lossless compression technique</strong> to preserve the quality of the image.</p>

             <p>Compression means reducing file sizes and organising the data [which consists of bits and bytes] in a more efficient and organised way. Lossless compression ensures that we do not lose any bits and bytes in the process of reducing our file size. We do not want to slice off any data -- for example -- some of the pixels in Giffy's hands. The reason we want to compress our file sizes is because it's <!-- it's easier and  -->quicker to store, stream, load and download our files.</p>
           </div>
         </div>
         <div class="row">
           <div class="col s12 m8 l8">
             <p>This way, we can preserve the quality of the image when we decompress the compressed image file. The process of reducing a file size is similar to packing your bag. You can simply throw all your books, folders, pencils, and a lunchbox into your bag without any guarantee that they will all fit in. You will have to remove one or two items to close the bag. Or you can plan and organise your bag using the bag's internal parts and dividers so that all of your stuff is neatly organised and ready to be retrieved when required.</p></div>
             <div class="col s12 m4 l4"><img src="public/images/gifs/Decompress_Character_GIF.gif"/>
             </div>
           </div>
         </div>
         <!-- <div class="collapsible-body"><span>Specifically, the compression technique is called Lempel-Ziv-Welch (LZW) technique. It is a lossless compression algorithm, a series of instructions that allows the very bits and bytes of images and files to fit into ever smaller packages (that's the compression part) without slicing off any data in the process(that's the lossless part).</span>   -->

         <!--      However, GIFs store image data using indexed colour, meaning a standard GIF image can include a maximum of 256 colours. It includes support for transparent backgrounds and image metadata. It also supports animations by allowing a stream of images to be stored in a single file. The 89a format also includes support for animation delays. -->
       </li>
     </ul>
    <!-- <div class="badgeDescriptionBox">
      <h2 class="badgeStepTitle">GIFs<br>Under the bonnet</h2>
      <p>Technically speaking, GIF is an image file format that uses lossless compression technique to prevent loss of quality of the image</p>
      <p>Specifically, the compression technique is called Lempel-Ziv-Welch (LZW) technique. It is a lossless compression algorithm, a series of instructions that allows the very bits and bytes of images and files to fit into ever smaller packages (that's the compression part) without slicing off any data in the process(that's the lossless part).</p>
      <p>However, GIFs store image data using indexed colour, meaning a standard GIF image can include a maximum of 256 colours. It includes support for transparent backgrounds and image metadata. It also supports animations by allowing a stream of images to be stored in a single file. The 89a format also includes support for animation delays.</p>
      <p>Since GIFs can only contain 256 colours, they are not ideal for storing digital photos, such as those captured with a digital camera.</p>
      <p>What makes GIFs animate? Graphic Control Extension</p>
    </div>
  </div> -->
  <br>
  <br>
</div>
<div class="row">
  <div class="col s12">
   <a id="step6Button" class="btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse buttonCentre"><i class="material-icons">trending_flat</i></a>
 </div>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 20%;">
    </div>
  </div>
</footer>
</body>
</html>