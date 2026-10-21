<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Bibliothèque</title>
    <style>
        :root {
            --primary: #F47424;
            --primary-hover: #d85d15;
            --bg-color: #f8fafc;
            --text-color: #2d3748;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #ffffff;
            border-bottom: 2px solid var(--border-color);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
            color: var(--primary);
        }

        nav a {
            color: var(--text-color);
            text-decoration: none;
            margin-left: 1.5rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        nav a:hover {
            color: var(--primary);
        }

        .btn-nav-add {
            background-color: var(--primary) !important;
            color: white !important;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .btn-nav-add:hover {
            background-color: var(--primary-hover) !important;
        }

        main {
            flex: 1;
            max-width: 900px;
            width: 100%;
            margin: 2rem auto;
            padding: 2rem;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            box-sizing: border-box;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #ffffff;
            border-top: 1px solid var(--border-color);
            font-size: 0.875rem;
            color: #718096;
        }

        /* Styles globaux pour embellir automatiquement les tableaux et formulaires */
        h2 {
            color: var(--text-color);
            margin-top: 0;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background-color: #fffaf5;
            color: var(--primary);
            font-weight: 600;
        }

        tr:hover {
            background-color: #fcfcfc;
        }

        form div {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(244, 116, 36, 0.15);
        }

        button, .btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        button:hover, .btn:hover {
            background-color: var(--primary-hover);
        }

        /* Bouton de suppression rouge pour contraster un minimum */
        button[type="submit"].btn-delete {
            background-color: #e53e3e;
        }
        button[type="submit"].btn-delete:hover {
            background-color: #c53030;
        }
    </style>
</head>
<body>
    <header>
        <h1>📚 Gestion de Bibliothèque</h1>
        <nav>
            <a href="/livres">Liste des livres</a>
            <a href="/livres/create" class="btn-nav-add">+ Ajouter un livre</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        TP Laravel - Fait avec soin 🍊
    </footer>
</body>
</html>