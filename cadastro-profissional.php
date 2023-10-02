<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadprof.css">
    <link rel="stylesheet" href="css/esqueceu-senha.css">
    <title>Cadastro Profissional</title>
</head>

<body class="body-esqueceu-senha">
    <main class="main-esqueceu-senha">
        <div class="container-esqueceu-senha container-cadastro-profissional">
        <div class="form-img-esqueceu-senha">
            <div class="texto">
                <h1 class="welcome">Welcome to</h1>
                <h1 class="psi">PSI</h1>
                <h1 class="devs">Devs</h1>
                <p class="texto-img">A Psidevs torna simples encontrar psicólogos qualificados online e reservar consultas de forma conveniente.</p>
            </div>
            <div class="imagem">
                <img src="img/duasmocassentadas.svg" alt="duasmocassentadas">
            </div>
        </div>



        <div class="form-esqueceu-senha">
            
            <h1 class="bem-psidev">Bem-vindo ao Psidevs</h1>
            <p class="venha-conhecer">Venha conhecer os nossos serviços</p>

            <form action="processa_cadastro.php" method="POST" class="form-control">
                <label for="nome"></label>
                <input class="input-nome" type="text" id="nome" name="nome" required placeholder="Digite seu nome"><br>

                <label for="email"></label>
                <input class="email" type="email" id="email" name="email" required placeholder="Digite seu e-mail"><br>

                <label for="senha"></label>
                <input class="senha" type="password" id="senha" name="senha" required placeholder="senha"><br>

                <div class="lembrar-senha">
                    <label for="lembrar-senha">Lembrar Senha:</label>
                    <input type="checkbox" id="lembrar-senha" name="lembrar-senha" class="botao-lembrar-senha"><br>
                </div>

                

                <div class="crp-celular">
                    <label for="celular"></label>
                    <input type="tel" id="celular" name="celular" required placeholder="Digite seu número de celular" class="celular"><br>

                    <label for="cpf"></label>
                    <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF" class="cpf"><br>

                    <label for="crp"></label>
                    <input type="text" id="crp" name="crp" required placeholder="Digite seu CRP" class="crp"><br>

                    <label for="ano-formacao"></label>
                    <input type="number" id="ano-formacao" name="ano-formacao" required placeholder="Digite o ano de formação" class="ano-formacao"><br>

                </div> <label for="especialidade"></label>
                <select class="especialidade" id="especialidade" name="especialidade">
                    <option value="" selected disabled>Especialidade</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="psiquiatria">Psiquiatria</option>
                    <option value="terapia-ocupacional">Terapia Ocupacional</option>
                </select><br>

                <div class="sexo">
                    <label class="genero">Gênero:</label><br>
                    <input type="radio" id="genero-masculino" name="genero" value="masculino">

                    <label for="genero-masculino">Masculino</label><br>

                    <input type="radio" id="genero-feminino" name="genero" value="feminino">
                    <label for="genero-feminino">Feminino</label><br>

                    <input type="radio" id="genero-nao-binario" name="genero" value="nao-binario">
                    <label for="genero-nao-binario">Não Binário</label><br>
                </div>


                <div class="termos-container">
                    <input type="checkbox" id="termos-politica" name="termos-politica" required>
                    <label for="termos-politica">Aceitar os <a href="termos.html">Termos e Condições</a> e a <a href="politica_privacidade.html">Política de Privacidade</a>:</label>
                </div>

                <button type="submit">Entrar </button>
            </form>

        </div>
        </div>
        

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>