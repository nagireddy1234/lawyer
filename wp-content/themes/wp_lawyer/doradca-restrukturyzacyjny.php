<?php
 /* 
 Template Name: doradca restrukturyzacyjny
 */
 get_header();

 ?>

 <div class="container-fluid text-center firstContainer" >
<p> <strong> Doradca Restrukturyzacyjny </strong></p>
 <p> Wybierz odpowiednia opcję aby dowiedzieć się więcej. </p>
	<p> Zapraszam również do kontaktu telefonicznego. </p> <br/>
	 <div> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" class="arrow"> </div> 
  </div>
<div class="container-fluid prawo1" >
<div class="container" style="color:white;">
<p>
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</p>  


<div class="" style="height:100px; " >
    <a href="http://poligon.scepter.pl/Reddy/wp_lawyer/kontakt/" id="blank">skontaktuj sie &nbsp></a>	 
</div>
</div>
</div>
</div>

<?php get_footer();?>