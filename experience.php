<h2 id="expheader">
  Experience
</h2>

<section id="expsection">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">CHOP</a></li>
    <li><a href="#tabs-2">Party City</a></li>
    <li><a href="#tabs-3">Burlington Coat Factory</a></li>
    <li><a href="#tabs-4">US Vision</a></li>
    <li><a href="#tabs-5">Christmas Tree Shops</a></li>
  </ul>
  <div id="tabs-1">
    <h2 id="headers">Student Informatics Assistant</h2>
    <p id="paragraphs">Worked as a Student Informatics Assistant at CHOP from February 2020 to May 2020.
    I coded in Django, a Python based web development framework.</p>
  </div>
  <div id="tabs-2">
    <h2 id="headers">Temporary Sales Associate</h2>
    <p id="paragraphs">Worked as a temporary sales associate at Party City 
     from October 2019 to November 2019.</p> 
  </div>
  <div id="tabs-3">
    <h2 id="headers">Stocking Associate</h2>
    <p id="paragraphs">Worked as a sales associate from December 2018 to May 2019.</p>
  </div>
  <div id="tabs-4">
    <h2 id="headers">Box-Picking Associate</h2>
    <p id="paragraphs">Worked as a sales associate from April 2018 to October 2018.</p>
  </div>
  <div id="tabs-5">
    <h2 id="headers">Sales Associate</h2>
    <p id="paragraphs">Worked as a sales associate from June 2017 to September 2017.</p>
  </div>
</div>
<button id="explodebutton" class="w3-button w3-white w3-border">EXPLODE</button>
</section>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>

<script>
  $( "#explodebutton" ).click(function() {
    $( "#tabs" ).toggle( "explode" );
  });
</script>
