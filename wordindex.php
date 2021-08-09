
	<?php include 'header.php';


	$wordsor=$db->prepare("SELECT * FROM word order by word_id DESC limit 60");
	$wordsor->execute();

$wordsor2=$db->prepare("SELECT * FROM word where word_durum=:word_durum and word_onecikar=:word_onecikar  order by word_id DESC");
$wordsor2->execute(array(
  'word_durum' => 1,
    'word_onecikar' => 1,

  ));
	 ?>

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



<?php include "leftsidebar2.php"; ?>

	<div class="post_right_part">
						<div class="d-flex flex-wrap justify-content-between">
							<div class="post_part"> 




<div class="w3-container">

	<div class="post_box">
									<div class="post_box_heading">
<center><h1> <b> <i class="fas fa-paperclip"></i> Kelimeler</b></h1></center>


</div></div>




</div>
<br><br><br><br>




				

<?php 

	                $say2=0;

	                while($wordcek2=$wordsor2->fetch(PDO::FETCH_ASSOC)) { $say2++?>


								<div class="post_box">
									<div class="post_box_heading">
										<h3> <i class="fas fa-paperclip"></i> </h3>

										<a href="word-detay.php?word_id=<?php echo  $wordcek2['word_id'];?>">
										<h3><?php echo substr($wordcek2['word_ad'], 0,60)  ?></h3>
									</a>



									</div>

									<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">

											<p class="date">



			<?php 

                   $kategori_id=$wordcek2['kategori_id'];

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


									<center>	<p class="post_desc2"> <?php echo substr($wordcek2['word_detay'], 0,500)  ?>...</p> 
										<p class="post_desc4">
										
										<img src="images/quoteStart.gif" width="32" height="28" alt="Quote">



										 <?php echo substr($wordcek2['word_dipnot'], 0,500)  ?>  	


										 <img src="images/quoteEnd.gif" width="32" height="28" alt="Quote">


										</p>

									</center>


										


<p class="post_desc3 time_desc3">  
	<a href="#">
		<?php 

                   $kullanici_id=$wordcek2['kullanici_id'];

                   $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
                   $kullanicisor->execute(array(
                    'id' => $kullanici_id
                    ));

                   $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

                   echo $kullanicicek['kullanici_unvan'];?>      
    </a> 

    <p class="post_desc3 time_desc3">	<?php echo $wordcek2['word_zaman'] ?> </p>


						<div class="d-flex flex-wrap justify-content-between">
											<ul class="d-flex likes_btn_part">
												<li>
													<a href="#" class="d-flex align-items-center likes_btn2 upLike">
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


	<?php  }?>






<div  class="seperator">
					</div>




	<div  class="seperator">
					</div>














								<div class="post_box">
									<div class="post_box_heading">
										<h3>coask</h3>
									</div>

									<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
											<p class="date">May 11</p>

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

										<h3 class="post_title">coask</h3>

										<p class="post_desc">A.k.a "co-ask". its a <a href="#">frequent</a>
										word on Chines <a href="#">forums.</a> which is usually used individually to express <a href="#">that one`s</a> question is the same as the former questioneer`s </p>

										<p class="post_desc">-What`s the <a href="#">meaning</a> of <a href="#">niubility</a></p>

										<p class="post_desc"><a href="#">#ask #question #bbs #doubt #forum</a></p>

										<p class="post_desc time_desc">by <a href="#">jdcola</a> August 28,20178</p>

										<div class="d-flex flex-wrap justify-content-between">
											<ul class="d-flex likes_btn_part">
												<li>
													<a href="#" class="d-flex align-items-center likes_btn">
														<span class="fa fa-thumbs-up"></span>
														<p>2108</p>
													</a>
												</li>

												<li>
													<a href="#" class="d-flex align-items-center likes_btn">
														<span class="fa fa-thumbs-down"></span>
														<p>268</p>
													</a>
												</li>
											</ul>

											<ul class="d-flex ellipsis_part">
												<li>
													<a href="#">
														<span class="fa fa-sticky-note"></span>
													</a>
												</li>
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








								<div class="pagination_part d-flex justify-content-end">
								  	<ul class="pagination">
									    <li class="page-item "><a class="page-link" href="#">1</a></li>
									    <li class="page-item ">
									      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">4</a></li>
									    <li class="page-item"><a class="page-link" href="#">5</a></li>
									    <li class="page-item"><a class="page-link" href="#">...</a></li>
									    <li class="page-item">
									      <a class="page-link" href="#">Next <span aria-hidden="true">&raquo;</span></a>
									    </li>
									    <li class="page-item">
									      <a class="page-link" href="#">Last <span aria-hidden="true">&raquo;</span></a>
									    </li>
								  	</ul>
								</div>




	<div  class="seperator">
					</div>
	<br><br><br><br><br>


								<div class="post_box">
									<div class="post_box_heading2 ">
										<h3><i class="fas fa-bomb"></i> MOST LIKED <i class="fas fa-bomb"></i></h3>
									</div>

									<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
											

										</div>
										<div class="container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Trend</th>
	      <th scope="col">Hit</th>
	      <th scope="col">Writer</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td><a class="post_desc"></a><p class="post_desc"> <a href="index.html">Elon Musk Trend 1</a> </p></td>
	      <td>Otto</td>
	      <td><p class="post_desc"> <a href="index.html">@mdo</a> </p></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td><p class="post_desc"> <a href="index.html">Trend 1</a> </p></td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>


										
					</div>
				</div>
			</div>




	<div  class="seperator">
					</div>
	<br><br><br><br><br>






								<div class="post_box">
									<div class="post_box_heading align-items-center">
										<h3>TRENDING LIST</h3>
									</div>

									<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
											

										</div>
										<div class="container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Trend</th>
	      <th scope="col">Hit</th>
	      <th scope="col">Writer</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td><a class="post_desc"></a><p class="post_desc"> <a href="index.html">Elon Musk Trend 1</a> </p></td>
	      <td>Otto</td>
	      <td><p class="post_desc"> <a href="index.html">@mdo</a> </p></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td><p class="post_desc"> <a href="index.html">Trend 1</a> </p></td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>


										
					</div>
				</div>
			</div>










								<div class="post_box">
									<div class="post_box_heading2 ">
										
										<h3><i class="fas fa-rocket"></i> TREND LIST <i class="fas fa-rocket"></i></h3>
										
									</div>

									<div class="post_box_content">
										<div class="date_part d-flex flex-wrap justify-content-between align-items-center">
											

										</div>
										<div class="container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Trend</th>
	      <th scope="col">Hit</th>
	      <th scope="col">Writer</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td><a class="post_desc"></a><p class="post_desc"> <a href="index.html">Elon Musk Trend 1</a> </p></td>
	      <td>Otto</td>
	      <td><p class="post_desc"> <a href="index.html">@mdo</a> </p></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td><p class="post_desc"> <a href="index.html">Trend 1</a> </p></td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>


										
					</div>
				</div>
			</div>



	<div  class="seperator">
					</div>




							</div> <!-- context div i -->






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