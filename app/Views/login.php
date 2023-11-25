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
        <?= \Config\Services::session()->getFlashdata('error') ?>
        <?php echo form_open(base_url('public/'))?>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="youremail@aqui.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required>

            <button type="submit" class="btn">Sign In</button>
        <?php echo form_close()?>
    </section>
<?= $this->endSection('content')?>
