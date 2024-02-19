<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word List</title>
    <style>
        .word-card {
            width: 200px;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .word-card.flip {
            transform: rotateY(180deg);
        }
        .word-front, .word-back {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            backface-visibility: hidden;
        }
        .word-back {
            transform: rotateY(180deg);
        }
    </style>
</head>
<body>
    <h1>Word List</h1>
    @foreach ($words as $word)
        <div class="word-card" onclick="flipCard(this)">
            <div class="word-front">{{ $word->word }}</div>
            <div class="word-back">{{ $word->meaning }}</div>
        </div>
    @endforeach

    <script>
        function flipCard(card) {
            card.classList.toggle('flip');
        }
    </script>
</body>
</html>