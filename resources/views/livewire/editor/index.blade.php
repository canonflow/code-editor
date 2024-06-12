<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #editor {
            width: 400px;
            height: 400px;
            border: 1px solid black;
        }
    </style>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body>
<div class="p-3">
    <h1 class="text-2xl font-bold mb-3">Text Editor</h1>
    <livewire:editor.text-editor />
    @livewireScripts
{{--    <button type="button">Show</button>--}}
</div>
<script>

</script>
</body>
</html>
