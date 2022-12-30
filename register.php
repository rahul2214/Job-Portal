<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registration form</title>
    <style>
    input#name:invalid:focus {
        border: 1px solid red;
    }

    body {
        background-image: url('job16.jpg');
        background-size: cover;

    }
    </style>
</head>

<body>


    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-6  ">
        <div
            class="relative bg-white px-6 pb-5 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
            <div class="mx-auto max-w-md">
                <h2 class="text-2xl  text-center font-bold my-5">
                    Registration Form
                </h2>
                <div class="divide-y  divide-gray-300/50">
                    <div class="space-y-6 text-base leading-7 text-ray-600">
                        <form action="" id="user_form" method="POST">
                            <label for="Name" class="text-md w-40 inline-block font-medium leading-5 text-gray-700">
                                Full Name:
                            </label>
                            <input required type="text" id="Name" name="Name"
                                class="bg-gray-100 inline-block rounded-lg shadow-md py-3 px-4 mb-5 text-base leading-6 placeolder-gray-500"
                                placeholder="Enter full name" required><br />
                            <label for="email"
                                class="text-md w-40 inline-block font-medium leading-3 text-gray-700">Email
                                Address:</label>
                            <input required type="email" id="email" name="email"
                                class="bg-gray-100 inline-block rounded-lg shadow-md py-3 px-4 mb-5 text-base leading-6 placeolder-gray-500"
                                placeholder="Enter email"><br />
                            <label for="number" class="text-md w-40 inline-block font-medium leading-5 text-gray-700">
                                Phone number:
                            </label>
                            <input required type="number" id="number" name="Phone_no"
                                class="bg-gray-100 inline-block rounded-lg shadow-md py-3 px-4 mb-5 text-base leading-6 placeolder-gray-500"
                                placeholder="Enter Phone Number" required><br />
                            <label for="password" class="text-md w-40 inline-block font-medium leading-5 text-gray-700">
                                Password:
                            </label>
                            <input required type="password" id="password" name="password"
                                class="bg-gray-100 inline-block rounded-lg shadow-md py-3 px-4 mb-5 text-base leading-6 placeolder-gray-500"
                                placeholder="Enter password"><br />
                            <label for="password1"
                                class="text-md w-40 inline-block font-medium leading-5 text-gray-700">
                                Confirm Password:
                            </label>
                            <input required type="password" id="password1" name="confirm_password"
                                class="bg-gray-100 inline-block rounded-lg shadow-md py-3 px-4 mb-5 text-base leading-6 placeolder-gray-500"
                                placeholder="Enter confirm password"><br />


                            <button type="submit" id="submit" name="submit"
                                class="w-fit rounded-lg shadow-lg px-5 py-3 bg-green-500 text-white hover:bg-green-400 focus:outline-none focus block">Submit</button>
                            <p style="text-align: center;">Already Registered?<a href="login.php" style="color:blue; text-decoration:
                                underline;">login</a>
                            </p>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>