<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>惑星情報</h1>
    @if ($planet !== null)
    <p>
        <b>名前：{{ $planet->name }}</b>
    </p>

    <p>
        <b>名前（英語）：{{ $planet->english_name }}</b>
    </p>

    <p>
        <b>半径：{{ $planet->radius }}</b>
    </p>

    <p>
        <b>重量：{{ $planet->weight }}</b>
    </p>
    @else
    <p> id = {{ $id }}の惑星情報は存在しません。</p>
    @endif
    <p><a href="/planets/{{ $planet->id }}/edit"><input type="submit" value="編集"></a></p>
    <a href="/planets">戻る</a>
</body>

</html>
