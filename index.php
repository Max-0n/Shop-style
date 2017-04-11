<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тестовое задание</title>
        <link rel="stylesheet" href="/jquery.range.css">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/media.css">
    </head>
    <body>
        <main>
            <div class="menu_button">Menu</div>
            <aside>
                <ul>
                    <li>
                        <label>Woman</label>
                        <ul class="inner">
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Suits</a></li>
                            <li><a href="#">Trousers</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                        </ul>
                    </li>
                    <li>
                        <label>Man</label>
                        <ul class="inner">
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Suits</a></li>
                            <li><a href="#">Trousers</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                        </ul>
                    </li>
                    <li>
                        <label>Kids</label>
                        <ul class="inner">
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Suits</a></li>
                            <li><a href="#">Trousers</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                        </ul>
                    </li>
                    <li>
                        <label>Shoes&Bags</label>
                        <ul class="inner">
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Suits</a></li>
                            <li><a href="#">Trousers</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                        </ul>
                    </li>
                </ul>
                <div>
                    <label>Colors</label>
                    <div class="colors">
                        <a href="#" style="background: #1e72ee;"></a>
                        <a href="#" style="background: #84d785;"></a>
                        <a href="#" style="background: #3c3d41;"></a>
                        <a href="#" style="background: #848c8f;"></a>
                        <a href="#" style="background: #b8c6c7;"></a>
                        <a href="#" style="background: #cd9148;"></a>
                        <a href="#" style="background: #798289;"></a>
                        <a href="#" style="background: #777777;"></a>
                        <a href="#" style="background: #bdbdbd;"></a>
                        <a href="#" style="background: #eeeeee;"></a>
                    </div>
                </div>
                <div>
                    <label>Size</label>
                    <div class="sizes">
                        <a href="#">XS</a>
                        <a href="#" class="active">S</a>
                        <a href="#">M</a>
                        <a href="#">L</a>
                        <a href="#">XL</a>
                    </div>
                </div>
                <div>
                    <label>Price Range</label>
                    <input type="hidden" class="slider" />
                </div>
            </aside>
            <div class="list">
                <a href="#" class="item" data-price="290">
                    <img src="/dress/1.jpg" />
                    <label>Our Legacy Splash Jacquard Knit</label>
                    <span>Black Grey Plants</span>
                    <div class="price">$290</div>
                    <div class="new">new</div>
                </a>
                <a href="#" class="item" data-price="160">
                    <img src="/dress/2.jpg" />
                    <label>Our Legacy Splash 50s Sweater</label>
                    <span>Grey Melange</span>
                    <div class="price">$160</div>
                </a>
                <a href="#" class="item" data-price="180">
                    <img src="/dress/3.jpg" />
                    <label>Our Legacy Splash First Shirt</label>
                    <span>Navy Crinkle</span>
                    <div class="price">$180</div>
                </a>
                <a href="#" class="item" data-price="90">
                    <img src="/dress/4.jpg" />
                    <label>Our Legacy Splash Mid Sleeve Tee</label>
                    <span>Black Grey Plants</span>
                    <div class="price">$90</div>
                </a>
                <a href="#" class="item" data-price="120">
                    <img src="/dress/5.jpg" />
                    <label>Our Legacy 50s Great Sweat</label>
                    <span>Super Light Print</span>
                    <div class="price">$120</div>
                </a>
                <a href="#" class="item" data-price="320">
                    <img src="/dress/6.jpg" />
                    <label>Our Legacy Splash Jacquard Knit</label>
                    <span>Black Grey Plants</span>
                    <div class="price">$320</div>
                </a>
                <a href="#" class="item" data-price="150">
                    <img src="/dress/7.jpg" />
                    <label>Our Legacy Six Shirt</label>
                    <span>Raster Grey</span>
                    <div class="price">$150</div>
                </a>
                <a href="#" class="item" data-price="570">
                    <img src="/dress/8.jpg" />
                    <label>Our Legacy Bomber Jacket II</label>
                    <span>Faded Olive Twill</span>
                    <div class="price">$570</div>
                </a>
                <a href="#" class="item" data-price="190">
                    <img src="/dress/9.jpg" />
                    <label>Our Legacy 50s Great Sweat</label>
                    <span>Black Grey Plants</span>
                    <div class="price">$190</div>
                </a>
                <button class="load_more">Load More</button>
            </div>
        </main>
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="jquery.range-min.js"></script>
        <script src="shop.js"></script>
    </body>
</html>
