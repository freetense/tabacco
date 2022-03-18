<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Your Store</title>
    <meta name="description" content="My Store" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/960.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/screen.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/color.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/prettyPhoto.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ie.css') }}" media="all" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/shoppica.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function()  {
            if (window.PIE) {
                $('.rounded').each(function() {
                    PIE.attach(this);
                });
            }
        });
    </script>
    <script type="text/javascript">

        $(document).ready(function() {

            $(".s_tabs").tabs({ fx: { opacity: 'toggle', duration: 300 } });

            $("#product_images a[rel^='prettyPhoto'], #product_gallery a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'light_square',
                opacity: 0.5
            });

        });

    </script>
    <script type="text/javascript">
        $(function() {
            $("#checkout form").accordion({
                autoHeight: false
            });
        });
    </script>


</head>

<body class="s_layout_fixed">
    <div id="app">
        <div id="wrapper">
