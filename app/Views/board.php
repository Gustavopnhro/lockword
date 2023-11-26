<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?= base_url('/public') ?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <div class="username-box">
        Welcome <?php echo $username['name']?>!
    </div>  

    <a href="<?=base_url('public/logout')?>" class="logout-button">
        <span>Sair</span>
    </a>
    <a href="<?=base_url('public/create')?>">
        <button class="plus-btn">
            &#43;    
        </button>
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>

    <?php
            $message = \Config\Services::session()->getFlashdata('message');

            if ($message !== null && !empty($message)) {
                echo '<div class="message" id="message">';
                echo \Config\Services::session()->getFlashdata('message');
                echo '</div>';
            }
        ?>
<section>    
    <ul class="board">
    <?php if (!empty($keys)):?>
        <?php foreach ($keys as $key): ?>
        <li class="info-key-bx">

            <div class="info-key-body">
                <p class="info-key-title"><?php echo $key['title']?></p>
                <p class="info-key-login"><?php echo $key['login']?></p>

                <div class="info-key-bttns">
                    <div class="info-key-btn">
                    <a href="delete/<?php echo $key['id']?>">
                        <img src="<?= base_url('/public/img/trash.png') ?>" alt="delete icon">
                    </a>
                    </div>
                    <div class="info-key-btn">
                    <a href="edit/<?php echo $key['id']?>">
                        <img src="<?= base_url('/public/img/pen.png') ?>" alt="edit icon">
                    </a>
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon" onclick="copy()">
                    </div>
                </div>
            </div>
        </li>

        <script>
            function copy(){
                var password = "<?php echo $key['password']?>";
                var tempInput = document.createElement("input");
                tempInput.value = password;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);
            }

        </script>
    
        <?php endforeach?>
    <?php else: ?>
        <p class="msg-without-key">You haven't any keys yet :(</p>
        
    <?php endif?>
    </ul>
</section>



<?= $this->endSection('content')?>

