<?php include "header.php";
$wordsor=$db->prepare("SELECT * FROM word where word_id=:word_id");
$wordsor->execute(array(
	'word_id' => $_GET['word_id']
	));

$wordcek=$wordsor->fetch(PDO::FETCH_ASSOC);
$wordsor2=$db->prepare("SELECT * FROM word order by word_id DESC limit 60");
$wordsor2->execute(array());
?>


<!-- second nav subbar eklenecek
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Manchets</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Game</a>
        </nav>
      </div>

-->

<link type="text/css" rel="stylesheet"  href="entry.css">

<!-- Content 
-->
<section class="container-fluid">
	<div class="row">
		<div class="add_section">
			<div class="add_content">
				<figure>
					<img src="assets/img/big-ad.png" alt="" class="img-fluid">
				</figure>
			</div>
		</div>
	</div>
</section>

	


<section class="container-fluid">
	<div class="row">

		<div class="post_section">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="left_sidebar">
					<a href="javascript:;" class="sidebar_menu">
						<span class="fa fa-bars"></span>
					</a>


						<div class="left_sidebar_content">
							<div class="sidebar_header">
								<h3 class="title al"> <i class="fas fa-kiwi-bird fa-2x"></i>...Yeni Kelimeler</h3>

	<!-- refresh butonu			
								<a href="javasctipt:;" class="refresh_btn">
									 Refresh
									<i class="fas fa-redo-alt"></i>
								</a>
	-->


							</div>
							
							<ul class="sidebar_list">



								<?php 

	                $say=0;

	                while($wordcek2=$wordsor2->fetch(PDO::FETCH_ASSOC)) { $say++?>







								<li>
									<a href="word-detay.php?word_id=<?php echo  $wordcek2['word_id'];?>" class="">

										<?php echo substr($wordcek2['word_ad'], 0,50)  ?>...


										<span class="number"> <?php echo $wordcek2['word_id'] ?></span>
									</a>
								</li>


								<?php  }?>



								<li>
									<a href="#" class="">
										geceye unutulmuş bir futbolcu adı bırak 
										<span class="number">27</span>
									</a>
								</li>

								<li>
									<a href="#" class="">
											us polo assn 59,95 tl tek fiyatla morhipo'da
										<span class="number">2</span>
									</a>
								</li>

								<li>
									<a href="#" class="">
										bir türlü sonu gelmeyen kemalist bayramları 
										<span class="number">24</span>
									</a>
								</li>

								


							</ul>
						</div>
					</div>






				<div class="post_right_part">
					<div class="d-flex flex-wrap justify-content-between">
						<div class="post_part">



							<div class="post_box">
								<div class="post_box_heading">
									<a href="#">
										<h3>  <?php echo $wordcek['word_ad'] ?> </h3></a>
								</div>

								<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
											<p class="date">



			<?php 

                   $kategori_id=$wordcek['kategori_id'];

                   $kategorisor=$db->prepare("SELECT * FROM kategori where kategori_id=:id");
                   $kategorisor->execute(array(
                    'id' => $kategori_id
                    ));

                   $kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

                   echo $kategoricek['kategori_ad'];


            ?> 
               </p>

											<ul class="social_icon d-flex align-items-center">
												<li>
													<a href="#">
														<span class="fab fa-twitter"></span>
													</a>
												</li>

												<li>
													<a href="#">
														<span class="fab fa-facebook-f"></span>
													</a>
												</li>

												<li>
													<a href="#">
														<span class="fa fa-share-alt"></span>
													</a>
												</li>
											</ul>
										</div>
<center>
			<p class="post_desc2"> <?php echo $wordcek['word_detay'] ?> </p>
			<p class="post_desc4"> 
			<img src="images/quoteStart.gif" width="32" height="28" alt="Quote">
			<?php echo $wordcek['word_dipnot'] ?> 
			<img src="images/quoteEnd.gif" width="32" height="28" alt="Quote"></p>

