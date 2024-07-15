<?php
session_start();
$title = 'Công Cụ Up Ảnh Không Giới Hạn';

// Tạo CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

include 'php/header.php';
?>
<main class="main-container">
    <form id="imageform" method="post" enctype="multipart/form-data" action="lib_uploadimage.php">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
        <label for="file-input" class="label-file">Chọn Tệp</label>
        <input type="file" name="file" id="file-input">
        <div id="preview-container" class="image-preview-container">
            <img id="image-preview" class="image-preview" src="#" alt="Image Preview" style="display: none;">
        </div>
        <input type="submit" name="photoimg" value="Upload Ảnh">
        <?php
        function er($text) {
            return '<div style="width: 95%; padding: 6px; border-radius: 5px; background: #D7C042;"><b style="color: red">Lỗi:</b> ' . $text . '</div>';
        }
        if (isset($_GET['er'])) {
            switch ($_GET['er']) {
                case 1:
                    $error = er("Hành động của bạn không hợp lệ !!!");
                    break;
                case 2:
                    $error = er("Ảnh Quá Lớn, vui lòng chọn file < 20MB");
                    break;
                case 3:
                    $error = er("Có Vẻ Ảnh Bạn Chọn Không Phải Là Ảnh");
                    break;
                case 4:
                    $error = er("Chiều dài và rộng của ảnh quá lớn. Hãy upload ảnh nhỏ hơn 20000x20000 px");
                    break;
                case 5:
                    $error = er("Định Dạng Ảnh Không Được Phép Upload");
                    break;
                case 6:
                    $error = er("Không thể upload ảnh của bạn, hãy thử lại!");
                    break;
                case 7:
                    $error = er("Bạn hãy chọn ảnh để upload nhé!!!");
                    break;
                case 8:
                    $error = er("CSRF token không hợp lệ, hãy thử lại!");
                    break;
                default:
                    $error = er("Có lỗi xảy ra!");
            }
            echo $error;
        } elseif (isset($_GET['link'])) {
            echo '<p>Copy Link Ảnh Này Của Bạn Dán Vào Nơi bạn cần<br><input value="' . base64_decode($_GET['link']) . '"></p>';
        }
        ?>
    </form>
</main>
<?php include 'php/footer.php'; ?>
<script>
    document.getElementById('file-input').addEventListener('change', function(event){
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.getElementById('image-preview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    function toggleTheme() {
        const body = document.body;
        const newTheme = body.classList.contains('light-theme') ? 'dark-theme' : 'light-theme';
        body.classList.remove('light-theme', 'dark-theme');
        body.classList.add(newTheme);
        localStorage.setItem('theme', newTheme);
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        const savedTheme = localStorage.getItem('theme') || 'light-theme';
        document.body.classList.add(savedTheme);
        const themeSwitch = document.getElementById('theme-switch');
        themeSwitch.checked = savedTheme === 'dark-theme';
        themeSwitch.addEventListener('change', toggleTheme);
    });
</script>
</body>
</html>
