<div class="top-head">
        <div class="account">
            <div class="account-tab">
                <div class="account-tab-item account-tab-login <?php if(!isset($data['signupForm'])) echo "account-tab-active"?>">Đăng nhập</div>
                <div class="account-tab-item account-tab-signup <?php if(isset($data['signupForm'])) echo "account-tab-active"?>">Đăng kí</div>
            </div>
            <div class="login-form <?php if(isset($data['signupForm'])) echo "hide"?>">
                <form method="POST" action="./home/login">
                    <div class="inputBox">
                        <input type="text" name="username" id="" required>
                        <span>Tên đăng nhập</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="password" id="" required>
                        <span>Mật khẩu</span>
                        <?php if(isset($data['isValidLogin'])): ?>
                            <p class="message">* Sai tên đăng nhập hoặc mật khẩu</p>
                        <?php endif; ?>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="login" value="Đăng nhập">
                    </div>
                </form>
            </div>
            <div class="signup-form <?php if(!isset($data['signupForm'])) echo "hide"?>">
                <form method="POST" action="./home/signup">
                    <div class="inputBox">
                        <input type="text" name="username" id="" required>
                        <span>Tên đăng nhập</span>
                        <?php if(isset($data['Message'][0])): ?>
                            <p class="message"><?php echo $data['Message'][0]?></p>
                        <?php endif; ?>
                    </div>
                    <div class="inputBox">
                        <input type="number" name="phone" id="" required>
                        <span>Số điện thoại</span>
                        <?php if(isset($data['Message'][1])): ?>
                            <p class="message"><?php echo $data['Message'][1]?></p>
                        <?php endif; ?>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="password" id="" required>
                        <span>Mật khẩu</span>
                        <?php if(isset($data['Message'][2])): ?>
                            <p class="message"><?php echo $data['Message'][2]?></p>
                        <?php endif; ?>
                    </div>
                    <div class="radio-group">
                        <div class="radio">
                            <input type="radio" name="role" id="radio-student" class="radio-input" value="student" required>
                            <label for="radio-student" class="radio-label">Học sinh</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="role" id="radio-teacher" class="radio-input" value="teacher" required>
                            <label for="radio-teacher" class="radio-label">Giáo viên</label>
                        </div>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="signup" value="Đăng ký">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="public/js/login.js"></script>