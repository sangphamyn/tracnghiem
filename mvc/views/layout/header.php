<header class="header">
    <div class="header-inner container">
        <a href="#" class="logo">
            <img src="./public/img/logo.png" class="logo-img">
        </a>
        <navigation class="nav">
            <ul class="nav-main">
                <li class="nav-item">
                    <a href="#0" class="nav-link">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a href="#0" class="nav-link">Menu 1</a>
                </li>
                <li class="nav-item">
                    <a href="#0" class="nav-link">Menu 2</a>
                </li>
                <li class="nav-item">
                    <a href="#0" class="nav-link">Menu 3</a>
                </li>
                <li class="nav-item">
                    <a href="#0" class="nav-link">Menu 4</a>
                </li>
            </ul>
        </navigation>
        <!-- <div class="group-btn">
            <div class="btn-1 btn-login">Đăng nhập</div>
            <div class="btn-1 btn-signup">Đăng kí</div>
        </div> -->
        <?php if (isset($_SESSION['user'])): ?>
            <div class="left-header">
                <div class="joinClass"><i class='bx bx-plus'></i>Tham gia</div>
                <div class="header-user-profile">
                    <div class="profile-img">
                        <img src="https://scontent.fhan3-4.fna.fbcdn.net/v/t1.6435-9/120297248_2673230636327201_4460516408274732802_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=CHlPF2KHt7IAX-a3mk8&_nc_ht=scontent.fhan3-4.fna&oh=82ee74581a5cefc8e804f6c5ce054183&oe=6177D43F" alt="">
                    </div>
                    <div class="profile-name"><?php echo $_SESSION['user']?><i class='bx bx-chevron-down'></i>
                    </div>
                    <div class="user-action">
                        <ul>
                            <li class="user-action-item">
                                <a href="#0" class="user-action-link">Thông tin cá nhân</a>
                            </li>
                            <li class="user-action-item">
                                <a href="./home/logout" class="user-action-link">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="joinClass-modal">
                <div class="close"><i class='bx bx-x'></i></div>
                <div class="joinClass-wrapper">
                    <form method="POST">
                        <h3>Hỏi mã lớp từ giáo viên, sau đó nhập vào đây</h3>
                        <div class="inputBox">
                            <input type="text" name="classCode" id="" required>
                            <span>Mã lớp</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Tham gia">
                        </div>
                    </form>
                </div>
            </div>
            <script src="public/js/header.js"></script>
        <?php else: ?>
           
        <?php endif; ?>
    </div>
</header>