<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <a href="<?=base_url('public/')?>">
        <span class="login-button">Já tem conta? Faça o login</span>    
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section>
        <form action="processar_registro.php" method="post">    
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit" class="btn">Registrar</button>
        </form>
    </section>
<?= $this->endSection('content')?>