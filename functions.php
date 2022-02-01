<?php


function getHomeUrl() {
          return 'https://informatik.th-brandenburg.de/~alsabaah/Medien/';
       // return 'http://localhost/Medien/';

}


function getMainStyleSheet() {
    return getHomeUrl() . 'assets/style.css';
}

function get_header() {
    require_once "header.php";
}

function get_footer () {
    require_once "footer.php";
}


function get_home_section() {  
     $html = '
    

    <section id="home">
        <div>  
            <img   class="picture" src="'.  getHomeUrl() . 'assets/images/65827.png' .'" alt="cafe"   />
            <div class="d-flex">
                    <div class"image"> 
                        <img src="'. getHomeUrl() .'assets/images/4735482.png">
                    </div>
                    <div class="text1"> 
                        <h2> Jonathan Swift </h2>
                        <p>„Die beste Methode, das Leben angenehm zu verbringen, 
                        ist, guten Kaffee zu trinken. Wenn man keinen haben kann, 
                        so soll man versuchen, so heiter und gelassen zu sein,
                         als hätte man guten Kaffee getrunken.“</p>
                    </div>
                </div>
                <div class="d-flex">
                  <div class"image"> 
                    <img  src="'. getHomeUrl() .'assets/images/coffee-2589761_1920.jpg">
                  </div>
                    <div class="text1"> 
                        <h2> arabisches Sprichtwort  </h2>
                        <p> Der Kaffee muss so süß sein, wie die Küsse eines Mädchens am ersten Tag,
                         so heiß, wie die Nächte in ihren Armen und schwarz, wie die Flüche der Mutter
                         , wenn sie es erfährt.
                        </p>
                    </div>
                  
                </div>
        </div>
    </section>
    
    

    ';
     return $html;
}

function get_about_section() {
    $html = '
    <section id="about">
    <div class="d-flex flex-about">
        <div class"image"> 
          <img src="'. getHomeUrl() .'assets/images/coffee-shop-1209863_1920.jpg">
        </div>
        <div class="text1 no-padding no-margin">
            <h2>coffeeshop Alsabaah ist Vielleicht das beste Coffeeshop in Potsdam. Zumindest sind wir Die Schönsten!</h2>
            <p>Alsabaah ist ein kleines Café mit einer gemütlichen, ungewungenen Atmosphäre in der schönsten Gegend von Potsdam.</p>
            <p>wir haben viele Stammkunde und Touristen. unsere Mitarbeiter sind freundlich und immer breit, das Menü zu erklären.</p>
            <p>Coffeeshop Alsabaah in Potsdam gibt seit mehr als 4 Jahren.</p>
            <p>
                Aufgrund der gleichbleibenden Qualität unserer Produkte u nd der entspannten Atmosphäre im Geschäft kommen unsere Kunde gerne zurück, um den köstlichen Kaffee, Die Getränke und das freundliche Lächeln zu genießen, mit dem sie
                bedint werden.
            </p>
            <p>
                Coffeeshop Alsabaah ist auf jeden Fall für alle zu empfehlen, Die einen Tag in Potsdam geplant haben. Kurz gesagt, wenn Sie in einer entspannten und doch gemütlichen Atmosphäre oder eine köstliche Tasse Kaffee trinken möchten,
                besuchen Sie das Alsabaah-Café.
            </p>
            <p>Sie können zu uns kommen für:</p>
            <ul class="liste">
            <li>Die echten Espresso und Kaffeesorten</li>
            <li> alkoholfreie Getränke</li>
            <li> Live-Fußball (wichtige Spiele)</li>
            <li> verschiedene Tees und frisches Gebäck ;-)</li>
            </ul>
        </div>
        
      </div>
    </section>
    ';
    return $html;
}

