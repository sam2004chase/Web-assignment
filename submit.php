<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamName = $_POST['teamName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $teamSize = $_POST['teamSize'];
    $technologyPreferences = isset($_POST['technologyPreferences']) ? implode(", ", $_POST['technologyPreferences']) : '';
    $githubLink = $_POST['githubLink'];
    $projectIdea = $_POST['projectIdea'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You for Registering</title>
        <style>
            body {
                margin: 0;
                font-family: 'Roboto', sans-serif;
                color: #fff;
                background: url('hacker.jpg') no-repeat center center / cover;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                background-color: rgba(10, 10, 10, 0.9);
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 255, 255, 0.3);
                border: 2px solid #00b3b3;
                text-align: center;
                max-width: 600px;
                width: 90%;
            }

            h1 {
                color: #00ffff;
                font-size: 28px;
                margin-bottom: 20px;
                letter-spacing: 1px;
            }

            p {
                margin: 10px 0;
                font-size: 18px;
                line-height: 1.5;
            }

            a {
                color: #00b3b3;
                text-decoration: none;
                font-weight: bold;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Thank you for registering!</h1>
            <p><strong>Team Name:</strong> <?= htmlspecialchars($teamName); ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($email); ?></p>
            <p><strong>Phone:</strong> <?= htmlspecialchars($phone); ?></p>
            <p><strong>Team Size:</strong> <?= htmlspecialchars($teamSize); ?></p>
            <p><strong>Technology Preferences:</strong> <?= htmlspecialchars($technologyPreferences); ?></p>
            <p><strong>GitHub/Resume Link:</strong> <a href="<?= htmlspecialchars($githubLink); ?>" target="_blank"><?= htmlspecialchars($githubLink); ?></a></p>
            <p><strong>Project Idea:</strong> <?= nl2br(htmlspecialchars($projectIdea)); ?></p>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "<h1>Invalid request</h1>";
}
