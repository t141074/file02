<!-- resources/views/words/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Word</title>
</head>
<body>
    <h1>Create New Word</h1>
<form action="{{ route('words.store') }}" method="POST">
    @csrf
    <div>
        <label for="word">単語:</label>
        <input type="text" id="word" name="word">
    </div>
    <div>
        <label for="meaning">意味:</label>
        <input type="text" id="meaning" name="meaning">
    </div>
    <button type="submit">完了</button>
</form>
