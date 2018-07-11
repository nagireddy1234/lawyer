<?php
 /* 
 Template Name: Kontakt
 */
 get_header();

 ?>

<div class="container-fluid text-center firstContainer">
    <p> <strong>Kontakt </strong></p>    
    <p>Skontaktuj się z nami. Możesz również użyć formularza kontatkowego, </p>
	<p> aby wyslać do nas Wiadomośc.</p> <br/>
	<div> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" class="arrow"> </div>  
 </div> 
 <!--end of the para-->
 
<div class="container-fluid text-center kontakt">
<div class="row">
   <div class="col-sm-4" >
   <p><strong>Dane kontaktowe</strong></p>
   <p>Ul. Człuchowska 74/15</p>
   <p>01-360 Warszawa</p>
    </div>
   <div class="col-sm-4" style="position:relative">
    <div class="contact-frame"> </div>
   <p> <strong>Telefon kontaktowy </strong></p>
   <p>+22 881 332282</p>
   <p>+22 211 822444</p>
   </div>
   <div class="col-sm-4">
   <p><strong>Adresy email </strong></p>
   <p>biuro@marfilipczak.pl</p>
   <p>mf@marfilipczak.pl</p>
    </div>
   </div>
</div> 
<!--end of the para1-->  

<div class="container-fluid text-center kontakt2">
<p  style="color:#11305d; align:center" id="form1"> <b>Formularz kontaktowy </b></p>
<div class="container text-center">
<div class="row" >  
 <div class="col-lg-3">
 <form action="#">
    <div class="form-group">
      <label for="name"></label>
      <input type="text" class="form-input" id="form" placeholder="imię">
    </div>
	</form>
 </div>
 <div class="col-lg-3">
 <form action="#">
 <div class="form-group">
      <label for="name"></label>
      <input type="text" class="form-input" id="form" placeholder="Nazwisko">
    </div>
	</form>
 </div>
 <div class="col-lg-3">
 <form action="#">
    <div class="form-group">
      <label for="email"></label>
      <input type="email" class="form-input" id="form" placeholder="Adres e-mail">
    </div>
	</form>  
 </div>
 <div class="col-lg-3">
 <form action="#">
    <div class="form-group">
      <label for="number"></label>
      <input type="tel" class="form" id="form" placeholder="Nr telefonu(opcjonalnie)">
    </div>
	</form>
 </div>
 </div>
 </div> 
<div class="container text-center" >  
 <form action="#">
 <div class="form-group">
  <label for="content"> </label>
  <textarea type="text" class="form-control" rows="12" id="content" placeholder="treść  twojej wiadomości"></textarea>
</div>
 <button type="submit" class="btn" style="background-color:#11305d; float:right; color:white; border-radius:0; padding:10px 20px;">Wyślij LIST</button> 
 </form>
 </div>
 </div>



<?php get_footer();?>