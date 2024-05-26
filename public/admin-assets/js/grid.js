$(document).ready(function(){

    function removeAllToggleClasses()
    {
        $('#sidebar-toggle-hide').removeClass('d-md-inline');
        $('#sidebar-toggle-hide').removeClass('d-none');
        $('#sidebar-toggle-show').removeClass('d-inline');
        $('#sidebar-toggle-show').removeClass('d-md-none');
    }

    $('#sidebar-toggle-hide').click(function(){
        $('#sidebar').fadeOut();
        $('#main-body').animate({width: "100%"}, 300);
        setTimeout(function(){
            removeAllToggleClasses();
            $('#sidebar-toggle-hide').addClass('d-none');
            $('#sidebar-toggle-show').removeClass('d-none');
        }, 300)
    });

    $('#sidebar-toggle-show').click(function(){
        $('#sidebar').fadeIn(300);
        setTimeout(function(){
            removeAllToggleClasses();
            $('#sidebar-toggle-hide').removeClass('d-none');
            $('#sidebar-toggle-show').addClass('d-none');
        }, 300)
    });

    $('#menu-toggle').click(function(){
        $('#body-header').toggle(300);
    });

    $('#search-toggle').click(function(){
        $('#search-toggle').removeClass('d-md-inline');
        $('#search-area').addClass('d-md-inline');
        $('#search-input').animate({width: "12rem"}, 300);
    });

    $('#search-area-hide').click(function(){
        $('#search-input').animate({width: "0rem"}, 300);
        setTimeout(function(){
            $('#search-area').removeClass('d-md-inline');
            $('#search-area').addClass('d-none');
            $('#search-toggle').addClass('d-md-inline');
        }, 300)
    })

    $('#header-notification-toggle').click(function(){
        $('.notification-container').fadeToggle();
    })

    $('#comment-show-me').click(function(){
        $('.header-comment').fadeToggle();
    });
    
    $('#profile-show').click(function(){
        $('.header-profile').fadeToggle();
    });

    $('.sidebar-group-link').click(function(){
        $('.sidebar-group-link').removeClass('sidebar-group-link-active');
        $('.sidebar-group-link').children('.sidebar-dropdown-toggle').children('angle').removeClass('fa-angle-down');
        $('.sidebar-group-link').children('.sidebar-dropdown-toggle').children('angle').addClass('fa-angle-left');

        $(this).addClass('sidebar-group-link-active');
        $(this).children('.sidebar-dropdown-toggle').children('angle').removeClass('fa-angle-left');
        $(this).children('.sidebar-dropdown-toggle').children('angle').addClass('fa-angle-down');
    });
})
     
    $('#full-screen').click(function(){
        toggleFullScreen();
    });

    function toggleFullScreen()
    {
        if((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen !== null))
        {
            if(document.documentElement.requestFullscreen)
            {
                document.documentElement.requestFullscreen();
            }

            else if(document.documentElement.mozRequestFullscreen)
            {
                document.documentElement.mozRequestFullscreen();
            }

            else if(document.documentElement.webkitRequestFullscreen)
            {
                document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
            
                $('#screen-expand').addClass('d-none');
                $('#screen-compress').removeClass('d-none');
        }
        else
        {
            if(document.cancelFullScreen)
            {
                document.cancelFullScreen();
            }

            else if(document.mozCancelFullScreen)
            {
                document.mozCancelFullScreen();
            }

            else if(document.webkitCancelFullScreen)
            {
                document.webkitCancelFullScreen();
            }

            $('#screen-expand').removeClass('d-none');
            $('#screen-compress').addClass('d-none');
        }
    }