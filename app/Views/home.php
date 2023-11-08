<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section style="background-color: #F1F5F2">
        <div class="generator-box">
            <div class="campo_senha">
                <input type="text" id="campoSenha">
                <img class="copyicon" src="<?= base_url('/public/img/copy-logo-wt.png') ?>" alt="copy icon">
            </div>

            <div class="checkboxes-area">
                <span>Tamanho</span>
                <input type="number" id="tamanho">
            </div>
            <div class="btn-area">
                <button id="gerarSenha">Gerar</button>

            </div>

        </div>    
    </section>
<script>
    var campo = document.getElementById("campoSenha");
    var campoTamanho = document.getElementById("tamanho")

    var caracteresPermitidos = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_";


    function gerarSenha(tamanho) {

        var senha = "";
        for (var i = 0; i < tamanho; i++) {
            var indice = Math.floor(Math.random() * caracteresPermitidos.length);
            senha += caracteresPermitidos.charAt(indice);
        }
        return senha;
    }

    document.getElementById("gerarSenha").addEventListener("click", function() {
        if (parseInt(campoTamanho.value) > 0) {
            var novaSenha = gerarSenha(parseInt(campoTamanho.value));
        } else {
            var novaSenha = gerarSenha(12);
        }
        campo.value = novaSenha;
    });
</script>
<?= $this->endSection('content')?>

