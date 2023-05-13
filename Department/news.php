<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="./links/bs5/bs.min.css">
    <script src="./admin/include/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./links/css/tw.css">
    <link rel="shortcut icon" href="image/logos/logo.webp" type="image/png">';
    <title>Depart. of Computer science</title>
    <?php include "links/include/link.php" ?>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include "links/include/header.php" ?>



    <div class=" tw-bg-slate-300 tw-shadow-lg tw-shadow-slate-500 tw-mx-20 tw-p-10 tw-rounded-md tw-m-80" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class=" tw-text-center tw-capitalize tw-text-5xl" style="font-family: Brush Script MT;">News list</div>
        <button type="button" class=" tw-w-full" data-bs-toggle="modal" data-bs-target="#modalId1">
            <div class=" tw-flex-col tw-flex tw-h-26 tw-bg-white tw-rounded-2xl tw-my-10 tw-shadow-lg text-dark">
                <div class=" tw-flex-row tw-flex">
                    <img src="" class="tw-h-10 tw-mt-3 tw-ml-10 tw-rounded-full tw-w-10 " alt="">
                    <div class=" tw-w-2/5 tw-mt-5 tw-ml-3 tw-items-start tw-font-serif tw-text-lg"></div>
                    <div class="tw-w-2/8 tw-mx-auto tw-mt-6 tw-font-mono"><i class=" tw-font-bold tw-mx-3">Date</i></div>
                </div>
                <hr class=" tw-border-black tw-mx-auto tw-block tw-w-11/12 tw-mt-3">
                <div class=" tw-flex tw-flex-row tw-mx-auto">
                    <i class=" tw-font-bold tw-mx-3">Category</i>
                    <div class=" tw-font-mono"></div>
                </div>
            </div>
        </button>
    </div>
    <!-- Modal trigger button -->
    Launch







    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId1" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    Body
                </div>
                <div class="modal-footer">
                    <button type="button" class="" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
    <?php include "links/include/footer.php" ?>
</body>

</html>