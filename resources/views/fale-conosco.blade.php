@extends('layouts.principal')

@section('title', 'Fale conosco')

@section('conteudo')
@component('components.breadcrumb') 
<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
<li class="breadcrumb-item active">Fale conosco</li>
@endcomponent
<!-- START CONTENT FALE CONOSCO -->
<section class="area-contact">
    <div class="container">
        <div class="row">
            <!-- Entre em contato -->
            <div class="col-md-8">
                <h1><i class="fa fa-phone"></i> Nós ligamos para você!</h1>
                <p>Informe seus dados, para que um de nossos especialistas entre em contato e realize uma avaliação gratuita. <strong>Nosso atendimento é Segunda à Sábado das 08:00 ás 17:00.</strong></p>
                <h2>Campo de preenchimento</h2>
                <form method="post" action="https://ieatprofissionalizante.com.br/fale-conosco/enviado">
                    <div class="form-group">
                        <label for="nome">Nome completo:</label>
                        <input type="text" class="form-control" name="nome" id="nome"  aria-required="true" required="required" placeholder="Exemplo: João da Silva" maxlength="60">
                    </div>
                    <div class="form-group">
                        <label for="email">Email (opcional):</label>
                        <input type="email" class="form-control" name="email" id="email" aria-required="true" required="required" placeholder="Exemplo: exemplo@email.com" maxlength="80">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="assunto">Assunto:</label>
                            <input type="text" class="form-control" name="assunto" id="assunto" aria-required="true" required="required"  placeholder="Assunto" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="celular">Celular  WhatsApp:</label>
                            <input type="tel" class="form-control phone" name="celular" id="celular" aria-required="true" required="required" placeholder="Número" maxlength="16">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem: </label>
                        <textarea class="form-control" rows="5" id="mensagem" name="mensagem" maxlength="255" required="required" placeholder="Digite sua mensagem" ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <aside class="atendimento">			
                    <h1><i class="fa fa-headphones"></i> Central de atendimento</h1>
                    <p>Segunda à Sábado das 08:00 ás 17:00 </p>
                    <p><i class="fa fa-phone"></i> (11) 2551-9764 <br class="visible-xs"><i class="fab fa-whatsapp"></i> (11) 9 4030-1118 <br><i class="fas fa-envelope"></i>  contato@ieatprofissionalizante.com.br</p>

                    <h1><i class="fas fa-map-marker"></i> Localidade</h1>
                    <p>Rua Doutor Meira pena, 29 - Vila Lourdes - Guaianases - SP <br /></p>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- END./ CONTENT FALE CONOSCO -->
@stop