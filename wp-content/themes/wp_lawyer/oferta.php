<?php
 /* 
 Template Name: Oferta
 */
 get_header();

 ?>


<div class="container-fluid text-center firstContainer">
    <p> <strong>Oferta </strong></p>   
    <p> Wybierz odpowiednia opcję aby dowiedzieć się więcej. </p>
	<p> Zapraszam również do kontaktu telefonicznego. </p>  <br/>
<div>     <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" class="arrow" alt="arrow-down">
 </div> 	 
</div>
  
  <!-- oferta starts-->
 
  <ul id="myTab" class="nav nav-pills nav-justified d-flex justify-content-between" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#oferta1">Dla firm<p class="plus">+</p>
		 <p class="minus">-</p>
		</a>
    </li>
    <li class="nav-item" id="navLink">
      <a class="nav-link" data-toggle="pill" href="#oferta2">Dla sadow<p class="plus">+</p> <p class="minus">-</p> </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#oferta3">Dla wierzycieli<p class="plus">+</p> <p class="minus">-</p></a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  
    <div id="oferta1" class="container tab-pane active">
	<p>
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</p> 
	  
	 <div class="container-fluid" style="height:100px;"> 
     
		<a href="http://poligon.scepter.pl/Reddy/wp_lawyer/kontakt/" id="blank">skontaktuj sie &nbsp></a>	 

</div>
</div>
    
    
	<div id="oferta2" class="container tab-pane fade"><br>
       <h6 style="text-align:center;"> Dla shadow </h6> <br/>
     <p style="padding-left:20px;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.ullamco laboris nisi ut aliquip ex ea commodo consequat</p> 
      <p style="padding-left:20px;">  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br/> 
	    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	
	 <div class="container-fluid" style="height:100px;" >
    <a href="http://poligon.scepter.pl/Reddy/wp_lawyer/kontakt/" id="blank">skontaktuj sie &nbsp></a>	  
</div>
</div>
	  
    <div id="oferta3" class="container tab-pane fade"><br>
        <h6 style="text-align:center;"> Dla wierzycieli </h6> <br/>
     <p style="padding-left:20px;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.ullamco laboris nisi ut aliquip ex ea commodo consequat</p> 
      <p style="padding-left:20px;">  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br/> 
	    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  <ul style="list-style-type: circle;">
	   <li> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
	  <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
	  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
	   <li>  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</li>
	   <li>Duis aute irure dolor in reprehenderit </li>
	   <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
	  <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
	  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
	   <li>  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</li>
	   <li>Duis aute irure dolor in reprehenderit </li>
	  
	  </ul>
	  <div class="container-fluid" style="height:100px;" >
		<a href="http://poligon.scepter.pl/Reddy/wp_lawyer/kontakt/" id="blank">skontaktuj sie &nbsp></a>	 
</div>
</div>
 </div>
   
<?php get_footer();?>
