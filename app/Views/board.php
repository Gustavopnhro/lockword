<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?= base_url('/public') ?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

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
                        <img src="<?= base_url('/public/img/copy-icon-wt.png') ?>" alt="copy icon">
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach?>
    <?php else: ?>
        <p class="msg-without-key">You haven't any keys yet :(</p>
        
    <?php endif?>
    </ul>
        
        
        
    </table>

</section>
    

<?= $this->endSection('content')?>

