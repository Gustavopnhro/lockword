<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <a href="<?=base_url('public/')?>">
        <span class="login-button">Do you have an account? Sign in</span>    
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section>
        <?= \Config\Services::session()->getFlashdata('error') ?>
        <?php echo form_open(base_url('public/register'));?>
            <label for="Name">Name</label>
            <input type="text" id="nome" name="nome" placeholder="Your Name" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="youremail@aqui.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required>

            <button type="submit" class="btn">Registrar</button>
        <?php form_close();?>
    </section>
<?= $this->endSection('content')?>