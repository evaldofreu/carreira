<div class="container">
  
    <form>
        <div class="mb-3 input-group">
          <span class="input-group-text">Nome</span>
          <!--Incluir Atributo "name" nos inputs que vão ser enviados para salvar no banco de dados -->        
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da empresa">
        </div>


        <div class="mb-3 input-group">
            <!--Incluir os inputs que serão utilizados para enviar a geolocalização  -->        
            <input type="hidden" id="geolocalizacao" name="geolocalizacao" >

            <span class="input-group-text">Endereço</span>
            <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço da empresa">
            <button type="button"  onclick="obterCoordenadasGoogleMaps()" class="input-group-text">Localizar</button>
        </div>
        <?php require 'pages/empresa/mapa.php'; ?>

        <!--botão para salvar o formulário -->        
        <div class="mb-3 input-group  justify-content-end ">
           <button type="submit"  class="input-group-text ">Salvar</button>
        </div>            
        
    </form>    
</div>

