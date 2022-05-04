<div class="form-modal" id="form-modal">

    <div class="form-modal-content">
        <form action="https://formsubmit.co/valorantlestemasters.oficial@gmail.com" method="POST">

            <h2>Realizar Inscrição</h2>
            <br>

            <label for="">Nome</label>
            <br>
            <input type="text" name="Nome" placeholder="Nome" required>

            <br>
            <label for="">Discord</label>
            <br>
            <input type="text" name="Discord" placeholder="usuario#123" required>

            <br>
            <label for="">Nick Valorant (não poderá ser trocado depois!)</label>
            <br>
            <input type="text" name="Valorant ID" placeholder="Usuario#123" required>

            <br>
            <label for="">Vai se inscrever junto com um time?</label>
            <br>

            
            <select name="Draft ou Time fechado?" id="form-select" required>
                <option value="defalut">Escolha uma opção</option>
                <option value="Sim estou com um time fechado">Sim, estou com um time fechado</option>
                <option value="Não, vou entrar pelo draft">Não, vou entrar pelo draft</option>
            </select>

            <br>
            <button type="submit" id="submit-form">Enviar Inscrição</button>
            <button id="close-form" onclick="closeForm()">Fechar</button>


            <input type="hidden" name="_next" id="nextPage" >
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_captcha" value="false">

        </form>
    </div>

</div>