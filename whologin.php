<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Reset default margin and padding */
    body,
    h1,
    h2,
    h3,
    p,
    ul,
    ol {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }



    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 160px);
        /* Adjust for header and footer height */
    }

    .login-section {
        text-align: center;
    }

    button {
        padding: 10px 20px;
        margin: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #3498db;
        color: #fff;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>

<body>
    <header>
        <?php include_once 'header.php'; ?>
    </header>

    <main>
        <div class="login-section">
            <a href="http://localhost/agile/scheduling/admin/">
                <button>Login as Admin</button>
            </a>
            <a href="http://localhost/agile/scheduling/login.php">
                <button>Login as Staff</button>
            </a>
 
        </div>
    </main>

    <footer>
        <?php include_once 'footer.php'; ?>
    </footer>
</body>

</html>