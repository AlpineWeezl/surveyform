<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Sofia">

    <title>Survey Form</title>
</head>

<body>
    <header>
        <div class="header">
            <h1 id="title">Survey form</h1>
            <p id="description">Thank you for taking your time to improve our service</p>
        </div>
    </header>
    <main>
        <div>
            <div class="form">
                <form id="survey-form" action="#" method="POST">
                    <label id="name-label" for="name">Name</label>
                    <input id="name" type="text" placeholder="name" required>
                    <label id="email-label" for="email">eMail</label>
                    <input id="email" type="email" placeholder="email" required>
                    <label id="number-label" for="number">Number</label>
                    <input id="number" type="number" min="0" max="100" placeholder="number">
                    <label for="dropdown">Country</label>
                    <select id="dropdown" name="dropdown">
                        <option value="australia">Australia</option>
                        <option value="canada">New Zealand</option>
                        <option value="canada">Germany</option>
                        <option value="usa">USA</option>
                    </select>
                    <button id="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>