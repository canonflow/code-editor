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
    {{-- BEGIN: Text Editor Resource --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('codemirror') }}/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('codemirror') }}/theme/dracula.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('codemirror') }}/theme/material.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('codemirror') }}/theme/nord.css">
    <script src="{{ asset('codemirror') }}/lib/codemirror.js"></script>
    <script src="{{ asset('codemirror') }}/mode/clike/clike.js"></script>
    <script src="{{ asset('codemirror') }}/mode/python/python.js"></script>
    <script src="{{ asset('codemirror') }}/mode/clike/clike.js"></script>
    <script src="{{ asset('codemirror') }}/mode/pascal/pascal.js"></script>
    <script src="{{ asset('codemirror') }}/addon/edit/closebrackets.js"></script>
    <script src="{{ asset('codemirror') }}/addon/lint/lint.js"></script>
    <script src="{{ asset('codemirror') }}/addon/fold/foldgutter.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
</head>
<body>
    <h1 class="text-2xl font-bold">Editor</h1>
    <textarea id="editor"></textarea>
    <button type="button" onclick="showCode()">Show</button>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
            mode: "text/x-c++src",
            theme: "material",
            lineNumbers: true,
            autoCloseBrackets: true,
            smartIndent:true,
            indentUnit: 4,
            gutters: ["CodeMirror-lint-markers"],
            lint: true,
        })
        editor.getDoc().setValue(`#include <bits/stdc++.h>
using namespace std;
int main()
{
    // Write your C++ code here
}`)
        const showCode = () => {
            console.log(editor.getValue());
        }
    </script>
</body>
</html>
