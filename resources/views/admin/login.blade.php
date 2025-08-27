<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div x-data="{ showPassword: false }" class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                    <i class="fas fa-user-shield text-blue-600 fa-lg"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Login Admin</h2>
                <p class="text-gray-600 mt-2">Silakan login untuk masuk ke dashboard</p>
            </div>

            <!-- Error Message -->
            @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                {{ session('error') }}
            </div>
            @endif
            @if(session('status'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
                {{ session('status') }}
            </div>
            @endif
            @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                <ul class="list-disc ml-4">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Form -->
            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <div class="relative">
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-600 focus:border-transparent transition-colors"
                            placeholder="admin@desa.test" />
                        <i class="fas fa-envelope absolute right-3 top-4 text-gray-400"></i>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-600 focus:border-transparent transition-colors"
                            placeholder="••••••••" />
                        <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600"
                            @click="showPassword = !showPassword">
                            <i :class="showPassword ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                        </button>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 focus:ring-4 focus:ring-red-600 focus:ring-opacity-50 transition-colors">
                    Masuk
                </button>
            </form>
        </div>
    </div>
</body>

</html>