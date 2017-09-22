<div class="wrapper">
    <?php
        include 'partials/step/_intro.php';
    ?>

    <div class="steps">
        <div class="step-1">

            <?php
                include 'partials/step/_step1.php';
            ?>

        </div>
        <div class="step-2">

            <?php
                include 'partials/step/_step2.php';
            ?>

        </div>
        <div class="step-3">

            <?php
                include 'partials/step/_step3.php';
            ?>

        </div>
        <div class="step-4">

           <?php
                include 'partials/step/_step4.php';
            ?>

        </div>
        <div class="step-5">

            <?php
                include 'partials/step/_step5.php';
            ?>

        </div>
        <div class="step-6">

            <?php
                include 'partials/step/_step6.php';
            ?>

        </div>
        <div class="step-7">
            
            <?php
                include 'partials/step/_complete.php';
            ?>

        </div>
        <div class="step-8">

            <?php
                include 'partials/step/_step7.php';
            ?>

        </div>
        <div class="step-9">

            <?php
                include 'partials/step/_end.php';
            ?>

        </div>
    </div>
</div>

<div class="inspector">
    <a id="inspectorUpDown" class="active" href="#">
        <i class="ionic ion-android-arrow-down"></i>
        <i class="ionic ion-android-arrow-up hidden"></i>
    </a>
  <div class="inspector-tab">
     
      <ul class="cf">
          <li>
              <button id="format" class="format-code btn-code">Format code</button>
          </li>
          <li id="inspectorText">
                Click <strong>Format code</strong> so the HTML code is easier to read and we can find the error.
          </li>
          <li>
             <button id="step2go" class="btn-code hidden">NEXT</button> <!-- next-go -->
          </li>
      </ul>
  </div>
  <div class="inspector-wrapper cf">
    <div class="inspector-col">
    <span class="type-code">HTML</span>
<pre class="html">
<code id="html-code">
<div class="html-inline active-html"><span class="html-gray">&lt;</span><span class="html-pink">div</span> <span class="html-orange">class</span><span class="html-gray">="</span><span class="html-blue">theme-hero</span><span class="html-gray">"</span><span class="html-gray">&gt;</span></div><div class="html-inline html-disable"><span class="html-gray">&lt;</span><span class="html-pink">div</span> <span class="html-orange">class</span><span class="html-gray">="</span><span class="html-blue">theme-content</span><span class="html-gray">"</span><span class="html-gray">&gt;</span></div><div class="html-inline active-html"><span class="html-gray">&lt;</span><span class="html-pink">div</span> <span class="html-orange">class</span><span class="html-gray">="</span><span class="html-blue">theme-content_middle</span><span class="html-gray">"</span><span class="html-gray">&gt;</span></div><div class="html-inline active-html"><span class="html-gray">&lt;</span><span class="html-pink">h1</span><span class="html-gray">&gt;</span>Landing cool<span class="html-gray">&lt;</span><span class="html-pink">/h1</span><span class="html-gray">&gt;</span></div><div class="html-inline html-disable"><span class="html-gray">&lt;</span><span class="html-pink">p</span><span class="html-gray">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="html-gray">&lt;</span><span class="html-pink">/p</span><span class="html-gray">&gt;</span></div><div class="html-inline active-html"><span class="html-gray">&lt;</span><span class="html-pink">button</span> <span class="html-orange">class</span><span class="html-gray">="</span><span class="html-blue"><input id="btnClass" class="input-code" type="text" placeholder="here class" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/></span><span class="html-gray">"</span><span class="html-gray">&gt;</span>HEY<span class="html-gray">&lt;</span><span class="html-pink">/button</span><span class="html-gray">&gt;</span></div><div class="html-inline"><span class="html-gray">&lt;</span><span class="html-pink">/div</span><span class="html-gray">&gt;</span></div><div class="html-inline html-disable"><span class="html-gray">&lt;</span><span class="html-pink">/div</span><span class="html-gray">&gt;</span></div><div class="html-inline"><span class="html-gray">&lt;</span><span class="html-pink">/div</span><span class="html-gray">&gt;</span></div>
</code>
</pre>
    </div>
    <div class="inspector-col">
    <span class="type-code">CSS</span>
<pre id="wrapperInspector" class="css">
<code id="cssCode-1">
<span><span class="css-gray">/* background-image: starry-night.jpg */</span></span>

