<style> 
* {margin: 0;padding: 0}
		input {outline: none;}
		button {outline: none;}
		a {color: #000}
		a:hover {color: #000}
		ul {margin: 0;padding: 0}
		.col-md-2 {padding: 0;margin: 0}
		.row {padding: 0;margin: 0}
		nav{background: #F7BD33;}
		nav li:hover a {text-decoration: none;font-size: 14px;}
		nav ul{display: flex;}
		nav> ul li{list-style: none;}
		nav > ul li a {
		    display: block;
		    padding: 0 20px;
		    line-height: 40px;
		    color: #5f3008eb;
		    text-decoration: none;
		    font-weight: bold;}
		/*Ẩn các menu con cấp 1,2,3*/
		nav li ul{
		    display: none;
		    min-width: 165px;
		    position: absolute;}
		nav li>ul li{
		    width: 100%;
		    border: none;
		    border-bottom: 1px dotted #777;
		   
		    background: #fff;
		    text-align: left;}
		nav li > ul li {height: 40px;}
		nav li>ul li a {color: #000;font-size: 14px;font-weight: normal;}
		nav li > ul li:hover > a {color: #C41010;}
		/*khi hover thì hiện menu con*/
		nav  li:hover > ul{ display:  block;}
		/*Hiển thị menu con cấp 2,3,4 bên cạnh phải*/
		nav > ul li > ul li >ul{
		    margin-left: 167px;
		    margin-top: -40px;
		    min-width: 150px;}
		.fa .fa-chevron-down {font-size: 100px;}
		.fa {font-size: 7px;}
		 h2 {font-family: cursive new;color: #EDB01F;margin-top:30px;margin-bottom: 20px}
		h2:hover {color: #D4841D}
		a h2:hover {text-decoration: none;}
		a:hover {text-decoration: none;}
		.thumbnail img {max-width: 100%;border-radius: 20px;}
		.thumbnail {border: none;}
		.thumbnail a {font-weight: bold;}
		.thumbnail a:hover {color: red}
		button {background: #fff;border: none;}
		button:click {border: none;}
		.container-fluid > .navbar-collapse {
		    margin-right: 0;
		    margin-left: 0;}
		.navbar-collapse {padding: 0}
		.glyphicon {font-size: 20px;}
		.col-md-3 {position:static; }
		.col-md-5 {position:static; }
		.col-md-7 {position:static; }


		</style>