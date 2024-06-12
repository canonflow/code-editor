<?php

namespace App\Livewire\Editor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;


define('STORAGE_PATH', storage_path() . "/app/public/");
define('PUBLIC_STORAGE_PATH', public_path() . "/storage/");
class TextEditor extends Component
{
    use WithFileUploads;

    public $output = '';
    public function render()
    {
        return view('livewire.editor.text-editor');
    }

    public function clearOutput() { $this->dispatch('clear-output'); }

    public function show(Request $request)
    {
//        dd($request->all());
        $path = PUBLIC_STORAGE_PATH . 'test';
        $code = $request->file('code');

        // Save Code to python file
        $filename = substr(md5(mt_rand()), 0, 5);
        $codeExecutePath = $path . "/" . $filename . ".py";
        $storagePath = "/test";

        $code->storeAs(
          $storagePath,
          $filename . ".py",
          'public'
        );

        // Execute python code
        $result = shell_exec("python " . $codeExecutePath . " 2>&1");
        $this->output = $result;

        // Delete python file
        Storage::delete($storagePath . "/$filename" . ".py");

        return response()->json(array(
            "outputs" => ['output' => $this->output],
        ), 200);
    }
}
