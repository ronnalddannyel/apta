<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Receber avisos por whatsapp</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Nome">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Whatsapp">
              <button type="submit" value="send" class="btn btn-primary">Receber</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
           <!-- logo -->
           <a class="navbar-brand" href="index.html">APTA</a>
           <ul class="list-unstyled">
             <li class="mb-2">Endereço</li>
             <li class="mb-2">+55 (95) 00000-0000</li>
             <li class="mb-2">+55 (95) 00000-0000</li>
             <li class="mb-2">email@email.com</li>
           </ul>
         </div>
         <!-- company -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Empresa</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Curos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Polos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Professores</a></li>
             <li class="mb-3"><a class="text-color" href="#">Eventos</a></li>
           </ul>
         </div>
         <!-- links -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">LINKS</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Curos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Polos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Professores</a></li>
             <li class="mb-3"><a class="text-color" href="#">Eventos</a></li>
           </ul>
         </div>
         <!-- support -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Opção</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#!">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#!">Opção</a></li>
           </ul>
         </div>
         <!-- support -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Opção</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="h#">Opção</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- copyright -->
   <div class="copyright py-4 bg-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-7 text-sm-left text-center">
           <p class="mb-0">Copyright &copy;
             <script>
               var CurrentYear = new Date().getFullYear()
               document.write(CurrentYear)
             </script> 
             , design & desenvolvido por <a href="#" class="text-muted">RYFOX SOLUÇÕES TECNOLÓGICAS </a>
           </p>
         </div>
         <div class="col-sm-5 text-sm-right text-center">
           <ul class="list-inline">
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!-- /footer -->
 

 <script>
var options = {
onKeyPress: function (cpf, ev, el, op) {
var masks = ['000.000.000-000', '00.000.000/0000-00'];
$('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
}
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
</script>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>
</body>
</html>
