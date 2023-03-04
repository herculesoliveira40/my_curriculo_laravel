<fieldset>
    <Legend><strong> Dados Pessoais: </strong></Legend> <p> </p>

    <label> Nome Completo: </label>                 
    <input type="text" name="nome" id="nome" placeholder="Informe seu Nome Completo:"  value="{{ $curriculo->nome ?? old('nome') }}" class="form-control"required>   <br>

    <label> Celular: </label> 
    <input type="tel" name="telefone" id="telefone" placeholder="Celular:" onkeypress="$(this).mask('(00) 90000-0000')" value="{{ $curriculo->telefone ?? old('telefone') }}" class="form-control" required>   <br>
    
    <label> email: </label>    
    <input type="email" name="email" id="email" placeholder="Informe seu Email:" value="{{ $curriculo->email ?? old('email') }}" class="form-control" required>   <br>
    
    <label> Idade: </label> 
    <input type="number" name="idade" id="idade" min="1" max="99" placeholder="Idade:" value="{{ $curriculo->idade ?? old('idade') }}" class="form-control" required>    <br>

    <label> Cidade: </label> 
    <input type="text" name="cidade" id="cidade" placeholder="Informe sua Cidade:" value="{{ $curriculo->cidade ?? old('cidade') }}" class="form-control" required>  <br>
  
    <label> Area: </label> 
    <select name="area" id="area">
        <option value="1">Administração, negócios e serviços</option>
        <option value="2">Artes e Comunicação</option>
        <option value="3">Ciências Biológicas e da Terra</option>
        <option value="4">Ciências Exatas</option>
        <option value="5">Ciências Sociais e Humanas</option>
        <option value="6">Engenharia e Produção</option>
        <option value="7">Saúde e Bem-Estar</option>
        <option value="8">Tecnologia</option>
        <option value="9">Outras</option>
    </select> <br>
  
    

</fieldset>   

<fieldset>
    <Legend><strong> Dados Profissionais: </strong></Legend> <p> </p>

        
    <label> Sobre: </label> 
    <textarea type="text" name="sobre" placeholder="SOBRE: " class="form-control" required> {{ $curriculo->sobre ?? old('sobre') }} </textarea>     <br>

    <label> Formação: </label>
    <textarea type="text" name="formacao" placeholder="FORMAÇÃO: " class="form-control" required> {{ $curriculo->formacao ?? old('formacao') }} </textarea>   <br>
    
    <label> Conhecimentos Complementares: </label> 
    <textarea type="text" name="conhecimento_complementar" placeholder="CONHECIMENTOS COMPLEMENTARES: " class="form-control" required> {{ $curriculo->conhecimento_complementar ?? old('conhecimento_complementar') }} </textarea>   <br>
    
    <label> Experiências Profissionais: </label> 
    <textarea type="text" name="experiencia" placeholder="EXPERIÊNCIAS PROFISISONAIS: " class="form-control" required> {{ $curriculo->experiencia ?? old('experiencia') }} </textarea>   <br>

</fieldset>             

<input type="submit" class="btn btn-success" value="Salvar">
