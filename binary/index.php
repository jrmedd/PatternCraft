<html>
<head>
  <title>Binary ASCII guide</title>
  <style>
  body {
    font-family: "Courier New", Courier, monospace;
    padding: 0;
    margin: 0;
  }
  div.section {
    margin: 0;
    padding: 1em;
    text-align: center;
  }
  img {
    max-width: 75%;
  }
  a {
    color: #009540;
  }
  hr {
    max-width: 66%;
  }
  </style>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-84161701-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body>
<div class="section">
  <h1>Binary ASCII</h1>
  <hr>
  <h2>by <a title="Link back to PatternCraft" href="http://patterncraft.co">PatternCraft</a></h2>
</div>
<div class="section">
  <p>Computers don’t speak our language they speak Binary. In fact computers are quite stupid, they only understand 0s and 1s.</p>
  <p>Inside computers are billions of tiny circuits with switches that are activated by electronic signals. 0s and 1s turn these
    switches on and off</p>
  <p>0 = off<br>
    1 = on</p>
</div>
<div class="section">
  <p>In 1801 Joseph Marie Jacquard invented a power loom that could weave a pattern by reading the holes on loops of punchcards.
    Later, Charles Babbage, the inventor of the Analytic Engine, saw that these patterns of holes could be used to represent data
    and a way of storing computer numbers. So data processing using binary code is a direct result of the punched holes used to
    program weaving patterns on The Jacquard Loom.</p>
  <p>In the early days of computing, data was entered into a computer by feeding punchcards or punched tape into it. The holes in
    these cards represent 1s while no hole is a 0.</p>
</div>
<div class="section">
  <p>Everything on computers is stored in binary form and it is used to encode and store all formats of data from numbers and text
    to images and sound.</p>
  <p>Every number, letter and symbol on your keyboard is converted into binary so that the computer can understand it. When you
     press a key on the keyboard a binary number is generated. The numbers is called the character code. A collection of character
      codes is a character set. ASCII is a character set made up of upper and lower case letters, punctuations marks, symbols and
      numbers.</p>
</div>
<div class="section">
  <p>The following table shows the binary code for every upper and lower case letter</p>
  <a title="Link to ASCII table" href="https://patterncraft.co/images/ascii-table.jpg"><img alt="ASCII table" src="https://patterncraft.co/images/ascii-table.jpg" /></a>
</div>
<div class="section">
  <h2>Your Turn</h2>
  <p>Try encoding your name in binary using the table above. For example David would be translated this way:</p>
  <p><strong>D</strong>   01000100 <br>
    <strong>a</strong>   01100001 <br>
    <strong>v</strong>   01110110 <br>
    <strong>i</strong>   01101001 <br>
    <strong>d</strong>   01100100
  </p>
</div>
<div class="section">
  <p><strong><a title="Link back to PatternCraft" href="https://patterncraft.co">Return to PatternCraft.co</a></strong></p>
</div>
<!--div class="section">
  <h2>Win a PatternCraft Reader</h2>
  <p>There is a secret message hidden on the homepage of our website. See if you can decode it and tweet your answer
    to <a href="http://twitter.com/PatternCraftUK">@PatternCraftUK</a> using the hashtag <strong>#PCAscii</strong>.
    A Winner will be  announced at the end of April 2017. Good Luck!</p>
    <hr>
</div-->
<script src="https://patterncraft.co/js/jquery.min.js"></script>
<script>
  $('.section').each(function(index, value){
    if (index%2 == 1){
      $(this).css('background-color', "#009540");
      $(this).css('color', "#FFFFFF");
    }
    else {
      $(this).css('background-color', "#FFFFFF");
      $(this).css('color', "#000000");
    }
  });
</script>
</body>
</html>
