<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>Chat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/beranda.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/compiled/css/ui-widgets-chatbox.css">
    <style>
        .list-group-item.active a {
            color: white;
        }

        .list-group-item:not(.active) a {
            color: black;
        }

        /* Add this to your stylesheet */
        .chat-scroll-container {
            max-height: 480px;
            /* Adjust the max height as needed */
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light stiky-top">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="image/logo romusha.png" width="auto" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <a href="/cart" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                <?php if(!empty(session('user'))): ?>
                <a href="/profil" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                <?php else: ?>
                <a href="/login" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Sidebar with list of message senders -->
    <div class="container-md">
        <section class="section">
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>

                    <ul class="list-group">
                        <?php $__currentLoopData = $orang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $senderId => $senderName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <a href="<?php echo e(url('/chat/' . $senderId)); ?>" class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <span class="avatar-status bg-success"></span>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="name"><?php echo e($crid); ?></span>
                                    <p>Last message...</p>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <!-- Main chat area -->
                <div class="col-md-9">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <!-- Sender information -->
                            <li class="list-group-item">
                                <!-- Sender information goes here -->
                            </li>
                            <!-- Chat messages as a list -->
                            <li class="list-group-item bg-grey">
                                <div class="chat-scroll-container">
                                    <ul class="list-unstyled mb-0">
                                        <!-- Iterate through $chat for the selected sender -->
                                        <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="mb-2">
                                            <div
                                                class="chat <?php echo e($message->pengirim == session('user')->_id ? '' : 'chat-left'); ?>">
                                                <div class="chat-body">
                                                    <div class="chat-message mb-2" style="margin-bottom: 20px"><?php echo e($message->pesan); ?></div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                            <!-- Message input form -->
                            <li class="list-group-item">
                                <div class="message-form d-flex flex-direction-column align-items-center">
                                    <div class="d-flex flex-grow-1 ms-4">
                                        <form action="/postchat" method='post' class="d-flex">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" name='pesan' class="form-control me-3"
                                                placeholder="Type message" />
                                            <input type="hidden" name='crid' value="<?php echo e($crid); ?>" class="form-control" />
                                            <button class="btn btn-primary" type="submit"
                                                id="button-addon2">Kirim</button>
                                        </form>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    </div>




    <br><br>
    <!-- Bootstrap JavaScript -->
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="assets/compiled/js/app.js"></script>



    <!-- Need: Apexcharts -->
    <script src="assets/extensions/dayjs/dayjs.min.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script src="assets/static/js/pages/ui-apexchart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript untuk mengubah latar belakang navbar saat di-scroll
        window.addEventListener("scroll", function () {
            var navbar = document.querySelector(".navbar");
            if (window.scrollY > 100) {
                navbar.classList.add("navbar-white");
            } else {
                navbar.classList.remove("navbar-white");
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            const smallCards = document.querySelectorAll('.custom-background .small-card');

            function checkIfInView() {
                smallCards.forEach(card => {
                    const rect = card.getBoundingClientRect();
                    const isInView = (rect.top >= 0 && rect.bottom <= window.innerHeight);
                    if (isInView) {
                        card.classList.add('card-entered');
                    }
                });
            }

            window.addEventListener('scroll', checkIfInView);
            checkIfInView(); // Check on page load
        });
    </script>
</body>

</html><?php /**PATH D:\Semester 3\Pemograman Web\freshCatch-app\resources\views/chat.blade.php ENDPATH**/ ?>