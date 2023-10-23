<?php /* Template name: lista agora */ ?>

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

try {
    $user = "if0_34644766";
    $passe = "8PlqdEBMvh";
    $bdado = "if0_34644766_mensagens";
    $host = "sql112.infinityfree.com";
    $conexao = new PDO("mysql:dbname=$bdado;host=$host",$user,$passe);

}catch (PDOException $erro){
    echo $erro->getMessage();

}

$sql="SELECT * FROM mensagens";
$list = $conexao->prepare($sql);
$list->execute();
foreach( $list as $linhas){
echo"<br>";
echo '<div class="sms">
<h5><a href="#">'.$linhas['nome_u'].'</a></h5>
<span>'.$linhas['mensagem'].'</span><br>
<span style="text-align:right; color:green; font-size:9px;">Tel.: '.$linhas['tel_u'].'</span> / <span style="text-align:right; color:green; font-size:9px;">E-mail: '.$linhas['email_u'].'</span><br>
<span style="text-align:right; color:red; font-size:8px;">'.$linhas['data_m'].'</span>
</div><span style="text-align:right; font-size:9px;"><a href="http://sapiencia.free.nf/wp-content/themes/jerben1/delete_m.php?id_m='.$linhas['id_mensagem'].'">Excluir</a></span>';
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