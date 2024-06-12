<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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

        /*===== SPLIT PANEL =====*/
        .split {
            min-height: 96.8vh;
        }

        #split-0, #split-1 {
            height: 90%;
            max-height: 96.8vh;
        }

        #question {
            height: 90%;
            max-height: 79.4vh;
        }

        /*===== SCROLL BAR =====*/
        ::-webkit-scrollbar {
            width: 0.45rem;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            /*background: #f1f1f1;*/
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            /*background: rgba(136, 136, 136, 0.5);*/
            border: 1px solid #000;
            border-radius: 1rem;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.15);
        }
    </style>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="bg-gray-200">
<div class="p-3">
    <div class="split">
        {{--  Left Panel  --}}
        <div id="split-0" class="overflow-auto rounded relative">
            {{--  Header  --}}
            <div class="bg-sky-950 mb-3 py-3 px-4 rounded sticky top-0 shadow">
                <h2 class="text-xl text-white font-medium">Final Programming ILPC 2025</h2>
                {{--  Waktu  --}}
                <div class="text-sky-50 mt-6 text-sm">
                    <table border="0">
                        <tr>
                            <td>Jadwal Mulai</td>
                            <td class="px-4">:</td>
                            <td>2024-06-12 00:00:00</td>
                        </tr>
                        <tr>
                            <td>Jadwal Selesai</td>
                            <td class="px-4">:</td>
                            <td>2024-07-01 23:55:00</td>
                        </tr>
                        <tr class="font-bold text-lg text-amber-300">
                            <td>Sisa Waktu</td>
                            <td class="px-4">:</td>
                            <td>09:19:20</td>
                        </tr>
                    </table>
                </div>
            </div>

            {{--  Question  --}}
            <div class="overflow-auto bg-white rounded py-3 px-4 shadow" id="question">
                <div class="">
                    <p dir="ltr" style="line-height: 1.38; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 20pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">CARD TRICK</span></p>
                    <p><span id="docs-internal-guid-ea197e7d-7fff-6eb5-0da0-5e0bed91855a">&nbsp;</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">DESCRIPTION</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Lyney and Lynette are playing a card game. The rules are as follows: Lyney will instruct Lynette to choose 1 card from among n sets of cards labeled with numbers from 1 to n. After Lynette selects a card, Lyney will shuffle the set of cards and randomly select m cards from the previous n sets of cards. Then, Lyney will ask Lynette, "Is your card among these m cards?" Afterward, the m cards will be shuffled again into the n cards, regardless of Lynette's answer, whether "yes" or "no". Lynette always answers honestly. The combinations of m cards are never the same. This process will be repeated up to x times, until Lyney is confident in correctly guessing the card previously chosen by Lynette. The answer after x attempts is guaranteed to show that 1 card which Lynette chose at the beginning of the game. In that case, determine the number of the card chosen by Lynette at the beginning of the game!</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">INPUT</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The first line contains&nbsp; t, indicating the number of test cases.</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">For each of the t test cases the first line contains n, m, and x, separated by spaces. n represents the total number of cards, m represents the number of cards taken, and x represents the number of times Lyney takes cards.</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The next x lines contain either -1 or 0, followed by a line of&nbsp; m numbers for each line. If the first number is 0, it means Lynette's card is in that set of cards. If the first number is -1, it means Lynette's card is not in that set of cards.</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">CONSTRAINTS</span></p>
                    <ul style="margin-top: 0; margin-bottom: 0; padding-inline-start: 48px;">
                        <li dir="ltr" style="list-style-type: disc; font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">1 ≤ t ≤ 10</span></li>
                        <li dir="ltr" style="list-style-type: disc; font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;"><span>4 ≤ n ≤ 10</span></li>
                        <li dir="ltr" style="list-style-type: disc; font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;">3 ≤ m &lt; n</li>
                        <li dir="ltr" style="list-style-type: disc; font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre;"><span>1 ≤ x &lt; 120</span></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">OUTPUT</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">INTEGER that show the number of card that Lynette chose at the beginning of the game</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">INPUT SAMPLE</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">3</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">4 3 1</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">-1 2 3 4</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">4 2 2</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">0 1 2</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">0 2 3</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">5 3 3</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">0 1 2 3</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">0 2 3 4</span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">0 3 4 5</span><span><br><br></span></p>
                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.999999999999998pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">OUTPUT SAMPLE</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">1</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">2</span></p>
                    <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 11pt; font-family: 'Times New Roman',serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">3</span></p>
                </div>
            </div>
        </div>

        {{--  Right Panel  --}}
        <div id="split-1" class="overflow-auto bg-white rounded py-1.5 px-2 shadow">
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
