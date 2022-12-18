<header>
    <a href="index.php" class="logo">ISCP</a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
 
  
    </ul>
    
    <style>
        :root{
	--bg-color: #fff;
	--text-color: #221314;
	--second-color: #5a7184;
	--main-color: #6e54fa;
	--big-font: 6rem;
	--h2-font: 3rem;
	--p-font: 1.1rem;
}

header{
	position: fixed;
	top: 0;
	right: 0;
	width: 100%;
	z-index: 1000;
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: transparent;
	padding: 30px 18%;
	transition: ease .40s;
}
.logo{
	font-size: 35px;
	font-weight: 600;
	letter-spacing: 1px;
	color: var(--bg-color);
}
.navbar{
	display: flex;
}
.navbar a{
	color: var(--bg-color);
	font-size: var(--p-font);
	font-weight: 500;
	padding: 10px 22px;
	border-radius: 4px;
	transition: ease .40s;
}
.navbar a:hover{
	background: var(--bg-color);
	color: var(--text-color);
	box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
	border-radius: 4px;
}
        </style>
</header>