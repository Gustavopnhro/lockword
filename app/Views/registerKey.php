<?= $this->extend('layouts/main') ?>

<?= $this->section('header')?>

    <a href="<?=base_url('public/')?>">
        <img src="<?= base_url('/public/img/logo.png') ?>" alt="logomarca">
    </a>

<?= $this->endSection('header')?>

<?= $this->section('content')?>
    <section>
        <?= \Config\Services::validation()->listErrors(); ?>

        <div class="generator-box">

            <?php echo form_open(base_url('public/store')); ?>
                <label for="field_title" class="generator-label">Title</label>
                <input type="text" id="field_title" name="field_title" required>

                <label for="login_field" class="generator-label">Login</label>
                <input type="text" id="login_field" name="login_field" placeholder="youremail@aqui.com">

                <label for="field_pass" class="generator-label">Password</label>
                <input type="text" id="field_pass" name="field_pass" placeholder="••••••••" required>
                <span id="generate_password"> Generate </span>

                <label for="lenght" class="generator-label">Length</label>
                <input type="number" id="lenght" name="lenght">

                <input type="submit" value="Save" id="save_key">
            </form>
        </div>
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
