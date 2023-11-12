<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <a href="<?=base_url('public/register')?>" class="logout-button">
        <span>Sair</span>
    </a>
    <a href="<?=base_url('public/generator')?>">
        <button class="plus-btn">
            &#43;    
        </button>
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>

<section>
    <p class="msg-without-key">You haven't any keys yet :(</p>
    
    <ul class="board">
        <li class="info-key-bx">
            <div class="info-key-body">
                <p class="info-key-title">Google</p>
                <p class="info-key-login">emailteste@mail.com</p>

                <div class="info-key-bttns">
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/trash.png') ?>" alt="delete icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/pen.png') ?>" alt="edit icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon">
                    </div>
                </div>
            </div>

            <!-- <div class="info-key-bttns">
                <div class="info-key-btn">
                    <img src="<?= base_url('/public/img/trash.png') ?>" alt="logomarca">
                </div>
                <div class="info-key-btn">
                    <img src="<?= base_url('/public/img/pen.png') ?>" alt="logomarca">
                </div>
            </div> -->
            

        </li>
        <li class="info-key-bx">
            <div class="info-key-body">
                <p class="info-key-title">Google</p>
                <p class="info-key-login">emailteste@mail.com</p>

                <div class="info-key-bttns">
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/trash.png') ?>" alt="delete icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/pen.png') ?>" alt="edit icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon">
                    </div>
                </div>
            </div>

            <!-- <div class="info-key-bttns">
                <div class="info-key-btn">
                    <img src="<?= base_url('/public/img/trash.png') ?>" alt="logomarca">
                </div>
                <div class="info-key-btn">
                    <img src="<?= base_url('/public/img/pen.png') ?>" alt="logomarca">
                </div>
            </div> -->
            

        </li>
        <li class="info-key-bx">
            <div class="info-key-body">
                <p class="info-key-title">Google</p>
                <p class="info-key-login">emailteste@mail.com</p>

                <div class="info-key-bttns">
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/trash.png') ?>" alt="delete icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/pen.png') ?>" alt="edit icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon">
                    </div>
                </div>
            </div>
        </li>
        <li class="info-key-bx">
            <div class="info-key-body">
                <p class="info-key-title">Google</p>
                <p class="info-key-login">emailteste@mail.com</p>

                <div class="info-key-bttns">
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/trash.png') ?>" alt="delete icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/pen.png') ?>" alt="edit icon">
                    </div>
                    <div class="info-key-btn">
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon">
                    </div>
                </div>
            </div>
        </li>
    </ul>

</section>
    

<?= $this->endSection('content')?>

