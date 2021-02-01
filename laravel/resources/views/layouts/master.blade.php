<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- below is a link to bootstrap stylesheet if you choose to use that for styling -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    
    <!-- below is a link to an Arizona google font if you wanted to use it -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Arizonia' rel="stylesheet" type='text/css'> -->

    <!-- here's our link to our generic stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <!-- Using a facade above to pull in the CSS from its spot no matter how that path changes -->

    <title>0</title>


</head>

<body>
    @include('partials.header')
    <!-- this adds the header, a 'partial' we created, to our master layout -->
    <div class="container">
        @yield('master-hook')
    </div>
    <!-- This is called a hook, we provide this for other pages that want to use this layout so they can grab this layout, or 'hook' -->
</body>

</html>