<section>
    <p id="intro" class="ml2">
        <b>Hi my name is Marco.</b> 
        <br>
        </br>
        I am a student at Rowan University
        that specializes in website development.<p>
        <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
        </script>   
        <br>
        </br>
        <a id="scrolldown" class="scrollLink" href="#contactheader"><button id="contactmebutton" class="w3-button w3-white w3-border">CONTACT ME</button></a>
          
         <!-- Add class "blur-effect" to body on scroll --> 
        <!-- Script -->
        <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
        <script type="text/javascript">
        // Anchor Link Script
         $(document).ready(function(){
         $( "a.scrollLink" ).click(function( event ) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        });
 });
</script>
</section>

