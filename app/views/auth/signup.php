<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Wallet - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 h-screen flex justify-center items-center p-4">

    <div class="bg-gray-800 rounded-3xl shadow-2xl flex max-w-4xl w-full overflow-hidden h-[650px]">
        
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center text-white z-10">
            <div class="mb-6">
                <h2 class="text-3xl font-bold mb-2">Smart Wallet.</h2>
                <h3 class="text-xl font-semibold mt-4">Create Account</h3>
                <p class="text-gray-400 text-sm mt-1">Start managing your finance today!</p>
            </div>

            <form action="/smart-wallet-MVC/public/auth/registerPost" method="post" class="space-y-4">
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <input type="text" name="first_name" placeholder="First Name" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400">
                    </div>
                    <div>
                        <input type="text" name="last_name" placeholder="Last Name" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400">
                    </div>
                </div>

                <div>
                    <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400">
                </div>
                
                <div class="relative">
                    <input type="password" name="password" placeholder="Password" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400">
                </div>

                <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition duration-200 mt-2">Sign Up</button>
            </form>

            <p class="text-gray-400 text-sm mt-6 text-center">
                Already have an account? 
                <a href="/smart-wallet-MVC/public/auth/login" class="text-blue-500 hover:underline">Sign In</a>
            </p>

            <p class="text-gray-500 text-xs mt-auto pt-4 text-center">© Smart Wallet 2023, All right reserved</p>
        </div>

        <div class="hidden md:flex md:w-1/2 bg-blue-500 p-10 flex-col justify-between items-center text-white relative overflow-hidden">
            
            <div class="flex-grow flex justify-center items-center z-10 p-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" class="w-full h-auto max-w-md shadow-2xl rounded-3xl">
                    <rect x="25" y="25" width="450" height="450" rx="40" ry="40" fill="#AEEA7C" stroke="#98D868" stroke-width="8"/>
                    
                    <g transform="translate(150, 130) rotate(-10)">
                        <rect x="0" y="0" width="140" height="80" fill="#8BC34A" stroke="#689F38" stroke-width="4" rx="5"/>
                        <rect x="10" y="10" width="120" height="60" fill="#DCEDC8" rx="2"/>
                        <circle cx="70" cy="40" r="20" fill="#8BC34A" stroke="#689F38" stroke-width="2"/>
                    </g>
                    <g transform="translate(170, 150) rotate(-5)">
                        <rect x="0" y="0" width="140" height="80" fill="#4CAF50" stroke="#388E3C" stroke-width="4" rx="5"/>
                        <rect x="10" y="10" width="120" height="60" fill="#C8E6C9" rx="2"/>
                        <circle cx="70" cy="40" r="20" fill="#4CAF50" stroke="#388E3C" stroke-width="2"/>
                        <text x="62" y="52" font-family="Arial" font-size="30" font-weight="bold" fill="#FFF">$</text>
                    </g>
                
                    <path d="M140,220 C140,220 160,420 360,400 C380,300 360,180 360,180 L140,220 Z" fill="#A55D35" stroke="#6D3C1F" stroke-width="6"/>
                    <path d="M140,220 L360,180 C360,180 380,200 360,240 L140,280 C140,280 120,260 140,220 Z" fill="#C47C52" stroke="#6D3C1F" stroke-width="6"/>
                    
                    <path d="M330,200 L330,260 C330,280 350,280 350,260 L350,200" fill="#A55D35" stroke="#6D3C1F" stroke-width="6"/>
                    <circle cx="340" cy="260" r="15" fill="#FFC107" stroke="#FF9800" stroke-width="4"/>
                    
                    <g transform="translate(100, 200) rotate(20)">
                        <circle cx="0" cy="0" r="30" fill="#FFC107" stroke="#FF9800" stroke-width="4"/>
                        <text x="-12" y="12" font-family="Arial" font-size="30" font-weight="bold" fill="#F57F17">$</text>
                    </g>
                    <g transform="translate(400, 180) rotate(-15)">
                        <rect x="-10" y="-25" width="20" height="50" fill="#FFC107" stroke="#FF9800" stroke-width="4" rx="5"/>
                    </g>
                     <g transform="translate(140, 380) rotate(45)">
                        <circle cx="0" cy="0" r="25" fill="#FFC107" stroke="#FF9800" stroke-width="4"/>
                        <text x="-9" y="10" font-family="Arial" font-size="24" font-weight="bold" fill="#F57F17">$</text>
                    </g>
                </svg>
            </div>
            
            <div class="text-center mb-4 z-10">
                <h3 class="text-xl font-semibold mb-4">Join the smart way to save</h3>
                <div class="flex justify-center space-x-2">
                    <span class="w-2 h-2 bg-white rounded-full opacity-50"></span>
                    <span class="w-2 h-2 bg-white rounded-full opacity-100"></span>
                    <span class="w-2 h-2 bg-white rounded-full opacity-50"></span>
                </div>
            </div>
        </div>

    </div>

</body>
</html>