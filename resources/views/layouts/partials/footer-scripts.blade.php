<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/typed.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/mediaelement-and-player.min.js') }}"></script>



<!-- <script>
    var typed = new Typed('.typed-words', {
    strings: ["Web Apps"," WordPress"," Mobile Apps"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
    });
</script>

<script src="{{ asset('assets/js/main.js') }}"></script> -->



<script>
$(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  
</script>


<script>

    var searchResult = $(".inp_searchheader")
    var btnSearch = $(".btnSearch")

    // Search from text box
    searchResult.autocomplete({
        source: function (request, response) {
            $.ajax({
                type: 'POST',
                url: 'search_result',
                dataType: "json",
                data: {name: request.term},
                success: function (data) {
                    response($.map(data, function (item) {
                        for (var u in item) {
                            return {label: item[u].name, value: item[u].name, id: item[u].id};
                        }
                    }))
                },

            })
        },
        select: function (event, ui) {
            window.location.href = "transaction" + ui.item.id
        }
    });

    // when search button is clicked 
    function searchClick() {

        if ($.trim(searchResult.val()) == "") {

        } else {

            window.location.href = "search_result_" + searchResult.val();
        }
    }

    //getlatest news
    function loadNews() {
        $.ajax({
            type: 'GET',
            url: '/admin/portal/latest_news/get_news',
            dataType: "text",
            success: function (data) {
                $('#latest_news').html(data);
                console.log(data);
            },

            error: function (error) {
                console.log("Error loading news");
            }

        })

    }

    loadNews();
</script>