<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Reverb Example</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body>


    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0"
        aria-valuemax="100">
        <div id="progress-bar" class="progress-bar" style="width: 0%">0%</div>
    </div>


    <script>
        window.addEventListener('DOMContentLoaded', function() {

            let progress = document.getElementById('progress-bar');

            window.Echo.channel('progress')
                .listen('ChangeProgressValue', (e) => {
                    console.log(e);
                    console.log(e.value);
                    progress.style.width = e.value + "%";
                    progress.innerHTML = e.value + "%";
                })

        })
    </script>
</body>

</html>
