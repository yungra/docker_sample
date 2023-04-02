<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問い合わせ一覧</title>
</head>

<body>
    <h1>お問い合わせ一覧</h1>

    <table border="1">

        <thead>
            <tr>
                <th>お問い合わせ部署</th>
                <th>お名前</th>
                <th>年齢</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせ内容</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th>{{ $contact->department->name }}</th>
                    <th>{{ $contact->name }}</th>
                    <th>{{ $contact->age }}</th>
                    <th>{{ $contact->gender }}</th>
                    <th>{{ $contact->email }}</th>
                    <th>{{ $contact->content }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('inquiry') }}">お問い合わせフォームへ</a>
</body>

</html>
