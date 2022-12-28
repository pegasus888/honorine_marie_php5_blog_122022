Image Slider Maker README
=========================
ImageSliderMaker.com


Using in your website
---------------------

Please first make sure you have fully extracted the contents of the zip file.
In Windows, right-click on imageslidermaker.zip and select Extract All...

To get your slider working in your web page, you must add
my-slider.css, ism-2.2.min.js and the slide images to your project
directory and paste the markup (included below) into your HTML.

The directory structure of this package:

  imageslidermaker/
    README.txt
    example.html
    ism/
      css/
        my-slider.css
      js/
        ism-2.2.min.js
      image/
        slides/
          statue-of-liberty-267948_1280.jpg
          woodland-656969_1280.jpg
          budapest-655216_1280.jpg

For a working example, open example.html in your web browser or
follow the instructions below to integrate the slider into your
project.


Step by step instructions
-------------------------

1. Paste the following into the head of your HTML file:

<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>


2. Paste this into the body of your HTML file (at the location where:
   you would like your slider to appear in the page):

<div class="ism-slider" data-transition_type="fade" data-play_type="once" data-image_fx="zoompan" id="my-slider">
  <ol>
    <li>
    <a href="" target="_blank">
      <img src="ism/image/slides/statue-of-liberty-267948_1280.jpg">
      <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>My slide caption text</a>
    </a>
    </li>
    <li>
    <a href="" target="_blank">
      <img src="ism/image/slides/woodland-656969_1280.jpg">
      <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>My slide caption text</a>
    </a>
    </li>
    <li>
    <a href="" target="_blank">
      <img src="ism/image/slides/budapest-655216_1280.jpg">
      <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>My slide caption text</a>
    </a>
    </li>
  </ol>
</div>
<p class="ism-badge" id="my-slider-ism-badge"><a class="ism-link" href="http://imageslidermaker.com" rel="nofollow">generated with ISM</a></p>


3. Copy the ism/ directory into the root directory of your project.

   The css, js and image paths are relative, meaning the ism/
   directory should be in the same directory (path) as your HTML
   file containing the slider.


