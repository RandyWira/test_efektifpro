<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Bootstrap Components &rsaquo; Table &mdash; Stisla</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets/stisla/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/stisla/assets/css/style.css')}}">
</head>

<body>
<div id="app">
    <div class="main-wrapper">
    <div class="navbar-bg"></div>
    
    @include('layout.topbar')


    @include('layout.sidebar')

    <!-- Main Content -->
    @yield('content')


    <footer class="main-footer">
        <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
        2.3.0
        </div>
    </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('assets/stisla/assets/js/stisla.js')}}"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{asset('assets/stisla/assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/stisla/assets/js/custom.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function()
    {
        jQuery('select[name="jenis"]').on('change', function()
        {
            var jenis_id = jQuery(this).val();
            // alert(jenis_id)
            if(jenis_id)
            {
                jQuery.ajax({
                    url : '/getBrand/' +jenis_id,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        jQuery('select[name="brand"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="brand"]').append('<option value="'+ key +'">'+ value + '</option>');
                        });
                    }
                });
            }
            else 
            {
                $('select[name="brand"]').empty();
            }
        });
    });

</script>


@yield('js')

</body>
</html>