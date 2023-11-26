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

    <?php
            $message = \Config\Services::session()->getFlashdata('message');
            $error = \Config\Services::session()->getFlashdata('error');

            if ($message !== null && !empty($message)) {
                echo '<div class="message" id="message">';
                echo \Config\Services::session()->getFlashdata('message');
                echo '</div>';
            } elseif ($error !== null && !empty($error)) {
                echo '<div class="error" id="error">';
                echo \Config\Services::session()->getFlashdata('error');
                echo '</div>';
            }
        ?>

        
        

        <?php echo form_open(base_url('public/'))?>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="youremail@aqui.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" minlength="6" required>

            <button type="submit" class="btn">Sign In</button>
        <?php echo form_close()?>
    </section>


    <script>
            setTimeout(function() {
                var message = document.getElementById('message');
                message.style.display = 'block';

                setTimeout(function() {
                    message.style.display = 'none';
                }, 3000); 
            }, 1000);

            setTimeout(function() {
            var message = document.getElementById('error');
            message.style.display = 'block';

            setTimeout(function() {
                message.style.display = 'none';
            }, 3000); 
        }, 1000);  
    </script>
<?= $this->endSection('content')?>
