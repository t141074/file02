<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英作文ページ</title>
</head>
<body>
    <h1>英作文ページ</h1>
    <p>今日の日付: {{ $date }}</p>
    <form action="{{ route('diary.translate') }}" method="post">
        @csrf
        <label for="japanese_text">日本語作文：</label><br>
        <textarea name="japanese_text" id="japanese_text" rows="4" cols="50"></textarea><br>
        <button type="submit">英語に変換</button>
    </form>
    <hr>
    <h2>英作文：</h2>
    <div id="english_text">{{ $english_text ?? '' }}</div>
</body>
</html>