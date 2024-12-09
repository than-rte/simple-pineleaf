<html>

<head>
    <title>Pine'Leaf | Register</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/guest.css" />
</head>

<body class="page">
    <div class="circle"></div>
    <header class="header header-login">
        <a href="/home.php">
            <img class="brand-logo" src="/imgs/brand.png" alt="Brand Logo" />
        </a>
    </header>
    <section class="card-layout">
        <div class="card-login-out">
            <div class="card-login-in">
                <h1 class="card-title">
                    Register
                </h1>
                <form class="form-login " action="">
                    <div class="form-group-2">
                        <div class="form-group">
                            <label for="First Name">First Name</label>
                            <input type="text" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="Middle Name">Last Name</label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Last Name">Last Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-group">
                        <label for="Birth Date">Birth Date</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="form-submit">
                        <a href="/login.php">Already have an account? <span>Login here</span></a>
                        <button class="btn-login" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const pw = document.getElementById('pw');
        const spw = document.getElementById('show-pw');
        spw.addEventListener('change', function() {
            if (pw.type === 'password') {
                pw.type = 'text';
            } else {
                pw.type = 'password';
            }
        })
    </script>
</body>

</html>