@assets
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .cm-editor { height: 350px; }
        .cm-scroller { overflow: auto; }
        .cm-gutters { margin: 1px; }
        #editor {
            /*width: 400px;*/
            /*height: 400px;*/
            /*border: 1px solid black;*/
        }
    </style>
@endassets

<div>
    <h1 class="text-2xl text-indigo-500 font-bold mb-3">Code Editor</h1>
    {{--  Editor  --}}
    <div wire:ignore>
        <div class="overflow-hidden rounded-md text-sm">
            <textarea id="editor"></textarea>
        </div>
        <button
            id="btnRun"
            onclick="sendCode()"
            class="bg-indigo-600 px-4 py-2 mt-3 rounded text-white font-medium text-sm enabled:hover:bg-indigo-500 enabled:active:bg-indigo-700 enabled:active:scale-95 disabled:bg-gray-400 transition-all">
            Run
        </button>
        <button
            class="enabled:bg-amber-500 px-4 py-2 mt-3 rounded text-white font-medium text-sm enabled:hover:bg-amber-400 enabled:active:bg-amber-600 enabled:active:scale-95 disabled:bg-gray-400 disabled:hover:bg-gray-400 transition-all"
            wire:click="clearOutput()"
            wire:loading.attr="disabled"
        >
            Clear
        </button>

        <button
            class="enabled:bg-sky-500 px-4 py-2 mt-3 rounded text-white font-medium text-sm enabled:hover:bg-sky-400 enabled:active:bg-sky-600 enabled:active:scale-95 disabled:bg-gray-400 disabled:hover:bg-gray-400 transition-all"
            onclick="changeLanguage('cpp')"
            wire:loading.attr="disabled"
        >
            CPP
        </button>
        <button
            class="enabled:bg-sky-500 px-4 py-2 mt-3 rounded text-white font-medium text-sm enabled:hover:bg-sky-400 enabled:active:bg-sky-600 enabled:active:scale-95 disabled:bg-gray-400 disabled:hover:bg-gray-400 transition-all"
            onclick="changeLanguage('java')"
            wire:loading.attr="disabled"
        >
            Java
        </button>
        <button
            class="enabled:bg-sky-500 px-4 py-2 mt-3 rounded text-white font-medium text-sm enabled:hover:bg-sky-400 enabled:active:bg-sky-600 enabled:active:scale-95 disabled:bg-gray-400 disabled:hover:bg-gray-400 transition-all"
            onclick="changeLanguage('python')"
            wire:loading.attr="disabled"
        >
            Python
        </button>
        <div>
            <select name="" id="themePicker" class="mt-5">
                <option disabled>-- Select Theme --</option>
                <option selected value="dracula">Dracula</option>
                <option value="coolGlow">Cool Glow</option>
                <option value="noctisLilac">Noctis Lilac</option>
            </select>
        </div>
        <div>
            <livewire:editor.output-editor :$output/>
        </div>
    </div>
</div>

@script
<script type="module">
    const btnRun = document.getElementById('btnRun');
    const themePicker = document.getElementById('themePicker');
    // let editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
    //     mode: "text/x-python",
    //     theme: "material",
    //     lineNumbers: true,
    //     autoCloseBrackets: true,
    //     smartIndent:true,
    //     indentUnit: 4,
    //     gutters: ["CodeMirror-lint-markers"],
    //     lint: true,
    // })
    // editor.getDoc().setValue(`print("Hello World")`)

    window.container = document.getElementById('container');
    window.textEditor = createTextEditor(window.container, `print("Hello")`);

    const sendCode = () => {
        // let code = window.editor.getValue();
        let code = window.textEditor.editor.state.doc.toString();
        let codeBlob = new Blob([code], {
            type: "text/plain;charset=utf-8"
        });

        const formData = new FormData();
        formData.append('code', codeBlob);
        {{--formData.append('_token', '{{ csrf_token() }}');--}}
        btnRun.disabled = true;
        $.ajax({
            type: 'POST',
            url: '{{ route('editor.run') }}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: formData,
            processData: false,
            contentType: false,
            // enctype: 'multipart/form-data',
            success: function (data) {
                console.log(data.outputs);
                // Kalo kek gini, properti yg mau diganti gk boleh REACTIVE
                Livewire.dispatch('send-output', {'outputs': data.outputs});
            },
            errors: function (xhr) {
                console.log(xhr);
            },
            complete: function () {
                btnRun.disabled = false;
            }
        })
    }

    const changeLanguage = (lang) => {
        window.textEditor.setLanguage(lang);
        if (lang == 'cpp') {
            window.textEditor.setValue(`#include <bits/stdc++.h>
using namespace std;

int main()
{
  // Write your C++ code here
\t
}`);
        } else if (lang == 'python') {
            window.textEditor.setValue(`# Write your Python code here\n`);
        } else if (lang == 'java') {
            window.textEditor.setValue(`class Main {
  public static void main(String[] args) {
    // Write your Java code here
\t\t
  }
}`);
        }
    }

    themePicker.addEventListener('change', (e) => {
        console.log(e.target.value);
        window.textEditor.setTheme(e.target.value);
    })

    changeLanguage('cpp');
    window.sendCode = sendCode
    window.changeLanguage = changeLanguage;
</script>
@endscript