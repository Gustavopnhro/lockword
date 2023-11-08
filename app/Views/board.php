<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

    <a href="<?=base_url('public/register')?>">
        <span class="logout-button">Sair</span>    
    </a>
<?= $this->endSection('header')?>

<?= $this->section('content')?>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" id="closeBtn" onclick="closeNav()">&#9666; Fechar</a>
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="openBtn">&#9776;</span>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<?= $this->endSection('content')?>

