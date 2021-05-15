<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <title>Бизнес монетизотор Светлана Светайло</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        jQuery.noConflict()

        jQuery(function ($) {
            $("#tabs").tabs();
        });

        jQuery(document).ready(function(){
            $('.btn-1').click(function () {
                $(this).toggleClass('btn-couching_3');
                $('.btn-3').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-2').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-1').addClass('btn-couching_3').removeClass('btn-couching_1');
            });
        });

        jQuery(document).ready(function(){
            $('.btn-2').click(function () {
                $(this).toggleClass('btn-couching_3');
                $('.btn-3').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-1').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-2').addClass('btn-couching_3').removeClass('btn-couching_2');
            });
        });

        jQuery(document).ready(function(){
            $('.btn-3').click(function () {
                $(this).toggleClass('btn-couching_3');
                $('.btn-2').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-1').addClass('btn-couching_1').removeClass('btn-couching_3');
                $('.btn-3').addClass('btn-couching_3').removeClass('btn-couching_1');
            });
        });

        jQuery(document).ready(function(){
            $( ".btn-1" ).trigger( "click" );
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/424bd6fff6.js" crossorigin="anonymous"></script>


</head>