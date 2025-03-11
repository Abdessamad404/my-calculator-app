<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        input,
        select,
        button {
            padding: 8px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            height: 36px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .error {
            color: red;
            background-color: #ffeeee;
        }

    </style>
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
