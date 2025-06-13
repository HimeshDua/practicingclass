<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" text-white w-screen min-h-screen flex items-center justify-center">
  <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data"
        class="bg-white text-black rounded-lg p-8 space-y-6 w-full max-w-md shadow-lg">
    @csrf

    <h2 class="text-2xl font-bold">Register</h2>

    @if(session('success'))
      <div class="text-green-600">{{ session('success') }}</div>
    @endif

    @foreach ($errors->all() as $error)
      <div class="text-red-600 text-sm">{{ $error }}</div>
    @endforeach

    <div class="space-y-1">
      <label>Email</label>
      <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>Password</label>
      <input type="password" name="password" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>Confirm Password</label>
      <input type="password" name="confirm_password" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>Address</label>
      <input type="text" name="address" value="{{ old('address') }}" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>City</label>
      <input type="text" name="city" value="{{ old('city') }}" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>State</label>
      <input type="text" name="state" value="{{ old('state') }}" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>Zip</label>
      <input type="text" name="zip" value="{{ old('zip') }}" required class="w-full border border-gray-300 p-2 rounded-md">
    </div>

    <div class="space-y-1">
      <label>Upload Image</label>
      <input type="file" name="image" accept="image/*" required class="w-full">
    </div>

    <button type="submit" class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-900">
      Submit
    </button>
  </form>
</body>
</html>
