<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/styles.css">
    <title>lppm uncp</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="/autenticate" class="sign-in-form" method="POST">
                @csrf
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="message-error text-base">@error('loginError') {{ $message }} @enderror</div>
                <input type="submit" value="Sign In" class="btn">
            </form>

            <form action="/signupstore" method="post" class="sign-up-form">
                @csrf
                <h2 class="title">Sign Up</h2>
                <div class="input-field @error('username') invalid-feedback @enderror">
                    <i class="fas fa-user"></i>
                    <input  type="text" value="{{ old('username') }}" class="" name="username" placeholder="Username">
                </div>
                <div class="message-error">@error('username') {{ $message }} @enderror</div>

                <div class="input-field @error('nidn') invalid-feedback @enderror">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="nidn" value="{{ old('nidn') }}" placeholder="NIDN">
                </div>
                <div class="message-error">@error('nidn') {{ $message }} @enderror</div>

                <div class="input-field @error('email') invalid-feedback @enderror">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div class="message-error">@error('email') {{ $message }} @enderror</div>

                <div class="input-field @error('password') invalid-feedback @enderror">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="message-error">@error('password') {{ $message }} @enderror</div>

                <div class="input-field @error('confirm_password') invalid-feedback @enderror">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                </div>
                <div class="message-error">@error('confirm_password') {{ $message }} @enderror</div>

                <input type="submit" value="Sign Up" class="btn">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>LPPM</h3>
                    <p>Lembaga Penelitian Dan Pengabdian Kepada Masyarakat Universitas Cokroaminoto Palopo</p>
                    <button class="btn" style="cursor:pointer" id="sign-in-btn">Sign In</button>
                </div>
                <img src="/img/signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>LPPM</h3>
                    <p>Lembaga Penelitian Dan Pengabdian Kepada Masyarakat Universitas Cokroaminoto Palopo</p>
                    <button class="btn" style="cursor:pointer" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="/img/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    {{-- <script src="js/app.js"></script> --}}
    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>
</html>
