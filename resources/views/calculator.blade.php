<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <h2>Calculatrice</h2>
    <form action="{{ route('calculate') }}" method="POST">
        @csrf
        <input type="number" name="num1" step="any" required placeholder="Nombre 1">
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" step="any" required placeholder="Nombre 2">
        <button type="submit">Calculer</button>
    </form>
    {{-- @if(session('result')) --}}
    @if(session()->has('result') || session('result') === 0 || session('result') === '0')
    <p>Résultat : {{ session('result') }}</p>
    @endif
    @if($errors->any())
    <p class="error">{{ $errors->first() }}</p>
    @endif
</body>

</html>