<!DOCTYPE html>
<html>
<head>
    <title>laravel livewire image ipload - nicesnippets.com</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <div class="card mt-5">
                  <div class="card-header bg-success">
                    <h2 class="text-white">Laravel Livewire Image Ipload - NiceSnippets.com</h2>
                  </div>
                  <div class="card-body">
                    @livewire('image-form')
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html>