<span><span class="css-black">.theme-hero {</span></span>
  <span><span class="css-red">background-image:</span> <span class="css-blue">url(<input id="cssBg" class="input-code" type="text" placeholder="path of the image" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/>);</span></span>
  <span class="css-disable"><span class="css-red">background-position:</span> <span class="css-blue">center center;</span></span>
  <span class="css-disable"><span class="css-red">background-size:</span> <span class="css-blue">cover;</span></span>
  <span class="css-disable"><span class="css-red">background-repeat:</span> <span class="css-blue">no-repeat;</span></span>
<span><span class="css-black">}</span></span>
</code>
<code id="cssCode-2">
<span><span class="css-gray">/* color: white; */</span></span>
<span><span class="css-gray">/* text-align: center; */</span></span>

<span><span class="css-black">.theme-content_middle {</span></span>
  <span><span class="css-red">color:</span> <span class="css-blue"><input id="inpColor" class="input-code" type="text" placeholder="Text color" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/>;</span></span>
  <span><span class="css-red">text-align:</span> <span class="css-blue"><input id="inpAlign" class="input-code" type="text" placeholder="Text center" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/>;</span></span>
<span><span class="css-black">}</span></span>
</code>
<code id="cssCode-3">
<span><span class="css-gray">/* font-family: 'Amatic'; */</span></span>
<span><span class="css-gray">/* font-size: 65px; */</span></span>
<span><span class="css-gray">/* "px" or pixel is a unit of measurement */</span></span>

<span><span class="css-black">.theme-content_middle h1 {</span></span>
  <span><span class="css-red">font-family:</span> <span class="css-blue"><input id="inpFamily" class="input-code" type="text" placeholder="here font family" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/>;</span></span>
  <span><span class="css-red">font-size:</span> <span class="css-blue"><input id="inpFont" class="input-code" type="text" placeholder="Text size" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"/>;</span></span>
<span><span class="css-black">}</span></span>
</code>
<code id="cssCode-4">
<span><span class="css-gray">/* This Class you must use the Button */</span></span>

<span><span class="css-black">.btn-rounded {</span></span>
  <span class="css-disable"><span class="css-red">background-color:</span> <span class="css-black">transparent;</span></span>
  <span class="css-disable"><span class="css-red">border:</span> <span class="css-black">2px solid #fff;</span></span>
  <span class="css-disable"><span class="css-red">border-radius:</span> <span class="css-black">50%;</span></span>
  <span class="css-disable"><span class="css-red">color:</span> <span class="css-black">#ffffff;</span></span>
  <span class="css-disable"><span class="css-red">padding:</span> <span class="css-black">10px 40px;</span></span>
  <span class="css-disable"><span class="css-red">margin:</span> <span class="css-black">0;</span></span>
  <span class="css-disable"><span class="css-red">font-size:</span> <span class="css-black">24px;</span></span>
  <span class="css-disable"><span class="css-red">vertical-align:</span> <span class="css-black">middle;</span></span>
<span><span class="css-black">}</span></span>
</code>
</pre>
    </div>
  </div>
</div>


<div class="info">
    <div id="infoContent" class="info-content">
        <!-- data.js -->
    </div>
    <a id="info" href="javascript:void(0)">
       <ul>
           <li>
               <i class="icon ion-help"></i>
           </li>
           <li>
               <i class="ion-chevron-down"></i>
           </li>
       </ul>

    </a>
    <div id="infoBtnNext" class="info-btn-next hidden">
        <button class="next-go btn">NEXT</button>
    </div>
    
    <div id="forumBtnNext" class="forum-btn-next hidden">
        <button class="next-go-link btn">NEXT</button>
    </div>
    
</div>


<div class="movil">
    <ul class="movil-list cf">
        <li>
            <a href="#" data-wsize="375" data-hsize="667">
                <i class="ion ion-iphone"></i>
            </a>
        </li>
        <li>
            <a href="#" data-wsize="600" data-hsize="960">
                <i class="ion ion-ipad"></i>
            </a>
        </li>
        <li>
            <a href="#" data-wsize="1024" data-hsize="768" style="-webkit-transform: rotate(90deg); transform: rotate(90deg);">
                <i class="ion ion-ipad"></i>
            </a>
        </li>
        <li>
            <button id="movilBtn" class="next-go btn disabled">NEXT</button>
        </li>
    </ul>
</div>