</center>



		<p class="post_desc3 time_desc3 ">

		 <a href="#"><?php 

                   $kullanici_id=$wordcek['kullanici_id'];

                   $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
                   $kullanicisor->execute(array(
                    'id' => $kullanici_id
                    ));

                   $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

                   echo $kullanicicek['kullanici_unvan'];


                   ?>
                   	
                   </a> </p>


            
		<p class="post_desc3 time_desc3 ">       <?php echo $wordcek['word_zaman'] ?></p>

									<div class="d-flex flex-wrap justify-content-between">
										<ul class="d-flex likes_btn_part">
											<li>
												<a href="#" class="d-flex align-items-center likes_btn upLike">
													<span class="fa fa-thumbs-up"></span>
													<p>2108</p>
												</a>
											</li>

											<li>
												<a href="#" class="d-flex align-items-center likes_btn DownLike">
													<span class="fa fa-thumbs-down"></span>
													<p>268</p>
												</a>
											</li>
										</ul>

										<ul class="d-flex ellipsis_part">
											<li>
												<a href="#">
													<span class="fa fa-flag"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
<br>
				<br>
				<br>
				<br>
				
	<div  class="seperator">
				</div>


	




		<?php 
							$kullanici_id=$kullanicicek['kullanici_id'];
							$word_id=$wordcek['word_id'];

	$yorumsor=$db->prepare("SELECT * FROM comment2 where word_id=:word_id and com2_onay=:com2_onay");
							$yorumsor->execute(array(
								'word_id' => $word_id,
								'com2_onay' => 1
								
								)); 
								?>




				<!-- ilerde rankına(like) göre yorum sıralayacam unutma not -->			
	<?php 

	$say2=0;

	while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) { $say2++ ?>

	<div class="post_box">
							<div class="post_box_content">
											<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
												<p class="date"><?php echo $say2?></p><br>

												<ul class="social_icon d-flex align-items-center">
													<li>
														<a href="#">
															<span class="fab fa-twitter"></span>
														</a>
													</li>

													<li>
														<a href="#">
															<span class="fab fa-facebook-f"></span>
														</a>
													</li>

													<li>
														<a href="#">
															<span class="fa fa-share-alt"></span>
														</a>
													</li>
												</ul>
											</div>

<center>	<p class="post_desc2"><?php echo $yorumcek['com2_detay'] ?> </p>
			<p class="post_desc4"> 
			<img src="images/quoteStart.gif" width="32" height="28" alt="Quote">
			 <?php echo $yorumcek['com2_cumle'] ?> 
			<img src="images/quoteEnd.gif" width="32" height="28" alt="Quote"></p>
</center>	
	



											<?php  $ykullanici_id=$yorumcek['kullanici_id'];

											$ykullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
											$ykullanicisor->execute(array(
												'id' => $ykullanici_id
												));

											$ykullanicicek=$ykullanicisor->fetch(PDO::FETCH_ASSOC); ?>



				<p class="post_desc3 time_desc3 "><a href="#"> <?php echo $ykullanicicek['kullanici_unvan'] ?></a></p>

				<p class="post_desc3 time_desc3 "> <?php echo $yorumcek['com2_zaman'] ?></p>

											<div class="d-flex flex-wrap justify-content-between">
												<ul class="d-flex likes_btn_part">
													<li>
														<a href="#" class="d-flex align-items-center likes_btn upLike">
															<span class="fa fa-thumbs-up"></span>
															<p>2108</p>
														</a>
													</li>

													<li>
														<a href="#" class="d-flex align-items-center likes_btn DownLike">
															<span class="fa fa-thumbs-down"></span>
															<p>268</p>
														</a>
													</li>
												</ul>

												<ul class="d-flex ellipsis_part">
													<li>
														<a href="#">
															<span class="fa fa-flag"></span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>


		<br>
		<br>
						<br>
		<div  class="seperator">
						</div>
		<?php } ?>


			






	

<!--

	
function squareRoot(){
   var getNumber,result,div1,div2;
   getNumber=prompt("Lütfen Buraya Yapıştır","Hey Buraya");
div1="<a href='#''>";
div2="</a>";
   result= div1+getNumber+div2;
 //  result=Math.sqrt(getNumber);


   document.querySelector('#result').innerHTML=result;
}

-->


<script>

function writeNumbers(el) {
                var txt = document.getElementById("text");
                getNumber=prompt("Lütfen Buraya Yapıştır","Hey Buraya");
                //var number = el.innerHTML;
                txt.value = txt.value + "<a href='#'>" + getNumber+"</a>";
                
            }

function writeNumbers2(el) {
                var txt = document.getElementById("text2");
                getNumber=prompt("Lütfen Buraya Yapıştır","Hey Buraya");
                //var number = el.innerHTML;
                txt.value = txt.value + "<a href='#'>" + getNumber+"</a>";
                
            }

	function writeNumbers3(el) {
	                var txt = document.getElementById("text3");
	                getNumber=prompt("Lütfen Kırmızı Görünmesini İstediğin Kelimeyi Yaz ","Hey Buraya");
	                //var number = el.innerHTML;
	                txt.value = txt.value + "<a href='#'>" + getNumber+"</a>";
	                
	            }







