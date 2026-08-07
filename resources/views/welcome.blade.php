<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Student Homepage</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .card {
            width: 700px;
            max-width: 90%;
            background: rgba(255, 255, 255, .12);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .35);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 38px;
        }

        .subtitle {
            text-align: center;
            color: #dbeafe;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, .2);
            font-size: 18px;
        }

        td:first-child {
            font-weight: bold;
            width: 40%;
            color: #93c5fd;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #cbd5e1;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="card">

        <h1>Laravel Student Homepage</h1>

        <p class="subtitle">
            ITST Laboratory Activity
        </p>

        <table>

            <tr>
                <td>Student Name</td>
                <td>Maverick Denver S. Del Mundo</td>
            </tr>

            <tr>
                <td>Student Number</td>
                <td>0124-0419</td>
            </tr>

            <tr>
                <td>Course</td>
                <td>BSIT</td>
            </tr>

            <tr>
                <td>Section</td>
                <td>3D</td>
            </tr>

            <tr>
                <td>Subject</td>
                <td>ITST</td>
            </tr>

            <tr>
                <td>Current Date</td>
                <td>{{ now()->format('F d, Y') }}</td>
            </tr>

        </table>

    </div>

</body>

</html>
