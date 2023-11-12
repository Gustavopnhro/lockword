<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <a href="<?=base_url('public/register')?>">
        <span class="register-button">Sign up</span>    
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section>
        <form action="processar_login.php" method="post">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="youremail@aqui.com" required>

            <label for="senha">Password</label>
            <input type="password" id="senha" name="senha" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>

            <button type="submit" class="btn">Sign In</button>
        </form>
    </section>
<?= $this->endSection('content')?>