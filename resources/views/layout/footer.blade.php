<!-- Start Footer -->
<footer class="footer_detail">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-12">
                <div class="text-center footer_about">
                    <h3 class="text-white font-weight-bold mb-0">Seja um dos nossos clientes</h3>
                    <p class="mx-auto mt-4 mb-0">A tecnologia pode se tornar uma grande aliada na gestão do relacionamento com o cliente e, consequentemente, influenciar positivamente na experiência vivida na sua empresa.</p>
                </div>
                <div class="text-center mt-4">
                    <a href="#contact" type="button" class="btn btn-outline-custom btn-rounded">Entre em Contato</a>
                </div>
            </div>
        </div>
        
        <div class="fot_bor"></div>
        <div class="row pt-3 pb-3">
            <div class="col-lg-12">
                <div class="float-left float_none">
                    <p class="copy-rights mb-0"><a target="_blank" href="#">Pan-It</a>
                    </p>
                </div>
                <!-- Redes Sociais -->
               <!-- <div class="float-right float_none">
                    <ul class="list-inline fot_social mb-0">
                        <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                    class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                    class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                    class="mdi mdi-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i
                                    class="mdi mdi-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/5524981156051?text=Quero entrar em contato" style="position:fixed;width:60px;height:60px;bottom:40px;left:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>
</footer>
<!-- End Footer -->

<!-- Back to top -->
<a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>

<!-- JAVASCRIPTS -->
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/jquery.easing.min.js')}}"></script>

<!-- scrollspy js -->
<script src="{{url('js/scrollspy.min.js')}}"></script>

<!-- isotope js -->
<script src="{{url('js/isotope.js')}}"></script>

<!-- magnific js -->
<script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>

<!-- Particles Js -->
<script src="{{url('js/particles.js')}}"></script>
<script src="{{url('js/particles.app.js')}}"></script>

<!-- isotope js -->
<script src="{{url('js/isotope.js')}}"></script>

<!-- custom js -->
<script src="{{url('js/custom.js')}}"></script>

<script>
    $(".element").each(function() {
            var $this = $(this);
            $this.typed({
                strings: $this.attr('data-elements').split(','),
                typeSpeed: 100,
                backDelay: 3000
            });
        });

        function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('#telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}
</script>

</body>


<!-- solid_405:49-->

</html>