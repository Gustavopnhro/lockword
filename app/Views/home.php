<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section>
        <div class="generator-box">
        <form action="" method="post" class="generator-box">
                <label for="password" class="generator-label">Title</label>
                <input type="text" id="field_title" required>

                <label for="password" class="generator-label">Login</label>
                <input type="text" id="login_field" placeholder="youremail@aqui.com">

                <label for="password" class="generator-label" >Password</label>
                <input type="text" id="field_pass" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                <span id="generate_password"> Generate </span>

                <label for="text" class="generator-label">Lenght</label>
                <input type="number" id="lenght">

                <input type="submit" value="Save" id="save_key">
        </form>                
    </section>
<script>
    var field = document.getElementById("field_pass");
    var fieldlenght = document.getElementById("lenght")

    var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_";


    function generate_password(lenght) {

        var password = "";
        for (var i = 0; i < lenght; i++) {
            var indice = Math.floor(Math.random() * chars.length);
            password += chars.charAt(indice);
        }
        return password;
    }

    document.getElementById("generate_password").addEventListener("click", function() {
        if (parseInt(fieldlenght.value) > 0) {
            var new_password = generate_password(parseInt(fieldlenght.value));
        } else {
            var new_password = generate_password(12);
        }
        field.value = new_password;
    });
</script>
<?= $this->endSection('content')?>
