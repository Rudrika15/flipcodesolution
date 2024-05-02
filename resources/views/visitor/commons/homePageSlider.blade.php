<style>
  .video-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
  }

  #video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .overlay{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color: rgba(85, 85, 85, 0.5);
  }
 

  .text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 3em;
    text-align: center;
  }
  

.output {
  text-align:left;
  color: white;
  font-family: 'Source Code Pro', monospace;
  h1 {
    font-size:30px;
  }
}

/* Cursor Styling */

.cursor::after {
  content:'';
  display:inline-block;
  margin-left:3px;
  background-color:white;
  animation-name:blink;
  animation-duration:0.5s;
  animation-iteration-count: infinite;
}
h1.cursor::after {
  height:24px;
  width:13px;
}
p.cursor::after {
  height:13px;
  width:6px;
}

@media (max-width: 768px) {
  .output h1{
    font-size: 19px;
  }
  
  .text-overlay{
    position: absolute;
    top: 35%;
    left: 40%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 3em;
    text-align: center;
  }
}

@keyframes blink {
  0% {
    opacity:1;
  }
  49% {
    opacity:1;
  }
  50% {
    opacity:0;
  }
  100% {
    opacity:0;
  }
}
</style>
{{---------------------------------------------------------------- VIDEO DIV --------------------------------------------------------------- ---}}
<div class="video-container">
  <video id="video-background" autoplay muted loop>
    <source src="{{asset('img/1.mp4')}}" type="video/mp4">
    <!-- Add other video sources if needed -->
    Your browser does not support the video tag.
  </video>
  <div class="overlay"></div>
  <div class="text-overlay">
    <div class="container py-5">
      <div class="output" id="output">
        <h1 class="cursor"></h1>
        <p></p> 
      </div>
    </div>
  </div>
</div>
{{------------------------------------------------------------------ VIDEO DIV END---------------------------------------------------------- --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  // values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
var i = 0,
    a = 0,
    isBackspacing = false,
    isParagraph = false;

// Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
var textArray = [
  "Empowering Innovation, One Click at a Time. At flipcode solutions, we're dedicated to transforming your ideas into reality. we craft digital experiences that transcend expectations and drive success in an ever-evolving world.",
  "Inspiring Possibilities, Building Solutions. Discover the Difference with Flipcode solutions, where innovation meets excellence. Our passion for technology drives us to create transformative solutions that propel your business forward in the digital age.",
];

// Speed (in milliseconds) of typing.
var speedForward = 100, //Typing Speed
    speedWait = 1000, // Wait between typing and backspacing
    speedBetweenLines = 1000, //Wait between first and second lines
    speedBackspace = 25; //Backspace Speed

//Run the loop
typeWriter("output", textArray);

function typeWriter(id, ar) {
  var element = $("#" + id),
      aString = ar[a],
      eHeader = element.children("h1"), //Header element
      eParagraph = element.children("p"); //Subheader element
  
  // Determine if animation should be typing or backspacing
  if (!isBackspacing) {
    
    // If full string hasn't yet been typed out, continue typing
    if (i < aString.length) {
      
      // If character about to be typed is a pipe, switch to second line and continue.
      if (aString.charAt(i) == "|") {
        isParagraph = true;
        eHeader.removeClass("cursor");
        eParagraph.addClass("cursor");
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);
        
      // If character isn't a pipe, continue typing.
      } else {
        // Type header or subheader depending on whether pipe has been detected
        if (!isParagraph) {
          eHeader.text(eHeader.text() + aString.charAt(i));
        } else {
          eParagraph.text(eParagraph.text() + aString.charAt(i));
        }
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedForward);
      }
      
    // If full string has been typed, switch to backspace mode.
    } else if (i == aString.length) {
      
      isBackspacing = true;
      setTimeout(function(){ typeWriter(id, ar); }, speedWait);
      
    }
    
  // If backspacing is enabled
  } else {
    
    // If either the header or the paragraph still has text, continue backspacing
    if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
      
      // If paragraph still has text, continue erasing, otherwise switch to the header.
      if (eParagraph.text().length > 0) {
        eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
      } else if (eHeader.text().length > 0) {
        eParagraph.removeClass("cursor");
        eHeader.addClass("cursor");
        eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
      }
      setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);
    
    // If neither head or paragraph still has text, switch to next quote in array and start typing.
    } else { 
      
      isBackspacing = false;
      i = 0;
      isParagraph = false;
      a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
      setTimeout(function(){ typeWriter(id, ar); }, 50);
      
    }
  }
}
</script>
