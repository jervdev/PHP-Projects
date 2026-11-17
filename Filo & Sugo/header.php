<?php require 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($shopName); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8ebdf;
            color: #30382e;
            padding: 20px;
        }
        main {
            width: 680px;
            margin: auto;
            padding: 24px;
            background: #fffdf3;
            border-top: 5px solid #36543b;
        }
        h1 {
            font-family: Georgia, serif;
            color: #36543b;
            margin-bottom: 6px;
        }
        h2, h3 {
            color: #36543b;
        }
        .tagline {
            color: #8b3e33;
            font-style: italic;
        }
        input, select, button {
            width: 100%;
            padding: 9px;
            margin: 6px 0 12px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            margin: 12px 0;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #c7cebb;
            text-align: left;
        }
        th, .tasting {
            background: #edf2e5;
        }
        .tasting {
            padding: 12px;
            border-left: 3px solid #36543b;
        }
        button {
            background: #36543b;
            color: white;
            border: none;
        }
        a, .error {
            color: #8b3e33;
        }
        .success {
            color: #28603a;
        }
    </style>
</head>
<body>
<main>
    <h1><?php echo htmlspecialchars($shopName); ?></h1>
    <p class="tagline">One table, more pasta.</p>
