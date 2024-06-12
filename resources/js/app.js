import './bootstrap';
import { autocompletion, closeBrackets, closeBracketsKeymap, completionKeymap } from "@codemirror/autocomplete";
import { defaultKeymap, history, historyKeymap, indentMore, indentLess } from "@codemirror/commands";
import { StreamLanguage } from "@codemirror/language"
import { python } from "@codemirror/lang-python";
import { java } from "@codemirror/lang-java"
import { cpp } from "@codemirror/lang-cpp"
import { bracketMatching, defaultHighlightStyle, foldGutter, foldKeymap, syntaxHighlighting, indentOnInput } from "@codemirror/language"
import { lintKeymap } from "@codemirror/lint"
import { highlightSelectionMatches, searchKeymap } from "@codemirror/search"
import { EditorState, Compartment } from "@codemirror/state"
import {
    crosshairCursor,
    drawSelection,
    dropCursor,
    EditorView,
    highlightActiveLine,
    highlightActiveLineGutter,
    highlightSpecialChars,
    keymap,
    lineNumbers,
    rectangularSelection
} from "@codemirror/view"

import { coolGlow } from "thememirror"
import { dracula } from "thememirror";
import { noctisLilac } from "thememirror";

// window.autocompletion = autocompletion;
// window.closeBrackets = closeBrackets;
// window.closeBracketsKeymap = closeBracketsKeymap;
// window.completionKeymap = completionKeymap;
// window.defaultKeymap = defaultKeymap;
// // window.history = history;
// window.historyKeymap = historyKeymap;
// window.bracketMatching = bracketMatching;
// window.defaultHighlightStyle = defaultHighlightStyle;
// window.foldGutter = foldGutter;
// window.foldKeymap = foldKeymap;
// window.indentOnInput = indentOnInput;
// window.syntaxHighlighting = syntaxHighlighting;
// window.lintKeymap = lintKeymap;
// window.highlightSelectionMatches = highlightSelectionMatches;
// window.searchKeymap = searchKeymap;
// window.EditorState = EditorState;
// window.crosshairCursor = crosshairCursor;
// window.drawSelection = drawSelection;
// window.dropCursor = dropCursor;
// window.EditorView = EditorView;
// window.highlightActiveLine = highlightActiveLine;
// window.highlightActiveLineGutter = highlightActiveLineGutter;
// window.highlightSpecialChars = highlightSpecialChars;
// window.keymap = keymap;
// window.lineNumbers = lineNumbers;
// window.rectangularSelection = rectangularSelection;
// window.coolGlow = coolGlow;
// window.StreamLanguage = StreamLanguage;
// window.python = python;

const createTextEditor  = (container, initialValue) => {
    let textArea = document.getElementById('editor');

    // Compartment
    let language = new Compartment;
    let tabSize = new Compartment;
    let themeConfig = new Compartment;

    // Editor
    let editor = new EditorView({
        // parent: ,
        // parent: container,
        state: EditorState.create({
            doc: textArea.value,
            extensions: [
                themeConfig.of(dracula),
                // dracula,
                lineNumbers(),
                highlightActiveLineGutter(),
                highlightSpecialChars(),
                history(),
                foldGutter(),
                drawSelection(),
                dropCursor(),
                EditorState.allowMultipleSelections.of(true),
                indentOnInput(),
                syntaxHighlighting(defaultHighlightStyle, { fallback: true }),
                bracketMatching(),
                closeBrackets(),
                autocompletion(),
                rectangularSelection(),
                crosshairCursor(),
                highlightActiveLine(),
                highlightSelectionMatches(),
                keymap.of([
                    ...closeBracketsKeymap,
                    ...defaultKeymap,
                    ...searchKeymap,
                    ...historyKeymap,
                    ...foldKeymap,
                    ...completionKeymap,
                    ...lintKeymap,
                    {
                        key: "Tab",
                        preventDefault: true,
                        run: indentMore,
                    },
                    {
                        key: "Shift-Tab",
                        preventDefault: true,
                        run: indentLess,
                    },
                ]),
                language.of(python()),
                tabSize.of(EditorState.tabSize.of(2))
            ],
        })
    })

    textArea.parentNode.insertBefore(editor.dom, textArea);
    textArea.style.display = "none";
    if (textArea.form) {
        textArea.form.addEventListener("submit", () => {
            textArea.value = editor.state.doc.toString();
        })
    }

    function setLanguage(lang) {
        if (lang == "python") {
            editor.dispatch({
                effects: language.reconfigure(python())
            })
        } else if (lang == 'cpp') {
            editor.dispatch({
                effects: language.reconfigure(cpp())
            })
        } else if (lang == 'java') {
            editor.dispatch({
                effects: language.reconfigure(java())
            })
        }
    }

    function setValue(val) {
        editor.dispatch({
            changes: {
                from: 0,
                to: editor.state.doc.length,
                insert: val
            }
        })
    };

    function setTheme(theme) {
        switch (theme) {
            case 'dracula':
                editor.dispatch({
                    effects: themeConfig.reconfigure(dracula)
                })
                break;
            case 'coolGlow':
                editor.dispatch({
                    effects: themeConfig.reconfigure(coolGlow)
                })
                break;
            case 'noctisLilac':
                editor.dispatch({
                    effects: themeConfig.reconfigure(noctisLilac)
                })
                break;
            default:
                editor.dispatch({
                    effects: themeConfig.reconfigure(dracula)
                })
                break;
        }
    }

    return { editor, setLanguage, setValue, setTheme };
}
window.createTextEditor = createTextEditor;