</script> 


		<div class="post_box">
			<div class="post_box_content">
			<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
			</div>
			<div class="container-fluid mt-3">
			<h3 class="post_title"></h3>
			<p class="post_desc">
			  <div class="panel-body">
	                    







    </div>
   </div>





<!-- yeni form verisi -->

<div id='add-form'>




<?php if (isset($_SESSION['userkullanici_mail'])) {?>


<form action="nedmin/netting/islem.php" class="simple_form new_definition"  accept-charset="UTF-8" method="POST">

    <input type="hidden" name="authenticity_token" value="" /><div class='blue-inner'>


    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

    <input type="hidden" name="word_id" value="<?php echo $wordcek['word_id'] ?>">

    <input type="hidden" name="gelen_url" value="<?php 
                                        echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""; 

                                        ?>">


	<div id='add_form'>

	<div class="input text optional definition_meaning">
	    <textarea class="text optional" placeholder="Yeni Tanım Ekle..." name="com2_detay" id="text3" required="required" rows="10" ></textarea>
	</div>


	<button type="button"  onclick=writeNumbers3(this)   class="btn btn-danger"  > Önemli</button>


	<div class="input text optional definition_example">
		<textarea class="text optional" placeholder="Bir cümle içerisinde nasıl kullanıldığına dair örnek ver" name="com2_cumle" id="text2" required="required"></textarea>
	</div>


	<button type="button"  onclick=writeNumbers2(this)   class="btn btn-danger"  > Önemli</button>




	<div class='disclaimer'>
	</div>
	</div>
	</div>

	<input class='button large expand radius submit-button' name="yorumkaydet2" type='submit' value='Tanım Ekle!'>
	    


	    </form>

<?php } else {?>

	Yorum yazabilmek için lütfen <a style="color:red" href="register.php">kayıt</a> ol ya da <a style="color:red" href="login.php"> giriş yap</a>.

									<?php } ?>




	            </div>




		<div class="post_box">
					<div class="post_box_content">
									<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
										

										
									</div>


									<p class="post_desc2"><i>Tanım eklerken incitici olmamaya özen göster lütfen. Dilersen <a href="#">kuralları</a>
									okuyabilir veya <a href="#">gizlilik politikamızı</a> gözden geçirebilirsin. İyi eğlenceler!</i> </p>


									
									<p class="post_desc time_desc "><a href="#">Fuzzyficator</a></p> 

									<div class="d-flex flex-wrap justify-content-between">
										

										<ul class="d-flex ellipsis_part">
											
										</ul>
									</div>
								</div>
							</div>


<div  class="seperator">
				</div>






		<div class="d-flex flex-wrap justify-content-between">
									
			<ul class="d-flex ellipsis_part">
										
<!--
											<li>
												<a href="#">
													<span class="fa fa-ellipsis-h"></span>
												</a>
											</li>

-->
										</ul>
									</div>
								</div>
							</div>

<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border:10px solid #ffc640;
    }
</style>



						</div>

						<div class="ad_part">
							<div class="social_part">
								<figure class="logo">
									<img src="assets/img/logoresize.png" alt="">
								</figure>


								

								<?php include 'rightbar.php'; ?>













							<div class="add_box">
						



								<figure class="mb-3">

							        <img src="assets/img/ad-img.png" alt="" class="img-fluid">

								</figure>

								<figure class="mb-3">
									<img src="assets/img/ad-img.png" alt="" class="img-fluid">
								</figure>

								<figure class="mb-3">
									<img src="assets/img/ad-img.png" alt="" class="img-fluid">
								</figure>

								<figure class="mb-3">
									<img src="assets/img/ad-img.png" alt="" class="img-fluid">
								</figure>

								<figure class="mb-3">
									<img src="assets/img/ad-img.png" alt="" class="img-fluid">
								</figure>

								<figure>
									<img src="assets/img/ad-img.png" alt="" class="img-fluid">
								</figure>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid mb-2">
	<div class="row">
		<div class="add_section">
			<div class="add_content">
				<figure>
					<img src="assets/img/big-ad.png" alt="" class="img-fluid">
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- / Content -->
	<?php include 'footer.php';?>