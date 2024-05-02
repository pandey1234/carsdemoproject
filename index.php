<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <style>
        body{
            font-family: Arial, sans-serif;
            display:flex;
            justify-content:center;
            align-items: center;
            height: 100vh;
            margin: 0;

        }
        .form-container{
            width: 400px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        form{
            display: flex;
            flex-direction: column;

        }
        label{
            margin-bottom: 8px;
        }
        input,textarea{
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
    
        }
        input[type="submit"]{
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"]:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
       <h2>Contact Us</h2>
       <form action="contact_form.php" method ="post">
        <label for="fullName">Full Name:</label>
        <input type ="text" id ="fullName" name="fullName" required>

        <label for="phonenumber">Phone Number:</label>
        <input type ="tel" id ="phoneNumber" name="phoneNumber" required>

        <label for="fullName">Email:</label>
        <input type ="email" id ="email" name="email" required>

        <label for="fullName">Subject:</label>
        <input type ="text" id ="subject" name="subject" required>

        <label for="fullName">Message:</label>
        <textarea id ="message" id ="message" name="message" rows="4" required></textarea>

        <input type = "submit" value = "Submit">


       </form>
    </div>
</body>
</html>