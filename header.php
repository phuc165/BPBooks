<header>
        <div class="bottom_header">
            <a href="home.php">
                <img src="./images/home/header/logo.png" alt="logo" id="logo">
            </a>
            <!-- <div class="dropdownMenu">
                <img src="./images/home/header/categoryIcon.png" alt="" id="categoryIcon">
                <div class="dropdownContent">
                    <p style="font-weight: bold;" align="center">Thể loại</p>
                    <ul>
                        <li><a href="#">Hành động</a></li>
                        <li><a href="#">Phiêu lưu</a></li>
                        <li><a href="#">Tình cảm</a></li>
                        <li><a href="#">Hài hước</a></li>
                        <li><a href="#">Kinh dị</a></li>
                        <li><a href="#">Trường học</a></li>
                        <li><a href="#">Đời thường</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="searchform">
                <input type="text" placeholder="Tìm truyện" class="searchbar" id="search" onkeyup="Search()">
            
                 

                <button type="submit" class="searchbutton">
                    <img src="./images/home/header/searchicon.png" alt="">
                </button>
                <br>
                <div id="resultList" class="search-result hidden">
                        
                        
                        
                </div>   
                
            </div>
            <div style="width: 30%;">
                <a href="giohang.php" class="header_icon">
                    <img src="./images/home/header/cart.svg" alt="cart" onclick="checkLogin()">
                    <p class="header_label">Giỏ hàng</p>
                </a>
                <a href="login.php" class="header_icon">
                    <img src="./images/home/header/account.png" alt="cart">
                    <p class="header_label">Tài khoản</p>
                </a>
                <!-- <a href="logout.php" class="header_icon">
                    <img src="./images/home/header/logout.png" alt="cart">
                    <p class="header_label">Đăng xuất</p>
                </a> -->
            </div>
        </div>
        <script src="./js/search.js"></script>
    </header>