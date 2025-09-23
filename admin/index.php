<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-color: #3F89C9;
            --secondary-color: #2FADC3;
            --tertiary-color: #85D55C;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color), var(--tertiary-color));
            --body-bg: #080808;
        }
    </style>
</head>

<body class="bg-[var(--body-bg)] flex items-center justify-center min-h-screen">

    <!-- Login Card -->
    <div class="group relative p-[2px] 
           [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] 
           rounded-[20px] overflow-hidden shadow-lg w-full max-w-lg mx-auto">

        <div class="relative flex flex-col px-10 py-10 rounded-[18px] bg-black/90 backdrop-blur-[600px] text-white">

            <!-- Logo -->
            <div class="flex items-center justify-center w-full mb-6">
                <img src="../images/qonkar_logo.png" alt="Logo" class="w-40">
            </div>

            <!-- User Message -->
            <?php
            if (isset($_GET['error'])) {
                echo '<p class="text-red-500 mb-4 text-center font-semibold">' . htmlspecialchars($_GET['error']) . '</p>';
            } elseif (isset($_GET['success'])) {
                echo '<p class="text-green-500 mb-4 text-center font-semibold">' . htmlspecialchars($_GET['success']) . '</p>';
            }
            ?>

            <!-- Login Form -->
            <form action="login-process.php" method="POST" class="space-y-4 w-full">

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm text-gray-300">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 mt-1 bg-gray-800 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[var(--secondary-color)]"
                        placeholder="Enter your email" required />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm text-gray-300">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 mt-1 bg-gray-800 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[var(--secondary-color)]"
                        placeholder="Enter your password" required />
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full px-6 py-3 rounded-full border-2 border-[var(--secondary-color)] 
                   text-[var(--secondary-color)] font-semibold transition 
                   hover:bg-[var(--secondary-color)] hover:text-white flex items-center justify-center gap-2">
                    Login
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </form>
        </div>
    </div>





</body>

</html>