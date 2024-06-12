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

        .split {
            display: flex;
            flex-direction: row;
        }

        .gutter {
            background-color: #eee;
            background-repeat: no-repeat;
            background-position: 50%;
            margin-inline: 0.5rem;
        }

        .gutter.gutter-horizontal {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAeCAYAAADkftS9AAAAIklEQVQoU2M4c+bMfxAGAgYYmwGrIIiDjrELjpo5aiZeMwF+yNnOs5KSvgAAAABJRU5ErkJggg==');
            cursor: col-resize;
        }
    </style>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body>
<div class="p-3">
    <div class="split">
        <div id="split-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid dolore ducimus eius fuga illo illum inventore maxime molestiae quaerat, quasi sit tempore tenetur ullam veritatis vero vitae voluptas voluptate.</p>
        </div>
        <div id="split-1" class="">
            <livewire:editor.text-editor />
        </div>
    </div>
    @livewireScripts
{{--    <button type="button">Show</button>--}}
</div>
@vite(['resources/js/split.js'])
<script type="module">
    const split = splitPane("#split-0", "#split-1")
</script>
</body>
</html>
