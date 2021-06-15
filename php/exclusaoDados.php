<?php
	include ("topo.php");
?>


<?php
	include ("menu.php");
?>

<main>
    <!--? Slider Area Start-->
    <div class="slider-area slider-area2">
        <div class="slider-active dot-style">
            <!-- Slider Single -->
            <div class="single-slider  d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                         <div class="hero-wrapper">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Seu Cadastro</h1>
                                <p data-animation="fadeInUp" data-delay=".6s"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- Slider Area End -->


	<center>
	<section class="wantToWork-area section-bg3" data-background="../assets/img/gallery/section_bg01.png">
    <div class="container">
        <div class="wants-wrapper w-padding2">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
						<h1>

							<?php		
					
								$criterio=$_POST['criterio'];
								$chave=$_POST['chave'];
								$chave = trim($chave);
								$criterio = $_POST["criterio"];
								$chave = $_POST["chave"];
								
											
								if (!$criterio || !$chave){
									echo 'Não foi possivel completar a ação!';
									exit;
								}
								
								$criterio = addslashes($criterio);
								$chave = addslashes($chave);
								$db = mysqli_connect('localhost:3306','root','','cadastro_bd'); 
								
								if (!$db){
									die('não encontrei o servidor');
								}
								
									mysqli_select_db($db,'cadastro_bd');
									$query = "DELETE From cadastro where $criterio = '$chave'";
									$result = mysqli_query($db,$query);
									echo mysqli_affected_rows($db)." Cadastro exluído com sucesso. Até mais!.</br>"; 
									mysqli_close($db);
							?>	
						
							<br/><br/>
						</h1>
			<div class="form-group mt-3" >
                <button class="button button-contactForm boxed-btn" type="button" onclick= "window.location.href = '../php/index.php';">Voltar</button>
             </div>
			<br/>
			<br/>
			<br/>
		</center>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
<?php
	include ("rodape.php");
?>

<?php
	include ("base.php");
?>