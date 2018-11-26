<button id="myBtn" class="btn btn-outline-dark scroll-top" title="Go to top"> <i class="fa fa-arrow-up"></i> </button>
    <script>
            // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        $(".scroll-top").click(function() {
        $('html,body').animate({
            scrollTop: $(".view").offset().top},
            'slow');
        });
    </script>