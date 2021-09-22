 <?php
    include_once('user.php');
    DangNhap();
?> 

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img-cache.coccoc.com/image2?i=2&l=50/645524174" type="image/x-icon" /><script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script><script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="HTML-09.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="left">
            <h1><b>facebook</b></h1>
            <p>Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</p>
        </div>
        <div class="right">
            <form method ="post" action="">
                <div class="login">
                    <div class="enter">
                        <input type="text" placeholder="Email hoặc số điện thoại" name ="User"> <br>
                    </div>
                    <div class="enter">
                        <input type="password" placeholder="Mật khẩu" name ="Password"> <br>
                    </div>
                    <!-- <button type="button">
                        <a href="https://www.facebook.com/">
                        <b>Đăng nhập </b> 
                        </a>
                    </button> -->
                    <button type="submit"><b>Đăng nhập</b></button>
                    <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0">
                    Quên mật khẩu?
                    </a>
                    <hr>
                    <a href="https://www.facebook.com/">
                        <button><b>Tạo tài khoản mới</b> </button>
                    </a>
                </div>
                <p>
                    <a href="https://www.facebook.com/pages/create/?ref_type=registration_form">
                        <b>Tạo trang</b>
                    </a> dành cho người nổi tiếng, nhãn hiệu hoặc doanh nghiệp.
                </p>
            
            </form>
        </div>  

    </div>
</body>

</html>