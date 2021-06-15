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

								$nome = $_POST['nome'];
								$sobrenome = $_POST['sobrenome'];
								$sexo = $_POST['sexo'];
								$tipo_def = $_POST['tipo_def'];
								$email = $_POST['email'];
								$senha = $_POST['senha'];
											
													
								if (!$nome || !$sobrenome || !$sexo || !$tipo_def || !$email || !$senha){
									die( 'voce não preencheu todos os dados. Repita o cadastro novamente<br />');
								}
													
								$db = mysqli_connect('localhost:3306','root','','cadastro_bd'); 
								if (!$db){
									die('não encontrei o servidor');
								}
													
								$query = "insert into cadastro (nome, sobrenome, sexo, tipo_def, email, senha) values ('$nome','$sobrenome','$sexo', '$tipo_def', '$email', '$senha')";
								$result = mysqli_query($db,$query);
								if ($result){
									echo  mysqli_affected_rows($db).' cadastro realizado com sucesso. Agora fique à vontade para compartilhar seus comentários conosco</br>'; 
								}
									else{
										echo mysqli_error($db).'Erro!<br>';
										mysqli_close($db); 
									}
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
		
		<!-- (COMENTARIOS) -->
<section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
				
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
					
                        <!-- COMENTARIO 1 -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>Texto</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="../assets/img/icon/testimonial.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Nome</span>
                                    <p>Profissão</p>
                                </div>
                            </div>
                        </div>
						
						
                        <!-- COMENTARIO 2 -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="../assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>Texto</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="../assets/img/icon/testimonial.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Nome</span>
                                    <p>Profissão</p>
                                </div>
                            </div>
                        </div>
						
						
                    </div>
                    <!-- Testimonial End -->
					
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIM DOS COMENTÁRIOS -->

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