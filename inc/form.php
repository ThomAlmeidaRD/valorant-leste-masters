<div class="form-modal" id="form-modal">

    <div class="form-modal-content">
        <form action="https://formsubmit.co/your@email.com" method="POST">

            <h2>Realizar Inscrição</h2>
            <br>

            <label for="">Nome</label>
            <br>
            <input type="text" name="name" placeholder="Nome" required>

            <br>
            <label for="">Discord</label>
            <br>
            <input type="text" name="name" placeholder="usuario#123" required>

            <br>
            <label for="">Nick Valorant (não poderá ser trocado depois!)</label>
            <br>
            <input type="text" name="Valorant ID" placeholder="Usuario#123" required>

            <br>
            <label for="">Vai se inscrever junto com um time?</label>
            <br>

            
            <select name="time" id="form-select" required>
                <option value="defalut">Escolha uma opção</option>
                <option value="Sim">Sim, estou com um time fechado</option>
                <option value="Não">Não, vou entrar pelo draft</option>
            </select>

            <input type="hidden" name="time-or-draft" id="team-draft" value="">

            <br>
            <button type="submit" id="submit-form">Enviar Inscrição</button>
            <button id="close-form" onclick="closeForm()">Fechar</button>
        </form>
    </div>

</div>