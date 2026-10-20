<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
</head>
<body>
    {{-- @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
    @endif --}}
    <form action="/add-user" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter user name">
        @error("username")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <input type="text" name="phone" placeholder="enter user phone">
        @error("phone")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <input type="text" name="email" placeholder="enter user email">
        @error("email")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <input type="date" name="dob">
        @error("dob")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male"><span>Male</span>
        <input type="radio" name="gender" value="female"><span>Female</span>
        @error("gender")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <label for="">Skills</label>
        <input type="checkbox" name="skills[]" value="laravel"><span>Laravel</span>
        <input type="checkbox" name="skills[]" value="react"><span>React</span>
        <input type="checkbox" name="skills[]" value="angular"><span>Angular</span>
        @error("skills")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <select name="city" id="">
            <option value="">Select City</option>
            <option value="noida">Noida</option>
            <option value="delhi">Delhi</option>
        </select>
        @error("city")
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br><br>
        <input type="range" name="age" min="18" max="100">
        <br><br>

        <button>Add New User</button>
        <br><br>
    </form>
</body>
</html>