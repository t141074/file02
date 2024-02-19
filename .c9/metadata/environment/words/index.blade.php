{"filter":false,"title":"index.blade.php","tooltip":"/words/index.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"en\">","<head>","    <meta charset=\"UTF-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","    <title>Word List</title>","    <style>","        .word-card {","            width: 200px;","            height: 200px;","            border: 1px solid #ccc;","            border-radius: 5px;","            display: flex;","            flex-direction: column;","            align-items: center;","            justify-content: center;","            margin: 10px;","            cursor: pointer;","            transition: transform 0.3s ease;","        }","        .word-card.flip {","            transform: rotateY(180deg);","        }","        .word-front, .word-back {","            width: 100%;","            height: 100%;","            display: flex;","            align-items: center;","            justify-content: center;","            position: absolute;","            backface-visibility: hidden;","        }","        .word-back {","            transform: rotateY(180deg);","        }","    </style>","</head>","<body>","    <h1>Word List</h1>","    @foreach ($words as $word)","        <div class=\"word-card\" onclick=\"flipCard(this)\">","            <div class=\"word-front\">{{ $word->word }}</div>","            <div class=\"word-back\">{{ $word->meaning }}</div>","        </div>","    @endforeach","","    <script>","        function flipCard(card) {","            card.classList.toggle('flip');","        }","    </script>","</body>","</html>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":52,"column":7},"end":{"row":52,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":10,"state":"css-ruleset","mode":"ace/mode/php_laravel_blade"}},"timestamp":1708249964154,"hash":"b5dd65a522c69e5d02628f2a2fc632e7c7e1b5f9"}