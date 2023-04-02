<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問い合わせ</title>
</head>

<body>
    <h1>お問い合わせ</h1>
    @if ($errors->any())
        <div role="alert" style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('inquiry.send') }}">
        @csrf
        <div>
            <label for="name">お問い合わせ部署</label><br>
            <select name="name">
                @foreach ($departments as $department)
                    <option value={{ $department->id }} @if (old('name') === $department->name) selected @endif>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <label for="inquiry_name">お名前：</label><br>
        <input type="text" name="inquiry_name" value={{ old('inquiry_name') }}>
        <br>
        <label for="age">年齢：</label><br>
        <input type="text" name="age" value={{ old('age') }}>
        <br>
        <label for="gender">性別：</label><br>
        <select name="gender">
            <option value="1" @if (old('gender') == '1') selected @endif>男</option>
            <option value="2" @if (old('gender') == '2') selected @endif>女</option>
            <option value="3" @if (old('gender') == '3') selected @endif>その他</option>
        </select>
        <br>
        <label for="email">メールアドレス</label><br>
        <input type="email" name="email" value={{ old('email') }}>
        <br>
        <label for="content">お問い合わせ内容</label><br>
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
        <br>
        <button type="submit">確認</button>
    </form>

</body>

</html>
