<?php /* Template name: inserir */ ?>

<?php get_header(); ?>

<!------------------------------inicio-------------------------------------->
<?php while ( have_posts() ) : the_post(); ?>
    <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
        <section class="entry-meta">
            <p>Posted on <?php the_date();?> by <?php the_author();?></p>
        </section>
    <?php endif; ?>
    <section class="entry-content">
    <!-----------------inicio---------------------------------------------->
    <?php 

echo"<br><br><br><br><br><br>

        <div class='mensagem'>
            <form method='post' action=''>
                <span><h4>Envia-nos mensagem</h4></span><br>
                <span id='notificacao'></span><br>
  	        <input type='text' name='nome_u' id='nome_u' placeholder='Nome Completo'><br>
                <input type='number' name='tel_u' id='tel_u' placeholder='Telefone'><br>
		<input type='email' name='email_u' id='email_u' placeholder='Digite o E-mail'><br>
                <textarea placeholder='Escreva a mensagem' name='mensagem_u' id='mensagem_u'></textarea><br>
                <input type='submit' value='Enviar Mensagem' name='bot' id='bot'>
            </form>
        </div>
            <script src='https://sapiencia.free.nf/wp-content/themes/jerben1/js/veri_mensagem.js'></script>
    	</div><br>";
        if(isset($_POST['bot'])){
	include "conexao.php";
	$nome = $_REQUEST['nome_u'];
        $telefone = $_REQUEST['tel_u'];
	$email = $_REQUEST['email_u'];
	$mensagem = $_REQUEST['mensagem_u'];
	$dataHora = new DateTime();  
	$DateAndTime = $dataHora->format("Y-m-d h:i:s ");  

	$sql="INSERT INTO mensagens (nome_u,tel_u,email_u,mensagem,data_m) VALUES('$nome','$telefone','$email','$mensagem','$DateAndTime')";
	$inserir=$conexao->prepare($sql);
	$inserir->execute();
	echo"
       <script>
    	var notific= document.getElementById('notificacao');
        notific.innerHTML='Enviada com Sucesso';
	notific.style.color='green';
       </script>";	
}
?>

    <!-------------------------fim-------------------------------->
        <?php the_content(); ?>
        <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
                <span class="category-links">
       Posted under: <?php echo get_the_category_list( ', ' ); ?>
     </span>
            <?php endif; ?></section>
    </article>
    <!---------------------------fim------------------------------>

<?php endwhile; ?>
<?php get_footer(); ?>