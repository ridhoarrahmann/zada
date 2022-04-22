<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>register-style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="register-card">
        <div class="row">
            <div class="col-md-6 col1">
               \
              </div>
            </div>
            <div class="col-md-6 col2">
                <div class="register-form-container">
                <h2>Register</h2>

                <form class="user_registration" action="<?= base_url('auth/register')?>" method ="post">
                   
                    <div class="register-form">
                    <input type="text" name="username" placeholder="Username" value="<?= set_value('username')?>">
                       
                    </div>
                   
                   
                    
                    <div class="register-form">
                    <input type="password" name="password1" placeholder="Password" value="<?= set_value('password')?>">
                    </div>
                    <div class="register-form">
                        <input type="password" name="password2" placeholder="Confirm Password" value="<?= set_value('password')?>">
                    </div>
                    <center> 
                    
                    
                    <small><?= form_error('username') ?> </small>
                   
                    <small><?= form_error('password1') ?> </small>
                    <small><?= form_error('password2') ?> </small>
                    </center>
                    
                    <div class="btn-register">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>