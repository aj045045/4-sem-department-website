<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./include/css/bootstrap.min.css">
    <script src="./include/js/bootstrap.bundle.min.js"></script>
    <title>Event </title>
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-control {
            width: 9cm;
        }

        .card-body {
            display: block;
            margin: 0px 80px;
        }

        .row>* {
            padding: 0px;
        }

        .card-img-top {
            margin: 1ch 30%;
            max-width: 150px;
        }

        .text-primary:link {
            text-decoration: none;
        }

        .text-primary:hover {
            text-decoration: underline;
        }

        .linkers {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            display: block;
        }

        .card {
            background-color: #ffffffd3;
            height: 9in;
            width: auto;
            overflow: hidden;
            margin-bottom: 1in;
        }

        input[type="file"] {
            display: none;
        }

        .preview>#file-preview {
            width: 100px;
            border: 50%;
            display: block;
            margin: auto;
        }

        input {
            margin: 4px 0px;
        }

        form {
            padding-left: 30px;
        }

        .modal-body {
            display: block;
            margin: auto;
        }

        .card {
            height: 1in;
            width: 1in;
            margin-bottom: 0in;
        }

        .card-img-top {
            width: 0.6in;
            display: block;
            margin: auto;
            margin-top: 20px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- Modal trigger button -->
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
        Add Event
    </button>
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Add event </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="preview">
                        <img src="./../image/logos/bgfreelogo.webp" id="file-preview" class="center" alt="department of computer science logos">
                    </div>
                    <form action="" method="post" id="userForm">
                        <table>
                            <tr>
                                <td>
                                    Title :
                                </td>
                                <td>
                                    <input type="text" placeholder="Title" name="title">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description :
                                </td>
                                <td>
                                    <textarea name="description" cols="23" rows="2" form="userForm" placeholder="Description"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Venue :
                                </td>
                                <td>
                                    <input type="text" name="venue" placeholder="Venue">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Starting at :
                                </td>
                                <td>
                                    <input type="datetime-local" name="startTime" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ending at :
                                </td>
                                <td>
                                    <input type="datetime-local" name="endTime" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="inline-block">
                                        <div class="card">
                                            <img class="card-img-top file-image-1" src="./../image/logos/plus-icon.jpg" alt="Title">
                                        </div>
                                        <input type="file" name="file-image-1" accept="image/png" onchange="showPreview(this);">
                                    </label>
                                </td>
                                <!-- <td>
                                    <label class="inline-block h-10 p-2 my-2 ml-10 bg-white border-gray-300 rounded-md w-80 border-1 sm:ml-12 text-md">
                                        <input type="file" name="profile" accept="image/png" onchange="showPreview(event);">
                                    </label>
                                </td> -->
                            </tr>
                        </table>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional: Place to the bottom of scripts -->
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementsByClassName();
                console.log("Class",preview);
                console.log("Address",event);
                preview.src = src;
                preview.style.display = "block";
            }
        }
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
</body>

</html>