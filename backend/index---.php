<!DOCTYPE html>
<html lang="th-TH">
<head>
<title>Imrontours</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="icon-font/fontello/css/fontello.css">
	<link rel="stylesheet" href="css/main.css">	
    <link rel="stylesheet" href="icon-font/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="icon-font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="js/angular/angular-cookies.min.js"></script>

<script src="js/angular/main.js?v=<?=time()?>"></script>
</head>
<body ng-app="myApp" ng-controller="main">
	<header id=header>
		<div class="logo_n ">
			<img class=logo1 src=images/logo.png alt="imrontours" width="95">
			<div class="" style="text-align: center;font-weight: 600;color: #555">
				<span>IM<span style="color: #5275be">RON</span>TOURS</span>
			</div>
		</div>
		<div class="btn-phone phone-menu visible-responsive ">
			<i class="demo-icon icon-menu"></i>
		</div>	
		<div class=search>
			<form action="" method="post">
				<input id=buscador name="q" type="text" class=input_mid placeholder="ค้นหาโปรแกรมทัวร์" value="">
				<button id=s name="singlebutton" type="submit"><i class="demo-icon icon-search"></i></button>
			</form>
			<div class=suggestionsBox id=suggestions>
				<div class=suggestionList id=autoSuggestionsList>
					<ul id=lookup_suggest></ul>
				
				</div>
			</div>
		</div>
		<div class=language>
			<div class=flag_en></div>
			<span class=button-language>EN</span> 
		</div>
		<div class="page-bar" style="box-sizing: content-box; /* padding: 0 20px 0 200px;*/  max-width: 1600px;   overflow: hidden; background-color: #fff;height: 43px;width: 100%; position: fixed;margin: 60px 0 0 180px;" >
        <ul class="page-breadcrumb">
            <li>
                <a href="index.php"><span>Home</span></a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>All Program</span>
            </li>
        </ul>                            
    </div>


	</header>
	
	<section>
		<div class="menu  menu-open">
			<ul id="menu-categories" class="submenu">
				<li class="menu-login">
					<div id="bar-user" class="bar-user">
					<span class="login_box login_link" title="เริ่มเซสชัน"></span>
					</div>
					<p>imron tour</p>
				</li>
				<li class="active color-windows">
					<div class="icon color-windows">
						<div class="arrow-category">
							<i class="demo-icon icon-home-circled"></i>
						</div>
					</div>
					<span>Home</span>
				</li>
				<li class="active">
					<div class="icon color-category">
						<i class="demo-icon icon-users"></i>
					</div>
					<span>Users</span>
				</li>
				<li>
					<div class="icon color-category">
						<i class="demo-icon icon-list-add"></i>
					</div>
					<span>Add program</span>
				</li>
				<li>
					<div class="icon color-category">
						<i class="demo-icon icon-edit"></i>
					</div>
				<span>Edit program</span>

				</li>
				<li>

				<div class="icon color-category">
				<i class="demo-icon icon-th-list"></i>
				</div>
				<span>All program</span>

				</li>
			</ul>
		</div>
	</section>
	<section class="" style="margin-top: 103px;">
		<div class=content>
			<div class=row-gallery>
			
				<div class=item>
					<section class=container>
						<div class=card >
							<figure class="front app_card">
								<div class=data>
									<div class=data-program>
										<div class=data-name>
											<span class=app_card_system>xxxxxxxxxx</span>
											<div class=app_card_tit>
												<p>xxxxxxxxxxxxx<</p>
											</div>
										</div>
										<div class=info>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
									</div>
								</div>
								<img class=app_card_img src=http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg srcset="http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg 1x" >
								<span class=app_card_version> 2.3</span>
								<span class=app_card_award></span>
							</figure>
						</div>
					</section>
				</div>
				<div class=item>
					<section class=container>
						<div class=card >
							<figure class="front app_card">
								<div class=data>
									<div class=data-program>
										<div class=data-name>
											<span class=app_card_system>xxxxxxxxxx</span>
											<div class=app_card_tit>
												<p>xxxxxxxxxxxxx<</p>
											</div>
										</div>
										<div class=info>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
									</div>
								</div>
								<img class=app_card_img src=http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg srcset="http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg 1x" >
								<span class=app_card_version> 2.3</span>
								<span class=app_card_award></span>
							</figure>
						</div>
					</section>
				</div>
				<div class=item>
					<section class=container>
						<div class=card >
							<figure class="front app_card">
								<div class=data>
									<div class=data-program>
										<div class=data-name>
											<span class=app_card_system>xxxxxxxxxx</span>
											<div class=app_card_tit>
												<p>xxxxxxxxxxxxx<</p>
											</div>
										</div>
										<div class=info>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
									</div>
								</div>
								<img class=app_card_img src=http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg srcset="http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg 1x" >
								<span class=app_card_version> 2.3</span>
								<span class=app_card_award></span>
							</figure>
						</div>
					</section>
				</div>
				<div class=item>
					<section class=container>
						<div class=card >
							<figure class="front app_card">
								<div class=data>
									<div class=data-program>
										<div class=data-name>
											<span class=app_card_system>xxxxxxxxxx</span>
											<div class=app_card_tit>
												<p>xxxxxxxxxxxxx<</p>
											</div>
										</div>
										<div class=info>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
									</div>
								</div>
								<img class=app_card_img src=http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg srcset="http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg 1x" >
								<span class=app_card_version> 2.3</span>
								<span class=app_card_award></span>
							</figure>
						</div>
					</section>
				</div>
				<div class=item>
					<section class=container>
						<div class=card >
							<figure class="front app_card">
								<div class=data>
									<div class=data-program>
										<div class=data-name>
											<span class=app_card_system>xxxxxxxxxx</span>
											<div class=app_card_tit>
												<p>xxxxxxxxxxxxx<</p>
											</div>
										</div>
										<div class=info>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
									</div>
								</div>
								<img class=app_card_img src=http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg srcset="http://www.krabi-spesialisten.com/images/tour/ao-nang-krabi/phi-phi-by-speedboat/phi-phi-speedboat-1.jpg 1x" >
								<span class=app_card_version> 2.3</span>
								<span class=app_card_award></span>
							</figure>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<div class="content see-more">
		<button  class=view-more>ดูเพิ่ม </button>
	</div>
	<div class="menu ">
		<ul id=menu-categories class=submenu>
			<li class="active color-windows">
				<div class="icon color-windows">
					<div class=arrow-category>
					<i class="demo-icon icon-home-circled"></i>
					</div>
				</div>
				<span>Home</span>
			</li>
			<li class=active>
				<div class="icon color-category">
					<i  class="demo-icon icon-users"></i>
				</div>
				<span>Users</span>
			</li>
			<li>
				<div class="icon color-category">
						<i class="demo-icon icon-list-add"></i>
				</div>
				<span>Add program</span>
			</li>
			<li>
				<div class="icon color-category">
					<i class="demo-icon icon-edit"></i>
				</div>
				<span>Edit program</span>
			</li>
			<li>
				<div class="icon color-category">
					<i class="demo-icon icon-th-list"></i>
				</div>
				<span>All Program</span>
			</li>
		</ul>
	</div>
	<footer class="">
		<div class="content social">
			<ul>
				<li><i class=flaticon-twitter16></i></li>
				<li><i class=flaticon-facebook25></i></li>
				<li><i class=flaticon-rss25></i></li>
			</ul>
		</div>
	</footer>
</body>
<style >	
</style>
</html>