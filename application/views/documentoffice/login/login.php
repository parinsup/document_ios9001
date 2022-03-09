<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .container-login {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: #f2f2f2;
    }
    .wrap-login {
        width: 1170px;
        overflow: hidden;
        background-color: #fff;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        flex-direction: row-reverse;
    }
    .login-form {
        padding: 205px 65px 205px 40px;
    }
    .login-more {
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    z-index: 1;
    }
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    }
    .btn{
        width: 145px;
        font-weight: 600;
    }
    body{
        font-family: Poppins-Regular;
    }
    .header{
        font-weight: bolder;
        font-size: 28px;
    }
    .imagebackground{
        width: 100%;
        height: 100%;
        object-fit: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body>
    <div>
        <div class="container-login">
            <div class="wrap-login">
                <div class="col-6 login-form">
                    <div class="text-center header p-3">ACCOUNT LOGIN</div>
                    <div class="d-flex px-3 p-4">
                        <div class="col-6 px-1">
                            <input class="form-control" placeholder="Username" required>
                        </div>
                        <div class="col-6 px-1">
                            <input class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="d-flex d-grid gap-2 justify-content-center px-3 px-4 pb-3">
                    <button class="btn btn-success">SIGN IN</button>
                    <button class="btn btn-danger">Cancel</button>  
                    </div>
                </div>
                <div class="col-6">
                    <img class="imagebackground" src="../assets/image/ncc.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>