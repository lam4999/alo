<?php
$message = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = check($_POST['name']);
    $email = check($_POST['email']);
    $pass = check($_POST['password']);
    $passCheck = check($_POST['password_check']);
    $address = check($_POST['adress']);
    
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['adress'])){
        $checkEmail = loadEmailUser($email);
        if(is_array($checkEmail)){
            $message = "Email đã tồn tại vùi lòng thử lại!!!";
        }else if($pass != $passCheck){
            $message = "Mật Khẩu không trùng nhau!!";
        }else{
            
        }
    }
}
?>

<main class="bg_gray">

    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Sign In or Create an Account</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
                    <form action="" method="post">
                            <div class="form_container">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email_2" placeholder="Email*">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password_in_2" value="" placeholder="Password*">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password_check" id="password_in_2" value="" placeholder="Password*">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="adress" id="addess" value="" placeholder="Addess">
                            </div>
                            <hr>
                            
                            <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
                        </div>
                    </form>
                    
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>