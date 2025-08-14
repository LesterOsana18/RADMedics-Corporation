<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RADMedics Corporation</title>
    <link rel="icon" href="/images/radmedics-logo.png" type="image/png">

    <!-- Fonts: Only Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN with Poppins font only -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        cyan: '#0ABAB5',
                        'dark-teal': '#056360',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white flex flex-col min-h-screen">
    @include('components.navbar')
    <main class="flex-1">{{ $slot }}</main>
    @include('components.footer')
</body>
</html>
