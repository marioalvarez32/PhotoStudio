<script>
        var element = $('.header') ;
        var win = $(window);
        var initialElementHeight = element.height();
        var lastElementHeight = 0;
        
        //console.log("Header Height: "+ $(".header").height);
        
        win.on('scroll',function(){
            percentageSeen();            
        });
        $('img').on('dragstart', function(event) { event.preventDefault(); });
        
        
        function percentageSeen(){
            var viewportHeight = $(window).height(); 
            var scrollTop = win.scrollTop();
            var currElementHeight = element.height(); 
            var newHeight = initialElementHeight - scrollTop;
            var y = window.pageYOffset;
            var headerHeight = element.height();
            
            
            var viewX= initialElementHeight * .60;
            console.log("---------"+viewX+"---------");

            if(newHeight > viewX){
                $('#nav-background').css("opacity","0");
                $(".nav-content").css("opacity","0");
                if(lastElementHeight >= newHeight){
                    $('.header').css('height',newHeight);
                    $('#logo').css('opacity','.9');
                }else{
                    $('.header').css('height',newHeight);
                    $('#logo').css('opacity','1');
                }
                //console.log("Height: "+document.documentElement.scrollHeight);
                //console.log("Header Height: "+ headerHeight);
                lastElementHeight = newHeight;
            }else{
                $('#nav-background').css("opacity","1");
                $(".nav-content").css("opacity","1");
                $('#nav-background').css("")
            }
            console.log("\nTotal Height: "+document.documentElement.scrollHeight);
            //console.log("View port: "+viewportHeight);
            console.log("Scroll to top: "+scrollTop);
            console.log("Offset Y: "+y);
            console.log("New height: "+newHeight);
        }
    </script> 
</html>