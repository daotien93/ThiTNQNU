<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cập nhật thông tin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./css/stylee.css">
</head>
<body>
    
    <div class="registration-form">
        <form action="./PHP/main.php">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Mã học sinh" name = "mahs">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Họ Tên" name = "hoten">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Lớp" name  = "class">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Khối" name = "khoi1">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Địa chỉ"  name = "address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Email" name = "email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Ngày Sinh" name = "date1">
            </div>
          
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Quê Quán" name = "que">
            </div>
        
            <div class="form-group">
                <button type="button" class="btn btn-block create-account value = 'btnLogin'">Cập nhật</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>