function get_menu_section() {
    

    $html = '
      <section id="menu">
          <div class="w-60 center flex justify-content-center">
             <img class="speisekarte" src="'. getHomeUrl() .'assets/images/logo.svg">
          </div>
          <div class="flex justify-content-between w-60 center">
          <div class="heisegetranke">
              <h2 class="no-padding">Heiß & Aromatisch... </h2>
             
              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Tasse Kaffee</h4>
                <h4>1.50€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Kännchen Kaffee</h4>
                <h4>3.50€</h4>
              </div>

             
              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Becher Kaffee</h4>
                <h4>2.20€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
              <h4>Schale Milchkaffee</h4>
              <h4>3.30€</h4>
            </div>

            <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
              <h4>Cappucino</h4>
              <h4>2.30€</h4>
            </div>

            <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
              <h4>Espresso</h4>
              <h4>1.50€</h4>
            </div>

            <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
            <h4>Espresso Dopio</h4>
            <h4>2.50€</h4>
          </div>

          <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
          <h4>Latte Macchiato</h4>
          <h4>2.80€</h4>
        </div>


        <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
        <h4>Chocociatto</h4>
        <h4>2.40€</h4>
      </div>


      <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
        <h4>Glas Tee</h4>
        <h4>1.80€</h4>
      </div>


          </div>
          <div class="kaltgetranke">
            <h2 class="no-padding"> Erfrischend & Kühl... 
            </h2>
            <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Cola, Fanta, Mezzo-Mix oder Sprite (0,2l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Fritz Cola (0,25l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Fritz Limo (0,25l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Mineralwasser (0,25l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Stilles Wasser (0,25l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Orangensaft (0,2l)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Apfelsaft (0,2l)</h4>
                <h4>1.90€</h4>
              </div>


              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Eiskaffee</h4>
                <h4>1.90€</h4>
              </div>


              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Eisschokolade</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Milchshake</h4>
                <h4>1.90€</h4>
              </div>


          </div>
          </div>

          <div class="flex justify-content-between w-60 center mt-3">
          <div class="Schnittchen">
              <h2 class="no-padding">Belegte Schnittchen
              vom Brötchen</h2>
             
              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Schinken</h4>
                <h4>2.60€</h4>
              </div>
              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Salami</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Ei</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Putenbrust</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Frikadelle</h4>
                <h4>2.30€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Räucherlachs</h4>
                <h4>3.00€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Gouda</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Frischkäse</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Mozzarella</h4>
                <h4>2.60€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Marmelade</h4>
                <h4>1.80€</h4>
              </div>


          </div>
          <div class="Alkoholische">
            <h2 class="no-padding"> Alkoholische Getränke... 
 
            </h2>
            <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Budweiser (0,3l Flasche)</h4>
                <h4>2.90€</h4>
              </div>
              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Krombacher (0,3l )</h4>
                <h4>2.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Alsterwasser (0,5l)</h4>
                <h4>2.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Weißwein (0,25l)</h4>
                <h4>3.50€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Rotwein (0,25l) </h4>
                <h4>3.50€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Piccolo Sekt (0,2l)</h4>
                <h4>4.10€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Korn (2cl)</h4>
                <h4>1.90€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Wodka (2cl)</h4>
                <h4>2.20€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Whisky-Cola</h4>
                <h4>3.40€</h4>
              </div>

              <div class="price-item flex justify-content-between w-60 mt-3 mb-3"> 
                <h4>Bacardi-Cola</h4>
                <h4>3.40€</h4>
              </div>


          </div>
          </div>
          <div class="customers-message">
          <div class="message">
            <p> Liebe Gäste,</p>
            <p> wir hoffen, dass mit unserem Angebot und
                Service bei Ihnen
                kein Wunsch offen bleibt. Sollte dies doch mal
                der Fall sein,
                sprechen Sie uns gerne an
            </p>
        </div>
        </div>
        <div class="pdf d-flex justify-content-center">
            <a href="'. getHomeUrl() .'assets/images/Web 1920 – 2.pdf" download>
                <button class="button1" type="button">Download</button>
            </a>
        </div>
      </section>
    ';
    return $html;
}

function get_gallerie_section() {
    $html = '
    <section id="gallerie">
    <!-- Container for the image gallery -->
    <div class="container">
    
      <!-- Full-width images with number text -->
      <div class="mySlides">
        <div class="numbertext">1 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/coffee-shop-1149155_1920.jpg"  style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">2 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/coffee-3120750_1920.jpg"  style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">3 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/cup.png"  style="width:100%">
      </div>
    
      <div class="mySlides">
        <div class="numbertext">4 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/coffee-3392168_1920.jpg"  style="width:100%">
      </div>
    
      <div class="mySlides">
        <div class="numbertext">5 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/coffee.png" style="width:100%">
      </div>
    
      <div class="mySlides">
        <div class="numbertext">6 / 8</div>
          <img src="'. getHomeUrl() .'assets/images/coffee-shop-1396031_1920.jpg" style="width:100%">
      </div>
       
      <div class="mySlides">
      <div class="numbertext">7 / 8</div>
        <img src="'. getHomeUrl() .'assets/images/coffee-984328_1920.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
        <img src="'. getHomeUrl() .'assets/images/coffee-206142_1920.jpg" style="width:100%">
    </div>


    

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
      <!-- Image text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>
     
      <!-- Thumbnail images -->
      <div class="row">
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-shop-1149155_1920.jpg" style="width:100%" onclick="currentSlide(1)" alt="das Laden">
        </div>
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-3120750_1920.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cappuccino">
        </div>
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/cup.png" style="width:100%" onclick="currentSlide(3)" alt="Kaffee to go">
        </div>
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-3392168_1920.jpg"  style="width:100%" onclick="currentSlide(4)" alt="Unsere Kafeebohne">
        </div>
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee.png" style="width:100%"; onclick="currentSlide(5)" alt="Unsere Kafeebohne zu verkaufen">
        </div>
        <div class="column">
          <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-shop-1396031_1920.jpg" style="width:100%" onclick="currentSlide(6)" alt="Tisch im cafe">
        </div>
        <div class="column">
        <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-984328_1920.jpg" style="width:100%" onclick="currentSlide(7)" alt="Tee">
      </div>
      <div class="column">
        <img class="demo cursor" src="'. getHomeUrl() .'assets/images/coffee-206142_1920.jpg" style="width:100%" onclick="currentSlide(8)" alt="Kaffee">
        </div>
        
      </div>
    </div>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

    </section>
    ';
    return $html;
}







